<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php");

    // $received_data = json_decode(file_get_contents("php://input"));

    function insertNotificationByID($arr, $price){
        $user_id = $_SESSION['user_data']['user_id'];
        $round = count($arr);
        $sql = "INSERT INTO `tbl_notification` (`bill_code`, `buyer_id`, `dis_code`, `product_id`, `product_count`, `product_price_total`) VALUES";

        for ($i=0; $i < $round; $i++) { 
            if($i == $round-1){
                $sql.="('".$arr[$i]['bill_code']."', '".$arr[$i]['buyer_id']."', '".$arr[$i]['dis_code']."', '".$arr[$i]['product_id']."', '".$arr[$i]['product_count']."', '".$arr[$i]['product_price_total']."')";
            }else{
                $sql.="('".$arr[$i]['bill_code']."', '".$arr[$i]['buyer_id']."', '".$arr[$i]['dis_code']."', '".$arr[$i]['product_id']."', '".$arr[$i]['product_count']."', '".$arr[$i]['product_price_total']."'),";
            }
        }

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        removeMoneyUserByID($price);
        return $sql;
    }

    function removeMoneyUserByID($price){
        $user_id = $_SESSION['user_data']['user_id'];
        $new_money = floatval($_SESSION['user_data']['user_money']) - floatval($price);

        $sql = "UPDATE `tbl_users` SET 
        `user_money` = '".$new_money."'
        WHERE 
        `tbl_users`.`user_id` = ".$user_id."";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
    }

    function notificationAccept($id, $key, $val){

        $sql = "UPDATE `tbl_notification` SET `".$key."` = '".$val."' WHERE `tbl_notification`.`not_id` = ".$id.";";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return true;
    }

    function getProductNotificationBySellerID($seller_id){
        
        $sql = "SELECT a.*, c.*, b.product_name, b.product_detail, b.product_group, b.product_brand, b.product_image, d.dis_code, d.dis_detail
                FROM `tbl_notification` a
                LEFT JOIN tbl_product b ON a.product_id = b.product_id
                LEFT JOIN tbl_users c ON a.buyer_id = c.user_id
                LEFT JOIN tbl_discount d ON a.dis_code = d.dis_code
                WHERE b.product_addby = ".$seller_id."
            ";
        
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        $data = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;

    }

    function getProductNotificationByBuyerID($buyer_id){

        $sql = "SELECT a.*, b.*, c.product_name, c.product_detail, c.product_group, c.product_brand, c.product_image, d.dis_code, d.dis_detail
                FROM `tbl_notification` a
                LEFT JOIN tbl_product c ON a.product_id = c.product_id
                LEFT JOIN tbl_users b ON c.product_addby = b.user_id
                LEFT JOIN tbl_discount d ON a.dis_code = d.dis_code
                WHERE a.buyer_id = ".$buyer_id."
            ";
        
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        $data = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;

    }

?>