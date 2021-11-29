<?php
    // @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("../models/NotificationModel.php");
    
    $input = json_decode(file_get_contents('php://input'), true);
    $user_id = $_SESSION['user_data']['user_id'];
    $user_role = $input['user_role'];
    $port = $input['port'];

    $data;
    $seller;
    $buyer;
    
    if ($port == 'icon') {
        $data = 0;
        $seller = getProductNotificationBySellerID($user_id);
        for ($i=0; $i < count($seller); $i++) { 
            if ($seller[$i]['noti_seller_accept'] == 0) {
                $data++;
            }
        }
        $buyer = getProductNotificationByBuyerID($user_id);
        for ($i=0; $i < count($buyer); $i++) { 
            if ($buyer[$i]['noti_buyer_accept'] == 0) {
                $data++;
            }
        };
    }elseif($port == 'web') {
        if ($user_role == 'Buyer') {
            $data = getProductNotificationByBuyerID($user_id);
        }else{
            $data = getProductNotificationBySellerID($user_id);
        }
    }elseif($port == 'menu'){
        $data['buy'] = 0;
        $data['sell'] = 0;
        $seller = getProductNotificationBySellerID($user_id);
        for ($i=0; $i < count($seller); $i++) { 
            if ($seller[$i]['noti_seller_accept'] == 0) {
                $data['sell']++;
            }
        }
        $buyer = getProductNotificationByBuyerID($user_id);
        for ($i=0; $i < count($buyer); $i++) { 
            if ($buyer[$i]['noti_buyer_accept'] == 0) {
                $data['buy']++;
            }
        };
    }
    


    // $data = deleteProductByID($input['product_id']);
    // $data = insertProductToCard(34);
    // $data = getStaticByBrand('western', 'product_price');

    echo json_encode($data);
    // echo json_encode($input['data']);
    // echo $input;
    // print_r($input);

?>