<?php

    $GLOBALS['URL'] = new PDO("mysql:host=localhost;dbname=myshop", "root", "root123456");
    
    $connect = $GLOBALS['URL'];
    $input = json_decode(file_get_contents('php://input'), true);
    // $received_data = json_decode(file_get_contents("php://input"));


?>