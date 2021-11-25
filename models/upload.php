<?php
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");
require_once("BaseModel.php");

// if(isset($_FILES['sample_image']))
// {
    // ======================== Get latest ID ========================
    
    $sql = "SELECT product_id FROM `tbl_product` ORDER BY `tbl_product`.`product_id`  DESC LIMIT 1";

    $statement = $connect->prepare($sql);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    
    // ========================= Upload File =========================
    
	$extension = pathinfo($_FILES['sample_image']['name'], PATHINFO_EXTENSION);
    
	$new_name = time() . '.' . $extension;
    
	move_uploaded_file($_FILES['sample_image']['tmp_name'], 'images/' . $new_name);
    
    // ========================= Edit Data =========================

    $sql = "UPDATE `tbl_product` SET `product_image` = '"."models/images/".$new_name."' WHERE `tbl_product`.`product_id` = ".$data['product_id']."";
    $statement = $connect->prepare($sql);
    $statement->execute();

    
	echo json_encode($data);
// }

?>