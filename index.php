<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <?php
  @session_start();
  require_once("models/BaseModel.php");
  require_once("views/header.inc.php");
  ?>
</head>

<body class="<?php if (($_GET['app'] == 'login') || ($_GET['app'] == 'register')) {
                echo "overflow-hidden";
              } ?>">
  <div id="content">
    <?php
    if (isset($_SESSION['user_data']['user_id'])) {
      require_once("modules/index.php");
      echo '<script language=\"JavaScript\" type=\"text/javascript\"> window.location.href = "?app=dashboard";</script>';
    } else {
      require_once("views/body.inc.php");
    }
    ?>
  </div>
  <div id="loadingScreen">
    <?php 
      require_once("views/detail/loadingScreen.php");
    ?>
  </div>
</body>
<footer>
  <?php
  require_once("views/footer.inc.php");
  ?>
</footer>

</html>
<?php
  // while (true) {
    
  // }
?>