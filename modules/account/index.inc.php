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
        if ($data['user_allow'] == "ban") {
            require_once("./logout.php");
            header("Refresh:0; url=index.php");
            echo "<script>if(confirm('บัญชีนี้ถูกระงับจากผู้ดูแลระบบ')){window.location.reload()}else{window.location.reload()}</script>";
        }else{
            $_SESSION['user_data'] = $data;
        }
    }

    require_once("view.inc.php");
?>