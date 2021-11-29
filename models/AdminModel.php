<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php"); 

    function getAllUser(){
        $sql = "SELECT * FROM tbl_users";

        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        $data = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    function updateUserByID($user_id, $key, $val){
        $sql = "UPDATE `tbl_users` SET `".$key."` = '".$val."' WHERE `tbl_users`.`user_id` = ".$user_id.";";
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();

        return true;
    }


?>