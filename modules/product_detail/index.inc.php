<?php
    require_once("./models/BaseModel.php");

    $product_code = $_GET['product_id'];

    $query = 'SELECT a.*,
    b.user_name AS "updateby_name",
    b.user_role AS "updateby_role",
    b.user_profile AS "updateby_profile",
    c.user_name AS "addby_name" ,
    c.user_role AS "addby_role" ,
    c.user_profile AS "addby_profile" 
    FROM tbl_product a 
    JOIN tbl_users b ON a.product_updateby = b.user_id
    JOIN tbl_users c ON a.product_addby = c.user_id
    WHERE a.product_id = '.$product_code.'';

    $statement = $connect->prepare($query);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data = $row;
    }
     require_once("view.inc.php");
?>
