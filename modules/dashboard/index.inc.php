<?php
@session_start();


require_once("./models/DashboardModel.php");

$product_group_list = getDashboard($_GET['product_group']);

// print_r($product_group_list);
// echo count($product_group_list)
require_once("view.inc.php");

?>

<?php if($_SESSION['user_data']['user_role'] == 'Member'){?>
<script>
    window.location.href = "?app=product"
</script>
<?php }?>