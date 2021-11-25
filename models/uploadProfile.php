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

    $sql = "UPDATE `tbl_users` SET 
    `user_profile` = '"."models/images/".$new_name."', 
    `user_update` = NOW() 
    WHERE 
    `tbl_users`.`user_id` = ".$_SESSION['user_data']['user_id']."
    ";

    $statement = $connect->prepare($sql);
    $statement->execute();

    
	echo json_encode($data);
// }

?>