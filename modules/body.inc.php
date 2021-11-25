<!-- =========================== MDB =========================== -->
<!-- <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script> -->
<!-- ======================== Datatable ======================== -->
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
function addToCart(product_id) {
    fetch('contollers/insertProductToCard.php', {
        method: 'post',
        body: JSON.stringify({
            product_id : product_id
        })
    })
    .then((res)=> res.json())
    .then((data)=>{
        $(".top_menu_cart").html(data+'<i class="fas fa-shopping-cart"></i>');
    })

}

function loadItemToIconCart(){
    fetch('contollers/loadItemToIconCart.php')
    .then((res)=> res.json())
    .then((data)=>{
        $(".top_menu_cart").html(data+'<i class="fas fa-shopping-cart"></i>');
    })
}
</script>

<?php
$app = $_GET['app'];
    require_once("views/detail/top_menu.inc.php");

    if($app == 'dashboard'){
        require_once("dashboard/index.inc.php");
    }

    elseif($app == 'account'){
        require_once("account/index.inc.php");
    }

    elseif($app == 'add_product'){
        require_once("add_product/index.inc.php");
    }

    elseif($app == 'product'){
        require_once("products/index.inc.php");
    }

    elseif($app == 'product_detail'){
        require_once("product_detail/index.inc.php");
    }

    elseif($app == 'update_product'){
        require_once("update_product/index.inc.php");
    }

    elseif($app == 'promotion'){
        require_once("promotion/index.inc.php");
    }

    elseif($app == 'cart'){
        require_once("cart/index.inc.php");
    }

    else{
        require_once("products/index.inc.php");
    
    }

    echo "<script>loadItemToIconCart()</script>";
?>
