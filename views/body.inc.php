<div>
<?php
    require_once("detail/top_menu.inc.php");
?>
</div>
<div class="h-100">
    <div class="col-md-12">
        <div class="card col-md-4 m-auto border border-secondary">
            <div class="card-body m-auto">
                <?php
                    if($_GET['app'] == 'register'){
                        require_once('detail/register.inc.php');
                    }else{
                        require_once('detail/login.inc.php');
                    }
                ?>
            </div>
        </div>
    </div>
</div>