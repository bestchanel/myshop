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
                    ขายโดย
                </th>
                <th>
                    เบอร์โทรติดต่อผู้ขาย
                </th>
                <th>
                    หมายเลขใบเสร็จ
                </th>
                <th>
                    หมายเหตุ
                </th>
                <th>
                    สถานะ
                </th>
                <th>
                    ตัวเลือก
                </th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($buy); $i++) { ?>
                <?php
                    if ($buy[$i]['bill_code'] != $buy[($i-1)]['bill_code']) {
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
                        <img src="<?php echo $buy[$i]['product_image']?>" alt="" srcset="" style="width: 10vh;">
                    </td>
                    <td>
                        <?php echo $buy[$i]['product_name']?>
                    </td>
                    <td>
                        <?php echo $buy[$i]['product_count']?>
                    </td>
                    <td>
                        <?php echo $buy[$i]['product_price_total']?>
                    </td>
                    <td>
                        <?php echo $buy[$i]['user_name']?>
                    </td>
                    <td>
                        <?php echo $buy[$i]['user_phone']?>
                    </td>
                    <td>
                        <?php echo $buy[$i]['bill_code']?>
                    </td>
                    <td>
                        <?php echo $buy[$i]['dis_code']?>
                        <?php echo $buy[$i]['dis_detail']?>
                    </td>
                    <td>
                        <?php  if($buy[$i]['noti_seller_accept']){
                            echo '<div class="btn btn-success" disabled data-bs-toggle="tooltip" data-bs-placement="bottom" title="ผู้ขายได้ทำการยืนยันแล้ว">Accepted</div>';
                        }else {
                            echo '<div class="btn btn-warning" disabled data-bs-toggle="tooltip" data-bs-placement="bottom" title="กำลังรอการยืนยันจากผู้ขาย">Waiting</div>';
                        }?>
                    </td>
                    <td>
                        <div class="text-center">

                            <?php if ($buy[$i]['noti_buyer_accept']) {?>
                                
                            <button class="btn btn-danger m-1" onclick="acceptProduct(<?php echo $buy[$i]['not_id']?>, 'noti_buyer_accept', 0)" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Accepted" >
                                <i class="far fa-window-close"></i>
                            </button>
                            
                            <?php }else{?>

                            <button class="btn btn-primary m-1" onclick="acceptProduct(<?php echo $buy[$i]['not_id']?>, 'noti_buyer_accept', 1)">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="btn btn-danger m-1" onclick="$('#btn_cancel_product').val('<?php echo $buy[$i]['not_id']?>')" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            
                            <?php }?>
                            
                        </div>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<script>
    $('#table_name').html("รายการซื้อ")

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>