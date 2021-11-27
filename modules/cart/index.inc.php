<?php
require_once("./models/CartModel.php");
$user_id = $_SESSION['user_data']['user_id'];
$data = getProductFromCart($user_id);
$arr_duplicate = [];
for ($i=0; $i < count($data); $i++) { 
    if($data[$i]['product_id'] != $data[($i-1)]['product_id']){
        $arr_duplicate[] = $data[$i]['product_id'];
        echo "<script>console.log(".json_encode($data[$i]['product_id']).")</script>";
    }
}
$arr_duplicate = array_unique($arr_duplicate);

$data_receipt = [];
for ($i=0; $i < count($arr_duplicate); $i++) { 
    $data_receipt[] = getProductToReceipt($arr_duplicate[$i], $user_id);
}

$data = $data_receipt;


$receipt_detail = getTotalByUserID($user_id);
// $data = getProductToCart(10,$_SESSION['user_data']['user_id']);
require_once("view.inc.php");

echo "<script>console.log(".json_encode($data_receipt).")</script>";
?>