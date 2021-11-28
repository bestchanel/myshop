<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php");

    // $received_data = json_decode(file_get_contents("php://input"));

    function cheatRoleByID($val){
        $user_id = $_SESSION['user_data']['user_id'];
        $role = "";
        switch ($val) {
            case 'a':
                $role = "Admin";
                break;
            case 's':
                $role = "Sellman";
                break;
            case 'm':
                $role = "Member";
                break;
            
            default:
                $role = "Member";
                break;
        }

        $sql = "UPDATE `tbl_users` SET `user_role` = '".$role."' WHERE `tbl_users`.`user_id` = ".$user_id.";";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return "[Cheat Activate] Now your role = ".$role;
    }

    function cheatMoneyByID($val){
        $user_id = $_SESSION['user_data']['user_id'];
        $val = floatval($val);

        $sql = "UPDATE `tbl_users` SET `user_money` = '".$val."' WHERE `tbl_users`.`user_id` = ".$user_id.";";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return "[Cheat Activate] Now your money = ".$val;
    }

    function cheatPictureByID($val){
        $user_id = $_SESSION['user_data']['user_id'];

        $sql = "UPDATE `tbl_users` SET `user_profile` = '".$val."' WHERE `tbl_users`.`user_id` = ".$user_id.";";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return "[Cheat Activate] Now your image url = ".$val;
    }

    function cheatRecordByID($code, $val){
        $user_id = $_SESSION['user_data']['user_id'];
        $sql = "INSERT INTO `tbl_cheat` 
        (`cheat_id`, `user_id`, `cheat_code`, `cheat_val`, `cheat_date`) 
        VALUES 
        (NULL, ".$user_id.", '".$code."', '".$val."', NOW() )";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
    }

?>