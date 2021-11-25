<?php
require_once("./models/CartModel.php");

$data = getProductFromCart($_SESSION['user_data']['user_id']);
require_once("view.inc.php");
?>