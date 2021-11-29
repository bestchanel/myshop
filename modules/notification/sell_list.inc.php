<div>
    <table class="table table-light display" id="myTable">
        <thead>
            <tr>
                <th>
                    ลำดับ
                </th>
                <th>
                    รูปภาพสินค้า
                </th>
                <th>
                    ชื่อสินค้า
                </th>
                <th>
                    จำนวน
                </th>
                <th>
                    ราคา
                </th>
                <th>
                    ซื้อโดย
                </th>
                <th>
                    ที่อยู่ของผู้ซื้อ
                </th>
                <th>
                    หมายเลขใบเสร็จ
                </th>
                <th>
                    หมายเหตุ
                </th>
                <th>
                    สถาณะ
                </th>
                <th>
                    ตัวเลือก
                </th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($sell); $i++) { ?>
                <?php
                    if ($sell[$i]['bill_code'] != $sell[($i-1)]['bill_code']) {
                        $color = rand_color($color);
                    }

                ?>
                <tr
                    class="<?php echo $color?>"
                >
                    <td>
                        <?php echo $i+1?>
                    </td>
                    <td>
                        <img src="<?php echo $sell[$i]['product_image']?>" alt="" srcset="" style="width: 10vh;">
                    </td>
                    <td>
                        <?php echo $sell[$i]['product_name']?>
                    </td>
                    <td>
                        <?php echo $sell[$i]['product_count']?>
                    </td>
                    <td>
                        <?php echo $sell[$i]['product_price_total']?>
                    </td>
                    <td>
                        <?php echo $sell[$i]['user_name']?>
                    </td>
                    <td>
                        <?php echo $sell[$i]['user_address']?>
                    </td>
                    <td>
                        <?php echo $sell[$i]['bill_code']?>
                    </td>
                    <td>
                        <?php echo $sell[$i]['dis_code']?>
                        <?php echo $sell[$i]['dis_detail']?>
                    </td>
                    <td>
                        <?php  if($sell[$i]['noti_buyer_accept']){
                            echo '<div class="btn btn-success" disabled data-bs-toggle="tooltip" data-bs-placement="bottom" title="ผู้ซื้อได้ทำการยืนยันแล้ว">Accepted</div>';
                        }else {
                            echo '<div class="btn btn-warning" disabled data-bs-toggle="tooltip" data-bs-placement="bottom" title="กำลังรอการยืนยันจากผู้ซื้อ">Waiting</div>';
                        }?>
                    </td>
                    <td>
                        <?php if ($buy[$i]['noti_seller_accept']) {?>

                        <button class="btn btn-danger" onclick="acceptProduct(<?php echo $buy[$i]['not_id']?>, 'noti_seller_accept', 0)" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Accepted" >
                            Cancel
                        </button>

                        <?php }else{?>

                        <button class="btn btn-primary" onclick="acceptProduct(<?php echo $buy[$i]['not_id']?>, 'noti_seller_accept', 1)">
                            Accept
                        </button>

                        <?php }?>

                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<script>
    $('#table_name').html("รายการขาย")

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>