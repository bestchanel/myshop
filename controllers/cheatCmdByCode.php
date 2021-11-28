<?php
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/CheatModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    $data;


    switch ($input['code']) {
        case 'm':
            $data = cheatMoneyByID($input['val']);
            cheatRecordByID($input['code'], $input['val']);
            break;
            
        case 'r':
            $data = cheatRoleByID($input['val']);
            cheatRecordByID($input['code'], $input['val']);
            break;
            
        case 'p':
            $data = cheatPictureByID($input['val']);
            cheatRecordByID($input['code'], $input['val']);
            break;
        
        default:
            $data = false;
            cheatRecordByID($input['code']."(fail)", $input['val']."(error)");
            break;
    }
    // $data = insertProductToCard($input['product_id']);
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);

?>