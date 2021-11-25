<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php");

    // $received_data = json_decode(file_get_contents("php://input"));

    function insertProductToCard($product_id){
        $user_id = $_SESSION['user_data']['user_id'];
        $sql = "INSERT INTO `tbl_cart` (`user_id`, `product_id`) VALUES ('".$user_id."', '".$product_id."')";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return getProductFromCart($user_id);
    }

    function getProductFromCart($user_id){
        $sql = "SELECT b.*
        FROM tbl_cart a 
        JOIN tbl_product b ON a.product_id = b.product_id
        WHERE a.user_id = ".$user_id."";

        $data = [];
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    function getDuplicateProductCodeByID($product_id, $user_id){
        $sql = "SELECT id FROM `tbl_cart`
                WHERE product_id = ".$product_id." 
                AND
                user_id = ".$user_id."
                LIMIT 1
            ";
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

?>