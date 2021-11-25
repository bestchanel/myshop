<?php
    require_once("./models/BaseModel.php");

    $product_group = $_GET['product_group'];
    if ($product_group) {
        $query = 'SELECT * FROM `tbl_product` 
        WHERE 
        promotion = 1 AND
        product_group LIKE "'.$product_group.'"
        ORDER BY product_group ASC
        ';
    }else{
        $query = 'SELECT * FROM `tbl_product` 
        WHERE
        promotion = 1
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