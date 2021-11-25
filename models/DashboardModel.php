<?php
    @session_start();
    header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once("BaseModel.php");
    
    // $received_data = json_decode(file_get_contents("php://input"));

    if($input['action'] == 'get_dashboard'){
        $product_group = $input['product_group'];
        
        // $sql = "SELECT product_brand, product_rate, product_group 
        // FROM `tbl_product` 
        // WHERE product_group = 'CPU'
        // GROUP BY product_brand";

        $sql = "SELECT product_brand, product_group , SUM(product_rate) AS product_rate 
        FROM `tbl_product` 
        WHERE product_group LIKE '%".$product_group."'
        GROUP BY product_brand";

        $data = [];
        $statement = $connect->prepare($sql);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        $result = [];

        $result[0][] = 'product_brand';
        $result[0][] = 'product_rate';
        
        for ($i=0; $i < count($data); $i++) { 
            $result[($i+1)][] = strtoupper($data[$i]['product_brand']);
            $result[($i+1)][] = intval($data[$i]['product_rate']);
        }

        echo json_encode($result);

    }

    function getDashboard($param){
        $product_group = $param;
        
        // $sql = "SELECT product_brand, product_rate, product_group 
        // FROM `tbl_product` 
        // WHERE product_group = 'CPU'
        // GROUP BY product_brand";

        $sql = "SELECT product_brand, product_group , SUM(product_rate) AS product_rate 
        FROM `tbl_product` 
        WHERE product_group LIKE '%".$product_group."' AND
        product_rate NOT LIKE 0
        GROUP BY product_brand";

        $data = [];
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        // $result = [];

        // $result[0][] = 'product_brand';
        // $result[0][] = 'product_rate';
        
        // for ($i=0; $i < count($data); $i++) { 
        //     $result[($i+1)][] = strtoupper($data[$i]['product_brand']);
        //     $result[($i+1)][] = intval($data[$i]['product_rate']);
        // }

        return $data;
    }

    function getStaticByBrand($brand, $filter){

        
        // $sql = "SELECT product_group, SUM(product_rate) AS product_rate FROM `tbl_product`  
        // WHERE product_brand = 'western'
        // GROUP BY `tbl_product`.`product_group`";

        $sql = "SELECT product_group, SUM(".$filter.") AS ".$filter." FROM `tbl_product`  
        WHERE product_brand = '".$brand."'
        GROUP BY `tbl_product`.`product_group`";

        $data = [];
        $statement = $GLOBALS['URL']->prepare($sql);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        $result = [];

        $result[0][] = 'Type';
        $result[0][] = strtoupper(str_replace("_", " ", $filter));
        
        for ($i=0; $i < count($data); $i++) { 
            $result[($i+1)][] = strtoupper($data[$i]['product_group']);
            $result[($i+1)][] = intval($data[$i][$filter]);
        }

        return $result;
    }

?>