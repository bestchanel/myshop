<?php
@session_start();
    require_once("./models/BaseModel.php");

    $product_group = $_GET['product_group'];
    if ($product_group) {
        $query = 'SELECT * FROM `tbl_product` WHERE 
        product_group LIKE "'.$product_group.'"
        ORDER BY product_group ASC
        ';
    }else{
        $query = 'SELECT * FROM `tbl_product` 
        ORDER BY product_group ASC
        ';
    }

    
    $data = [];
    $statement = $connect->prepare($query);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }


    require_once("view.inc.php");
?>