<?php
    // @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/NotificationModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);

    $data = notificationAccept($input['id'], $input['key'], $input['val']);


    // $data = deleteProductByID($input['product_id']);
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);
    // echo json_encode($input['data']);
    // echo $input;
    // print_r($input);

?>