<div class="p-5">
    <div style="text-align: center;">
        <h1 class="text-danger">Update Product <i class="fas fa-edit"></i></h1>
    </div>
    <div style="text-align:center;">
        <img src="<?php echo $data['product_image']?>" alt="" srcset="" id="loadImg" style="width: 20%;">
        <br>
        <button class="btn btn-primary" type="Button" data-bs-toggle="modal" data-bs-target="#myModal">
            <i class="fas fa-image"></i> 
            Change Image
        </button>
    </div>
    <br>
    <div class="row col-md-12">
        <div class="col-md-6">
            <label for="">Product name</label>
            <input type="text" value="<?php echo $data['product_name']?>" placeholder="ชื่อสินค้า เช่น AM4 AMD RYZEN 5 5600X" class="form-control" name="product_name" id="product_name">
        </div>
        <div class="col-md-6">
            <label for="">Product detail</label>
            <input type="text" value="<?php echo $data['product_detail']?>" placeholder="รายละเอียดสินค้า เช่น 6 Cores 4 Trades 3.7 GHz Discrete Graphics Required, No Integrated Graphics." class="form-control" name="product_detail" id="product_detail">
        </div>
        
        <div class="col-md-6">
            <label for="">Product price</label>
            <input type="text" value="<?php echo $data['product_price']?>" value="<?php echo $data['product_name']?>" placeholder="ราคาของสินค้า เช่น 10300" class="form-control" name="product_price" id="product_price">
        </div>
        <div class="col-md-6">
            <label for="">Product group</label>
            <input type="text" value="<?php echo strtoupper(str_replace("_", " ", $data['product_group']));?>" placeholder="ชนิดของสินค้า เช่น CPU" class="form-control" name="product_group" id="product_group">
        </div>
        <div class="col-md-6">
            <label for="">Product brand</label>
            <input type="text" value="<?php echo $data['product_brand']?>" placeholder="แบรนด์ของสินค้า เช่น AMD หรือ INTEL" class="form-control" name="product_brand" id="product_brand">
        </div>
        <div class="col-md-6" style="align-self:center;">
            <label for="">จัดให้สินค้าเป็น Promotion หรือไม่?</label>
            <input type="checkbox" oninput="console.log(this.checked)" <?php if ($data['promotion']) {
                echo "checked";
            }?> name="promotion" id="promotion">
        </div>
        <br>
        <div class="col-md-12 w-25 row mt-5 p-2 bg-secondary rounded">
            <div class="col-md-6 text-center bg-body">
                <p>Update By</p>
                <img src="<?php echo $data['updateby_profile']?>" alt="" class="w-25 rounded-circle" srcset="">
                <p>Name : <?php echo $data['updateby_name']?></p>
                <p>Status : <?php echo $data['updateby_role']?></p>
                <p>Date : <?php echo $data['product_lastupdate']?></p>
            </div>
            <div class="col-md-6 text-center bg-body">
                <p>Add By</p>
                <img src="<?php echo $data['addby_profile']?>" alt="" class="w-25 rounded-circle" srcset="">
                <p>Name : <?php echo $data['addby_name']?></p>
                <p>Status : <?php echo $data['addby_role']?></p>
                <p>Date : <?php echo $data['product_insert']?></p>
            </div>
        </div>
        <div class="col-md-12 row mt-xl-5">
            <div class="btn btn-danger col-md-4 w-auto m-2" onclick="cancelThis()">ย้อนกลับ</div>
            <div class="btn btn-warning col-md-4 w-auto m-2" onclick="window.location.reload()">คืนค่าเริ่มต้น</div>
            <div class="btn btn-success col-md-4 w-auto m-2" onclick="updateProduct()">อัปเดทสินค้า</div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="file" name="new_avatar" id="new_avatar">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="uploadAvatar()">Upload</button>
      </div>
    </div>
  </div>
</div>


<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
var product_id = "<?php echo $_GET['product_id']?>";

myModal.addEventListener('shown.bs.modal', function () {
  //myInput.focus()
})

function updateProduct() {
    let product_name = document.getElementById('product_name').value
    let product_detail = document.getElementById('product_detail').value
    let product_price = document.getElementById('product_price').value
    let product_group = document.getElementById('product_group').value
    let product_brand = document.getElementById('product_brand').value
    let promotion = document.getElementById('promotion').checked

    fetch('models/ProductModel.php',{
        method: 'post',
        body: JSON.stringify({
            action:'update_product',
            product_id: product_id,
            product_name: product_name,
            product_detail: product_detail,
            product_price: product_price,
            product_group: product_group,
            product_brand: product_brand,
            promotion: promotion
        })
    })
    .then((response) => response.json())
    .then((data) => {
        // if(data){
            window.location.reload()
        // }
        console.log(data);
    })
}

const sample_image = document.getElementsByName('new_avatar')[0];

function uploadAvatar() {
    upload_image(sample_image.files[0])
}


const upload_image = (file) => {

    // check file type

    if(!['image/jpeg', 'image/png'].includes(file.type))
    {
        alert('Only .jpg and .png image are allowed');

        sample_image.value = '';
        
        return;
    }

    // check file size (< 2MB)
    if(file.size > 2 * 1024 * 1024)
    {
        alert('File must be less than 2 MB');

        sample_image.value = '';
        return;
    }

    const form_data = new FormData();

    form_data.append('sample_image', file);
    form_data.append('product_id', product_id);

    // console.log({
    //     body : {
    //         sample_image : file,
    //         product_id : product_id,
    //     }
    // });
    fetch("models/uploadProduct.php", {
        method:"POST",
        body : form_data
    }).then(function(response){
        return response.json();
    }).then(function(responseData){

        console.log(responseData);
        window.location.reload();

    });


}
</script>