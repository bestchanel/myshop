<div class="col-md-12 bg-light p-5 row">
    <div class="col-md-8 card p-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div>
            <h3>CART <i class="fas fa-shopping-cart"></i></h3>
        </div>
        <div>
            <table class="table table-light table-striped display" id="myTable" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: -webkit-center;">
                            Select
                            <input type="checkbox" name="global_check" id="global_check" class="form-check-input" onclick="productCheck(this, 'global')">
                        </th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="ListItemInCart">
                    <?php for ($i=0; $i < count($data); $i++) { ?>
                        <tr id="tr_<?php echo $data[$i]['product_id']?>">
                            <td style="text-align: -webkit-center;">
                                <input type="checkbox" name="product_check" class="form-check-input" onclick="productCheck(this, 'only')">
                                <input type="text" hidden value="<?php echo $data[$i]['product_id']?>" id="product_id">
                            </td>
                            <td>
                                <img src="<?php echo $data[$i]['product_image']?>" class="w-25" alt="" srcset="">
                            </td>
                            <td>
                                <p>
                                    <?php echo $data[$i]['product_name']?>
                                    <input type="text" hidden value="<?php echo $data[$i]['product_name']?>" id="product_list_name_<?php echo $data[$i]['product_id']?>">
                                </p>
                            </td>
                            <td>
                                <p>
                                    <?php echo number_format($data[$i]['product_price'])?>฿
                                    <input type="text" hidden value="<?php echo $data[$i]['product_price']?>" id="product_list_price_<?php echo $data[$i]['product_id']?>">
                                </p>
                            </td>
                            <td>
                                <p id="product_total_<?php echo $data[$i]['product_id']?>">
                                    <?php echo number_format($data[$i]['product_price_total'])?>฿
                                    <input type="text" hidden value="<?php echo $data[$i]['product_price_total']?>" id="product_list_total_<?php echo $data[$i]['product_id']?>">
                                </p>
                            </td>
                            <td>
                                <div class="row col-12">
                                    <div class="col-8">
                                        <input type="number" name="product_count" min="1" id="product_count_<?php echo $data[$i]['product_id']?>" value="<?php echo $data[$i]['product_count']?>" class="form-control" oninput="updateItemInCart(<?php echo $data[$i]['product_id']?>, this.value, 'update')">
                                    </div>
                                    <div class="btn btn-danger col-4" title="remove" onclick="updateItemInCart(<?php echo $data[$i]['product_id']?>, 1,'remove')">
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-primary mt-2 w-100" href="?app=product_detail&product_id=<?php echo $data[$i]['product_id']?>">
                                        รายละเอียดสินค้า
                                    </a>
                                    <a class="btn btn-success mt-2 w-100" id="buy_product_<?php echo $data[$i]['product_id']?>" href="#" onclick="openBill(this)"  data-bs-toggle="modal" data-bs-target="#myModal">
                                        สั่งซื้อ
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4 card p-5 shadow-lg p-3 mb-5 bg-body rounded" style="height: fit-content;">
        <div>
            <h3>สรุปการสั่งซื้อ <i class="fas fa-cash-register"></i></h3>
            <br>
            <p id="total">ราคา : 0฿</p>
            <p class="w-100">
                <div class="col-12 row d-flex align-items-center">
                    <div class="col-3">
                        โค้ดส่วนลด 
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" id="DisCode">
                    </div>
                    <div class="btn btn-secondary col-2" onclick="discountCode()">
                        ยืนยัน
                    </div>
                </div>
            </p>
            <p id="alertDisCode"></p>
            <p id="total_end">ยอดรวม : 0฿</p>
            <input id="total_end_h" type="text" hidden value="0" >
            <div class="btn btn-outline-primary w-100" onclick="window.location.href = '?app=product';">
                เลือกสินค้าต่อ
            </div>
            <div class="btn btn-outline-success w-100 mt-2" onclick="openBills()" data-bs-toggle="modal" data-bs-target="#myModal">
                สั่งซื้อทันที
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ยืนยันคำสั่งซื้อ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <p>หมายเลขใบเสร็จ <samp id="PO_code"></samp></p>
        <input type="text" hidden value="" id="new_po_code">
            <div style="border-bottom-style:solid;">
                <h3>รายการสินค้า</h3>
                <table class="table table-light table-bordered text-center">
                    <thead>
                        <tr>
                            <th>
                                ลำดับ
                            </th>
                            <th>
                                ภาพสินค้า
                            </th>
                            <th>
                                ชื่อสินค้า
                            </th>
                            <th>
                                ราคาต่อชิ้น
                            </th>
                            <th>
                                รวม
                            </th>
                        </tr>
                    </thead>
                    <tbody id="bill_receipt"></tbody>
                </table>
            </div>
            <div class="m-5">
                <h3>รายละเอียดผู้รับ</h3>
            </div>
            <div class="ms-5 me-5">
                <p>เงินในบัญชี : <?php echo number_format(floatval($_SESSION['user_data']['user_money']),2)."฿"?></p>
            </div>
            <div class="ms-5 me-5 border border-dark p-5">
                <input type="text" name="user_money" value="<?php echo $_SESSION['user_data']['user_money']?>" id="user_money" hidden>
                <p>ชื่อ : <?php echo $_SESSION['user_data']['user_name']?></p>
                <p>เบอร์โทรติดต่อ : <?php echo $_SESSION['user_data']['user_phone']?></p>
                <p>อีเมล : <?php echo $_SESSION['user_data']['user_mail']?></p>
                <p>ที่อยู่ของคุณ : <?php echo $_SESSION['user_data']['user_address']?></p>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" disabled onclick="console.log('Buy!!')" id="btn_buy">สั่งซื้อ</button>
      </div>
    </div>
  </div>
</div>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
var promo_code = "";
var dis_data;
let total_receipt = <?php echo $receipt_detail['product_price']?>

$(document).ready( function () {
    $('#myTable').DataTable();
} );

myModal.addEventListener('shown.bs.modal', function () {
  //myInput.focus()
})

poCodeGenerator();

function updateItemInCart(product_id, product_count, action) {
    let code = $("#DisCode").val();
    // console.log('product_id ='+product_id);
    // console.log('product_count ='+product_count);
    // console.log('action ='+action);
    if (product_count > 0) {
        if (action == 'update') {
            fetch("controllers/updateItemInCart.php", {
                method : 'post',
                body: JSON.stringify({
                    product_id: product_id,
                    product_count: product_count
                })
            })
            .then((res) => res.json())
            .then((data) =>{
                $("#product_total_"+data.product_id).html(numberWithCommas(data.product_price_total)+"฿"+'<input type="text" hidden value="'+data.product_price_total+'" id="product_list_total_'+data.product_id+'">');
                $("#total").html("ราคา : "+numberWithCommas(updateTotal())+"฿");
                // // // console.log(data);
                total_receipt = updateTotal();
                loadItemToIconCart();
                if (code) {
                        discountCode()
                }else{
                    $("#alertDisCode").html("");
                    $("#alertDisCode").removeClass("text-danger");
                    $("#alertDisCode").removeClass("text-success");
                    $("#total_end").html("ราคา : "+numberWithCommas(total_receipt)+"฿");
                    $("#total_end_h").val(total_receipt);
                }
            })
            
        }else if(action == 'remove'){
            if (confirm("คุณแน่ใจหรือไม่ที่จะลบสินค้าชิ้นนี้ออกจากตะกร้า")) {
                fetch("controllers/deleteItemInCart.php", {
                    method : 'post',
                    body: JSON.stringify({
                        product_id: product_id
                    })
                })
                .then((res) => res.json())
                .then((data) =>{
                    $("#total").html("ราคา : "+numberWithCommas(updateTotal())+"฿");
                    $("#tr_"+product_id).remove();
                    total_receipt = updateTotal();
                    // console.log(data);
                })
                .then(()=>{
                    loadItemToIconCart();
                    if (code) {
                        discountCode()
                    }else{
                        $("#alertDisCode").html("");
                        $("#alertDisCode").removeClass("text-danger");
                        $("#alertDisCode").removeClass("text-success");
                        $("#total_end").html("ราคา : "+numberWithCommas(total_receipt)+"฿");
                        $("#total_end_h").val(total_receipt);
                    }
                })
            }else{
                console.log("cancel");
            }
        }
    }else{
        if(confirm("คุณต้องการจะลบสินค้าหรือไม่?")){
            updateItemInCart(product_id, 1, 'remove')
        }else{
            $("#product_count_"+product_id).val(1)
        }
    }
}

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}

function discountCode() {
    let code = $("#DisCode").val();
    let show_promo = 0;
    if (code) {
        fetch("controllers/getDiscountCode.php", {
            method: 'post',
            body: JSON.stringify({
                code: code
            })
        })
        .then((res)=>res.json())
        .then((data)=>{
            if(data){
                $("#alertDisCode").html("("+data.dis_detail+")");
                $("#alertDisCode").addClass("text-success");
                $("#alertDisCode").removeClass("text-danger");
                if (data.dis_method == "+") {
                    show_promo = total_receipt + parseFloat(data.dis_value);
                }
                if (data.dis_method == "-") {
                    show_promo = total_receipt - parseFloat(data.dis_value);
                }
                if (data.dis_method == "*") {
                    show_promo = total_receipt * parseFloat(data.dis_value);
                }
                if (data.dis_method == "/") {
                    show_promo = total_receipt / parseFloat(data.dis_value);
                }
                $("#total_end").html("ราคา : "+numberWithCommas(show_promo)+"฿");
                $("#total_end_h").val(show_promo);
                
                dis_data = data;
                promo_code = data.dis_code
            }else{
                $("#alertDisCode").html("โค้ดไม่ถูกต้อง");
                $("#alertDisCode").addClass("text-danger");
                $("#alertDisCode").removeClass("text-success");
                $("#total_end").html("ราคา : "+numberWithCommas(total_receipt)+"฿");
                $("#total_end_h").val(total_receipt);
                promo_code = false;
                dis_data = false;
            }
            
        })
    }else{
        $("#alertDisCode").html("");
        $("#alertDisCode").removeClass("text-danger");
        $("#alertDisCode").removeClass("text-success");
        $("#total_end").html("ราคา : "+numberWithCommas(total_receipt)+"฿");
        $("#total_end_h").val(total_receipt);
    }
}

function productCheck(input, type) {
    let global_check = document.getElementById("global_check");
    let product_lists_arr = $('[name=product_check]');

    if (type == "global") {
        for (let i = 0; i < product_lists_arr.length; i++) {
            product_lists_arr[i].checked = input.checked;
        }
    } else {
        global_check.checked = false;
    }

    $("#total").html("ราคา : "+numberWithCommas(updateTotal())+"฿");
    $("#total_end").html("ราคา : "+numberWithCommas(updateTotal())+"฿");
    $("#total_end_h").val(updateTotal());
}

function openBill(ele) {

    let show_promo = 0;
    let table_str = "";
    let table = $("#bill_receipt");
    let tick = 0;
    let promo_alert = ""
    let price_total = document.getElementById("total_end_h")
    let user_money = document.getElementById("user_money")
    let jq_check_box = $(ele).closest("tr").children("td").children("[name=product_check]");
    let product_id = $(ele).closest("tr").children("td").children("#product_id")[0];
    let product_img = $(ele).closest("tr").children("td").children("img")[0];
    let product_name = $(ele).closest("tr").children("td").children("p").children("#product_list_name_"+product_id.value)[0];
    let product_price = $(ele).closest("tr").children("td").children("p").children("#product_list_price_"+product_id.value)[0];
    let product_total = $(ele).closest("tr").children("td").children("p").children("#product_list_total_"+product_id.value)[0];
    
    console.log($(ele).closest("tr").children("td").children("#product_list_name_"+product_id.value));

    if(dis_data){
        if (dis_data.dis_method == "+") {
            show_promo = parseFloat(product_total.value) + parseFloat(dis_data.dis_value);
        }
        if (dis_data.dis_method == "-") {
            show_promo = parseFloat(product_total.value) - parseFloat(dis_data.dis_value);
        }
        if (dis_data.dis_method == "*") {
            show_promo = parseFloat(product_total.value) * parseFloat(dis_data.dis_value);
        }
        if (dis_data.dis_method == "/") {
            show_promo = parseFloat(product_total.value) / parseFloat(dis_data.dis_value);
        }
    }else{
        show_promo = product_total.value
    }
    // jq_check_box[0].checked = true;

    // productCheck(jq_check_box, 'only')
    // openBills()

    if (promo_code) {
        promo_alert = $("#alertDisCode").html();
    }else{
        promo_alert = "";
    }

    table_str += '<tr id="'+product_id.value+'" class="bill_row">'+
        '<td class="p-5">'+
            '<h3>'+1+'</h3>'+
            '<input type="text" id="product_id" hidden value="'+product_id.value+'" />'+
        '</td>'+
        '<td>'+
            '<img style="width:15vh;" src="'+product_img.getAttribute("src")+'">'+
            '<input type="text" id="product_image" hidden value="'+product_img.getAttribute("src")+'" />'+
        '</td>'+
        '<td class="p-5">'+
            product_name.value+
            '<input type="text" id="product_name" hidden value="'+product_name.value+'" />'+
        '</td>'+
        '<td class="p-5">'+
            numberWithCommas(product_price.value)+
            '<input type="text" id="product_price" hidden value="'+product_price.value+'" />'+
        '</td>'+
        '<td class="p-5">'+
            numberWithCommas(product_total.value)+
            '<input type="text" id="product_total" hidden value="'+product_total.value+'" />'+
        '</td>'+
    '</tr>';

    tick++;

    table_str += '<tr>'+
        '<td class="p-5" style="text-align: -webkit-auto;" colspan="4">'+
            '<h4>รวมทั้งสิ้น</h4>'+
        '</td>'+
        '<td class="p-5">'+
            '<p class="text-success">'+
                promo_alert+
            '</p>'+
            '<h4>'+numberWithCommas(show_promo)+'฿</h4>'+
            '<input type="text" id="all_product_total" hidden value="'+show_promo+'" />'+
            '<input type="text" id="promo_code" hidden value="'+promo_code.value+'" />'+
        '</td>'+
    '</tr>';

    table.html(table_str);
    
    // console.log(table_str);
    // console.log(price_total.value);
    // console.log(user_money.value);

    if((price_total.value <= user_money.value) && (tick > 0)){
        $("#btn_buy").removeAttr("disabled");
    }else{
        $("#btn_buy").attr('disabled', true);
    }

}

function openBills() {
    let product_lists_arr = $('[name=product_check]');
    let price_total = document.getElementById("total_end_h")
    let user_money = document.getElementById("user_money")
    let tick = 0;
    let promo_alert = ""
    let table_str = "";
    let table = $("#bill_receipt");
    let product_ele;
    let product_id;
    let product_img;
    let product_name;
    let product_price;
    let product_total;

    if (promo_code) {
        promo_alert = $("#alertDisCode").html();
    }else{
        promo_alert = "";
    }

    for (let i = 0; i < product_lists_arr.length; i++) {
        if (product_lists_arr[i].checked) {
            product_ele = $(product_lists_arr[i]).closest("tr").children("td")
            product_img = product_ele.children("img")[0]
            product_id = product_ele.children("#product_id")[0]
            product_name = $("#product_list_name_"+product_id.value)
            product_price = $("#product_list_price_"+product_id.value)
            product_total = $("#product_list_total_"+product_id.value)

            table_str += '<tr id="'+product_id.value+'" class="bill_row">'+
                '<td class="p-5">'+
                    '<h3>'+(i+1)+'</h3>'+
                    '<input type="text" id="product_id" hidden value="'+product_id.value+'" />'+
                '</td>'+
                '<td>'+
                    '<img style="width:15vh;" src="'+product_img.getAttribute("src")+'">'+
                    '<input type="text" id="product_image" hidden value="'+product_img.getAttribute("src")+'" />'+
                '</td>'+
                '<td class="p-5">'+
                    product_name.val()+
                    '<input type="text" id="product_name" hidden value="'+product_name.val()+'" />'+
                '</td>'+
                '<td class="p-5">'+
                    numberWithCommas(product_price.val())+
                    '<input type="text" id="product_price" hidden value="'+product_price.val()+'" />'+
                '</td>'+
                '<td class="p-5">'+
                    numberWithCommas(product_total.val())+
                    '<input type="text" id="product_total" hidden value="'+product_total.val()+'" />'+
                '</td>'+
            '</tr>';
            tick++;
            // console.log(table_str);
        }
    }
    table_str += '<tr>'+
            '<td class="p-5" style="text-align: -webkit-auto;" colspan="4">'+
                '<h4>รวมทั้งสิ้น</h4>'+
            '</td>'+
            '<td class="p-5">'+
                '<p class="text-success">'+
                    promo_alert+
                '</p>'+
                '<h4>'+numberWithCommas(price_total.value)+'฿</h4>'+
                '<input type="text" id="all_product_total" hidden value="'+price_total.value+'" />'+
                '<input type="text" id="promo_code" hidden value="'+promo_code.value+'" />'+
            '</td>'+
        '</tr>';
    table.html(table_str);

    console.log(price_total.value);
    console.log(user_money.value);

    if((price_total.value <= user_money.value) && (tick > 0)){
        $("#btn_buy").removeAttr("disabled");
    }else{
        $("#btn_buy").attr('disabled', true);
    }
}

function updateTotal() {
    let product_lists_arr = $('[name=product_check]');
    let product_ele;
    let product_price;
    let product_id;
    let total = 0;


    for (let i = 0; i < product_lists_arr.length; i++) {
        if (product_lists_arr[i].checked) {
            product_ele = $(product_lists_arr[i]).closest("tr").children("td")
            product_id = product_ele.children("#product_id")[0]
            product_price = $("#product_list_total_"+product_id.value)[0]
            total += parseInt(product_price.value)
        }
    }

    // console.log('total = '+ total);
    return total;
}

function poCodeGenerator() {
    $("#PO_code").html("B-"+makeid(18))
    $("#new_po_code").val("B-"+makeid(18))
}

function makeid(length) {
    var result           = [];
    var characters       = '0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result.push(characters.charAt(Math.floor(Math.random() * 
 charactersLength)));
   }
   return result.join('');
}

</script>