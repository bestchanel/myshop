<?php
    // @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/CartModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    $user_id = $_SESSION['user_data']['user_id'];
    if (is_array($input['product_id'])) {
        for ($i=0; $i < count($input['product_id']); $i++) { 
            $data = deleteProductInCartByID($input['product_id'][$i], $user_id);
            // echo json_encode($input['product_id'][$i]);
        }
    } else {
        $data = deleteProductInCartByID($input['product_id'], $user_id);
        // echo json_encode($input['product_id']);
    }
    
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);

?>