<?php
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/DashboardModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    
    $data = getStaticByBrand($input['brand'], $input['filter']);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);

?>