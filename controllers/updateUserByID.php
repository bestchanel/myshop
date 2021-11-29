<?php
    // @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/AdminModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    // $user_id = $_SESSION['user_data']['user_id'];
    $user_id = $input['user_id'];
    $key = $input['key'];
    $val = $input['val'];
    $data = updateUserByID($user_id, $key, $val);
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);

?>