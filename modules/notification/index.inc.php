<?php
require_once("./models/NotificationModel.php");

$sell = getProductNotificationBySellerID($_SESSION['user_data']['user_id']);
$buy = getProductNotificationByBuyerID($_SESSION['user_data']['user_id']);
$color = "";
require_once("view.inc.php");

function rand_color($color = "") {
    $arr_ = [
        "table-danger",
        "table-success",
        "table-primary",
        "table-warning",
        "table-secondary",
    ];
    $result = $arr_[array_rand($arr_)];

    while ($color == $result) {
        $result = $arr_[array_rand($arr_)];
    }

    return $result;
}

?>