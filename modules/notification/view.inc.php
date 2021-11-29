<div class="col-md-12 p-5">
    <div>
        <h1>
            การแจ้งเตือน
        </h1>
    </div>
    <div class="col-md-12 row mt-5">
        <div class="card col-md-10">
            <div id="table_name">
                <!-- Table name -->
            </div>

            <?php if ($_GET['noti'] == 'sell') {
                require_once("sell_list.inc.php");
            } else {
                require_once("buy_list.inc.php");
            }
            ?>

        </div>

        <?php if ($_SESSION['user_data']['user_role'] != 'Member') {?>
            <div class="card col-md-2 p-5">
                <h4 style="border-bottom-style: solid;">
                    เลือกรายการ
                </h4>
                <a class="btn btn-warning mt-3" href="?app=notification&noti=buy" id="buy_list">
                    รายการซื้อ
                </a>
                <a class="btn btn-danger mt-2" href="?app=notification&noti=sell" id="sell_list">
                    รายการขาย
                </a>
            </div>
        <?php }?>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">แจ้งเตือน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        คุณแน่ใจหรือไม่ที่จะลบสินค้าชิ้นนี้ออกจากใบเสร็จ กรุณาติดต่อผู้ขายก่อนยกเลิกเพื่อทำการขออการคืนเงิน เพราะทางเว็บไซต์จะไม่รับผิดชอบใดๆทั้งสิ้น
        และคุณจะไม่สามารถกู้ข้อมูลสิ้นค้าชิ้นนี้ได้
        <input type="text" hidden name="btn_cancel_product" id="btn_cancel_product">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">ไม่ดีกว่า</button>
        <button type="button" class="btn btn-danger" onclick="deleteProduct($('#btn_cancel_product').val())">ยกเลิกสินค้า</button>
      </div>
    </div>
  </div>
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', function () {
    //myInput.focus()
    })

    function acceptProduct(id, key, val) {
        // console.log(id);
        // console.log(key);
        // console.log(val);
        fetch("controllers/notificationAccept.php",{
            method: 'post',
            body: JSON.stringify({
                id: id,
                key: key,
                val: val
            })
        })
        .then((res)=> res.json())
        .then((data)=>{
            if (data) {
                window.location.reload()
            }else{
                alert("ขออภัยเกิดข้อผิดพลาดระหว่างทำรายการ")
                window.location.reload()
            }
        })
    }

    function deleteProduct(id) {
        console.log(id);
        fetch("controllers/notificationDelete.php",{
            method: 'post',
            body: JSON.stringify({
                id: id
            })
        })
        .then((res)=> res.json())
        .then((data)=>{
            if (data) {
                window.location.reload()
            }else{
                alert("ขออภัยเกิดข้อผิดพลาดระหว่างทำรายการ")
                window.location.reload()
            }
        })
    }

    function getNotiIcon(){
        let buy = "";
        let sell = "";
        fetch("controllers/getNotificationByRole.php", {
            method: 'post',
            body: JSON.stringify({
                port: 'menu'
            })
        })
        .then((res)=>res.json())
        .then((data)=>{
            // console.log(data);
            try {
                buy = "("+data.buy+")";
                sell = "("+data.sell+")";
                if (data.buy == 0) {
                    buy = ""
                }
                if (data.sell == 0) {
                    sell = ""
                }
                $("#buy_list").html("รายการซื้อ "+buy);
                $("#sell_list").html("รายการขาย "+sell);
            } catch (error) {
                
            }
        })
    }

    getNotiIcon()
</script>