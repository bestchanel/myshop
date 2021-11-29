<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php");

    $connect = $GLOBALS['URL'];
    $input = json_decode(file_get_contents('php://input'), true);
    // $received_data = json_decode(file_get_contents("php://input"));

    if($input['action'] == 'login'){
        $username = $input['username'];
        $password = $input['password'];
        $query = 'SELECT * FROM `tbl_users` WHERE username = "'.$username.'" AND password = "'.$password.'"';

        $statement = $connect->prepare($query);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data = $row;
        }

        if($data > 0){
            if ($data['user_allow'] == "ban") {
                echo json_encode($data);
            }else{
                $_SESSION['user_data'] = $data;
                echo json_encode($data);
            }
        }else{
            echo json_encode(false);
        }
        
        
    }

    if($input['action'] == 'register'){
        $username = $input['username'];
        $password = $input['password'];
        $user_name = $input['user_name'];
        $user_phone = $input['user_phone'];
        $user_mail = $input['user_mail'];
        $user_address = $input['user_address'];

        $query = "INSERT INTO `tbl_users` (
            `user_id`, 
            `username`, 
            `password`, 
            `user_name`, 
            `user_phone`, 
            `user_money`, 
            `user_mail`, 
            `user_address`, 
            `user_profile`, 
            `user_insert`, 
            `user_update`, 
            `user_role`,
            `user_status`
            ) VALUES (
                NULL, 
                '".$username."', 
                '".$password."', 
                '".$user_name."', 
                '".$user_phone."', 
                '0', 
                '".$user_mail."', 
                '".$user_address."', 
                'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', 
                NOW(), 
                NOW(), 
                'member',
                'สมาชิกทั่วไป'
                )";

        $statement = $connect->prepare($query);
        $statement->execute();

        echo json_encode(true);
        
    }

    if($input['action'] == 'update'){

        $password = $input['password'];
        $user_name = $input['user_name'];
        $user_phone = $input['user_phone'];
        $user_mail = $input['user_mail'];
        $user_address = $input['user_address'];

        $query = "UPDATE `tbl_users` SET 
        `password` = '".$password."', 
        `user_name` = '".$user_name."', 
        `user_phone` = '".$user_phone."', 
        `user_mail` = '".$user_mail."', 
        `user_address` = '".$user_address."', 
        `user_update` = NOW() 
        WHERE 
        `tbl_users`.`user_id` = ".$_SESSION['user_data']['user_id']."";

        $statement = $connect->prepare($query);
        $statement->execute();

        echo json_encode($query);
        
    }

?>