<?php
  @session_start()

?>
<nav class="navbar navbar-expand-lg navbar-success bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="?">
        <img src="templates/image/ICON.png" alt="" class="icon" srcset=""/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(isset($_SESSION['user_data']['user_id'])){?>
          <li class="nav-item">
              <a href="?app=product">
                  <input class="active btn" type="button" aria-current="page" value="หน้าแรก">
              </a>
          </li>
          <li class="nav-item">
              <a href="?app=promotion">
                  <input class="active btn" type="button" aria-current="page" value="โปรโมชั่น">
              </a>
          </li>
          <li class="nav-item">
              <a href="?app=contract">
                  <input class="active btn" type="button" aria-current="page" value="ติดต่อเรา">
              </a>
          </li>
          <li class="nav-item">
              <a href="?app=help">
                  <input class="active btn" type="button" aria-current="page" value="ช่วยเหลือ">
              </a>
          </li>
          <li class="nav-item">
              <a href="?app=about">
                  <input class="active btn" type="button" aria-current="page" value="เว็บไซต์ที่เกี่ยวข้อง">
              </a>
          </li>
        <?php }else{?>
          <li class="nav-item">
              <a href="?">
                  <input class="active btn" type="button" aria-current="page" value="หน้าแรก">
              </a>
          </li>
          <li class="nav-item">
              <a href="?app=login">
                  <input class="active btn" type="button" aria-current="page" value="เข้าสู่ระบบ">
              </a>
          </li>
          <li class="nav-item">
              <a href="?app=register">
                  <input class="active btn" type="button" aria-current="page" value="สมัครสมาชิก">
              </a>
          </li>
        <?php }?>
      </ul>
      <form class="d-flex">

        <!-- =================================== A only =================================== -->

        <?php if ($_SESSION['user_data']['user_role'] == 'Admin') { ?>
          <a class="btn btn-primary m-1 align-self-center" href="?app=user_management" data-bs-toggle="tooltip" data-bs-placement="bottom" title="User Management">
            <i class="fas fa-user-cog"></i>
          </a>
        <?php }?>

        <!-- =================================== A & S =================================== -->
          <?php if ($_SESSION['user_data']['user_role'] == 'Admin' || $_SESSION['user_data']['user_role'] == 'Sellman') { ?>
            <a class="btn btn-danger m-1 align-self-center" href="?app=add_product" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add product">
                <i class="fas fa-folder-plus"></i>
            </a>
            <a class="btn btn-danger m-1 align-self-center" href="?app=dashboard" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard">
              <i class="fas fa-chart-pie"></i>
            </a>
          <?php }?>

          <!-- =================================== All =================================== -->
          <?php if (isset($_SESSION['user_data']['user_id'])) { ?>
            <a class="btn btn-warning m-1 align-self-center" id="ico_notification" href="?app=notification" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification">
              <i class="fas fa-bell"></i>
            </a>
            <a class="btn btn-warning m-1 align-self-center top_menu_cart" href="?app=cart" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Your cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <a class="btn btn-warning m-1 align-self-center" href="?app=account" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Your account">
                <i class="far fa-user"></i>
            </a>
            <?php }?>

        </form>
    </div>
  </div>
</nav>