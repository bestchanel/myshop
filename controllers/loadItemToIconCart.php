<?php
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/CartModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    
    $data = getProductFromCart($_SESSION['user_data']['user_id']);
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    if (count($data)>0) {
        echo json_encode(count($data));
    } else {
        echo json_encode("");
    }
    
    

?>