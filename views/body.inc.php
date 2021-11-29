<div>
<?php
    require_once("detail/top_menu.inc.php");
?>
</div>
<div class="h-100">
   
                <?php
                    if($_GET['app'] == 'register'){
                        require_once('detail/register.inc.php');
                    }elseif($_GET['app'] == 'login'){
                        require_once('detail/login.inc.php');
                    }else{
                        require_once('home/index.inc.php');
                    }
                ?>
            </div>
        </div>
    </div>
</div>