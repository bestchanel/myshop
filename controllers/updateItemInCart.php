<?php
    // @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/CartModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    $user_id = $_SESSION['user_data']['user_id'];
    $data = updateProductToCard($input['product_id'], $input['product_count']);
    $data['receipt_total'] = getTotalByUserID($user_id);
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);

?>