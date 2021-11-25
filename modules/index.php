<?php
@session_start();
$user = "";
if (isset($_SESSION['user_data']['user_id'])) {
    $user = $_SESSION['user_data'];
    // echo '<script>window.location = "./dashboard";</script>';
} else {

    header('Location: ../logout.php');
}
?>

<body>
  <?php
      require_once("body.inc.php");
  ?>
</body>
<footer>
    <?php
      require_once("modules/views/footer.inc.php");
    ?>
</footer>
