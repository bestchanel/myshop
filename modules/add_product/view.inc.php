<div class="p-5">
    <div style="text-align: center;">
        <h1 class="text-danger">Add Product <i class="fas fa-folder-plus"></i></h1>
    </div>
    <br>
    <div class="row col-md-12">
        <div class="col-md-6">
            <label for="">Product name</label>
            <input type="text" placeholder="ชื่อสินค้า เช่น AM4 AMD RYZEN 5 5600X" class="form-control" name="product_name" id="product_name">
        </div>
        <div class="col-md-6">
            <label for="">Product detail</label>
            <input type="text" placeholder="รายละเอียดสินค้า เช่น 6 Cores 4 Trades 3.7 GHz Discrete Graphics Required, No Integrated Graphics." class="form-control" name="product_detail" id="product_detail">
        </div>
        
        <div class="col-md-6">
            <label for="">Product price</label>
            <input type="text" placeholder="ราคาของสินค้า เช่น 10300" class="form-control" name="product_price" id="product_price">
        </div>
        <div class="col-md-6">
            <label for="">Product group</label>
            <input type="text" placeholder="ชนิดของสินค้า เช่น CPU" class="form-control" name="product_group" id="product_group">
        </div>
        <div class="col-md-6">
            <label for="">Product brand</label>
            <input type="text" placeholder="แบรนด์ของสินค้า เช่น AMD หรือ INTEL" class="form-control" name="product_brand" id="product_brand">
        </div>
        <div class="col-md-6">
            <label for="">Product Image</label>
            <input type="text" placeholder="ก็อปลิงค์รูปภาพสินค้าแล้วมาวางที่นี่ได้เลย" class="form-control " oninput="loadUrl()" name="product_image" id="product_image">
            <p class="">หรือ</p>
            <input class="" type="file" name="sample_image" />
        </div>
        <div class="col-md-6" style="align-self:center;">
            <label for="">จัดให้สินค้าเป็น Promotion หรือไม่?</label>
            <input type="checkbox" oninput="console.log(this.checked)" name="promotion" id="promotion">
        </div>

        <div class="col-md-12 p-5" style="align-self:center;">
            <label for="">ภาพตัวอย่างสินค้า</label>
            <img src="" alt="" srcset="" id="loadImg" style="width: 20%;">
        </div>
        <br>
        <div class="col-md-12 row mt-xl-5">
            <div class="btn btn-danger col-md-4 w-auto m-2" onclick="cancelThis()">ย้อนกลับ</div>
            <div class="btn btn-warning col-md-4 w-auto m-2" onclick="window.location.reload()">คืนค่าเริ่มต้น</div>
            <div class="btn btn-success col-md-4 w-auto m-2" onclick="add_product()">อัปโหลดสินค้า</div>
        </div>
    </div>
</div>
