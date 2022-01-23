<script>

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}


</script>
<div class="col-md-12">
    <div class="col-md-12 mb-2">
        <img class="w-100" src="./templates/image/new_banner.jpg" alt="" srcset="">
    </div>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light fade-in">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <div class="w-100 text-center border border-dark p-3 rounded bg-dark">
                        <h3 class="d-sm-inline text-light">ตัวเลือก</h3>
                    </div>
                    <ul class="navbar-nav w-100 w-100" style="width: -webkit-fill-available;">
                        
                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_hover btn_filter <?php if($_GET['product_group'] == ""){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product" >
                                ทั้งหมด
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_hover btn_filter <?php if($_GET['product_group'] == 'CPU'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=CPU" >
                                <img src="./templates/download/icon/png/005-cpu.png" alt="" srcset="">
                                CPU
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'MAINBOARD'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=MAINBOARD">
                                <img src="./templates/download/icon/png/004-mainboard.png" alt="" srcset="">
                                Mainboard
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'VGA'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=VGA">
                                <img src="./templates/download/icon/png/006-vga-card.png" alt="" srcset="">
                                VGA
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'RAM'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=RAM">
                                <img src="./templates/download/icon/png/003-ram.png" alt="" srcset="">
                                RAM
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'HDD'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=HDD">
                                <img src="./templates/download/icon/png/007-hdd.png" alt="" srcset="">
                                HDD
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'SSD'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=SSD">
                                <img src="./templates/download/icon/png/002-solid-state-drive.png" alt="" srcset="">
                                SSD
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'POWER_SUPPLY'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=POWER_SUPPLY">
                                <img src="./templates/download/icon/png/008-power-supply.png" alt="" srcset="">
                                Power Supply
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'CASE'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=CASE">
                                <img src="./templates/download/icon/png/010-computer-case-1.png" alt="" srcset="">
                                Case
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'CPU_COOLLER'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=CPU_COOLLER">
                                <img src="./templates/download/icon/png/001-water-cooler.png" alt="" srcset="">
                                CPU Cooler
                            </a>
                        </li>

                        <li class="nav-item btn btn-outline-secondary w-100 btn_hover btn_filter <?php if($_GET['product_group'] == 'MONITOR'){ echo "btn_hl"; } ?>">
                            <a class="nav-link active d-flex gap-3" aria-current="page" href="?app=home_product&product_group=MONITOR">
                                <img src="./templates/download/icon/png/011-monitor.png" alt="" srcset="">
                                Monitor
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- ?app=home_product -->
            </div>
            <div class="col py-3 pb-5 p-3">
                <h1 class="pb-5 mb-5 mt-5" style="border-bottom-style: solid;">
                    รายการสินค้า <?php 
                    echo strtoupper(str_replace("_", " ", $_GET['product_group']))
                    ?> <i class="fas fa-shopping-cart"></i>
                </h1>
                <div class="mb-5">
                    <table class="table table-light table-striped display" id="myTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Type</th>
                                <th>Product Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($data) > 0){?>
                                    <?php for ($i=0; $i < count($data); $i++) { ?>
                                        <tr id="tr_<?php echo $data[$i]['product_id']?>">
                                            <td style="text-align: center; vertical-align: middle; ">
                                                <h3><?php echo ($i+1)?></h3>
                                            </td>
                                            <td class=" text-center">
                                                <img src="<?php echo $data[$i]['product_image']?>" alt="" srcset="" style="width:20vh;">
                                                <?php if($data[$i]['promotion'] == 1) {?>
                                                    <div class="bg-warning rounded">
                                                        <p style="text-align: center;"><i class="far fa-star"></i> Promotion!</p>
                                                    </div>
                                                <?php }?>
                                            </td>
                                            <td style="text-align: left; vertical-align: middle; "><?php echo $data[$i]['product_name']?></td>
                                            <td style="text-align: center; vertical-align: middle; "><?php echo $data[$i]['product_group']?></td>
                                            <td style="text-align: center; vertical-align: middle; "><?php echo number_format($data[$i]['product_price'])."฿"?></td>
                                            <td style="text-align: center; vertical-align: middle; ">
                                                <div class="btn btn-success m-1" onclick="alert('กรุณาเข้าสู่ระบบก่อนจะเพิ่มสินค้าลงรถเข็น')">
                                                    <i class="fas fa-cart-plus"></i>
                                                </div>
                                                <div class="btn btn-primary m-1" onclick="alert('กรุณาเข้าสู่ระบบก่อนเข้าชมสินค้า')">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php  }?>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <img class="w-100" src="./templates/image/ADDRESS.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );


</script>