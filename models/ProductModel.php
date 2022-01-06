<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php");

    // $received_data = json_decode(file_get_contents("php://input"));


    if($input['action'] == 'add_product'){

        $product_name = $input['product_name'];
        $product_detail = $input['product_detail'];
        $product_detail_large = $input['product_detail_large'];
        $product_price = $input['product_price'];
        $product_group = $input['product_group'];
        $product_brand = $input['product_brand'];
        $product_image = $input['product_image'];
        $promotion = $input['promotion'];

        $product_group = strtoupper(str_replace(" ", "_", $product_group));
        $product_brand = strtoupper(str_replace(" ", "", $product_brand));

        $query = "INSERT INTO `tbl_product` (
            `product_id`, 
            `product_name`, 
            `product_detail`, 
            `product_detail_large`, 
            `product_group`, 
            `product_price`, 
            `product_brand`, 
            `product_image`, 
            `promotion`, 
            `product_rate`, 
            `product_updateby`, 
            `product_addby`, 
            `product_lastupdate`, 
            `product_insert`
            ) VALUES (
                NULL, 
                '".$product_name."', 
                '".$product_detail."', 
                '".$product_detail_large."', 
                '".$product_group."', 
                '".$product_price."', 
                '".$product_brand."', 
                '".$product_image."', 
                '".$promotion."', 
                '0', 
                '".$_SESSION['user_data']['user_id']."', 
                '".$_SESSION['user_data']['user_id']."', 
                NOW(), 
                NOW()
                )";

        $statement = $connect->prepare($query);
        $statement->execute();

        echo json_encode(true);
        
    }


    if($input['action'] == 'get_product'){

        $keyword = $input['keyword'];
        $product_group = $input['product_group'];

        if ($keyword) {
            $query = 'SELECT * FROM `tbl_product` WHERE 
            product_group LIKE "%'.$product_group.'%" AND
            product_name LIKE "%'.$keyword.'%" 
            ';
        }else{
            $query = 'SELECT * FROM `tbl_product` WHERE
            product_group LIKE "%'.$product_group.'%"
            ';
        }
        $data = [];
        $statement = $connect->prepare($query);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        if($data > 0){
            echo json_encode($data);
        }else{
            echo json_encode(false);
        }
        
        
    }

    if($input['action'] == 'update_product'){

        $product_id = $input['product_id'];
        $product_name = $input['product_name'];
        $product_detail = $input['product_detail'];
        $product_detail_large = $input['product_detail_large'];
        $product_group = $input['product_group'];
        $product_price = $input['product_price'];
        $product_brand = $input['product_brand'];
        $promotion = $input['promotion'];

        $product_group = strtoupper(str_replace(" ", "_", $product_group));
        $product_brand = strtoupper(str_replace(" ", "", $product_brand));

        $query = "UPDATE `tbl_product` SET 
        `product_name` = '".$product_name."', 
        `product_detail` = '".$product_detail."', 
        `product_detail_large` = '".$product_detail_large."', 
        `product_group` = '".$product_group."', 
        `product_price` = '".$product_price."', 
        `product_brand` = '".$product_brand."', 
        `promotion` = '".$promotion."', 
        `product_updateby` = '".$_SESSION['user_data']['user_id']."', 
        `product_lastupdate` = NOW() 
        WHERE 
        `tbl_product`.`product_id` = ".$product_id."";

        $statement = $connect->prepare($query);
        $statement->execute();

        echo json_encode(true);
        
        
    }

    function deleteProductByID($product_id){
        $sql = "DELETE FROM `tbl_product` WHERE product_id = ".$product_id."";
        
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return $product_id;
    }

?>