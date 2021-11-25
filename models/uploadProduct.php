<?php
@session_start();
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");
require_once("BaseModel.php");

// if(isset($_FILES['sample_image']))
// {
    
    // ========================= Upload File =========================
    
	$extension = pathinfo($_FILES['sample_image']['name'], PATHINFO_EXTENSION);
    
	$new_name = time() . '.' . $extension;
    
	move_uploaded_file($_FILES['sample_image']['tmp_name'], 'images/' . $new_name);
    
    // ========================= Edit Data =========================

    $data = [];
    $data[] = $_POST['product_id'];
    $data[] = pathinfo($_FILES['sample_image']['name']);

    $sql = "UPDATE `tbl_product` SET `product_image` = '"."models/images/".$new_name."' WHERE `tbl_product`.`product_id` = ".$_POST['product_id']."";
    $statement = $connect->prepare($sql);
    $statement->execute();

    
	echo json_encode($data);
// }

?>