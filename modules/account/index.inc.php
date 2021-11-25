<?php
    @session_start();
    require_once("./models/BaseModel.php");

    $username = $_SESSION['user_data']['username'];
    $password = $_SESSION['user_data']['password'];
    $query = 'SELECT * FROM `tbl_users` WHERE username = "'.$username.'" AND password = "'.$password.'"';

    $statement = $connect->prepare($query);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data = $row;
    }

    if($data > 0){
        $_SESSION['user_data'] = $data;
    }

    require_once("view.inc.php");
?>