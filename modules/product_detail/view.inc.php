<div class="col-md-12 p-5 row" style="background-color:#c5c5c5;">

    <div class="col-md-3" style="align-self: center; text-align: center;">
        <img src="<?php echo $data['product_image']?>" alt="" srcset="" class="image_product_detail align-self-baseline">
    </div>

    <div class="col-md-9">

        <div class="col-md-12 row">
            <div class="col-md-8 card shadow-lg p-3 mb-5 bg-body rounded item_hover_gray">
                <div class="card-body">
                    <h1 style="border-bottom-style: solid;"><?php echo $data['product_name']?></h1>
                    <h4>Description</h4>
                    <p><?php echo $data['product_detail']?></p>
                </div>
            </div>
            <div class="col-md-4 card shadow-lg p-3 mb-5 bg-body rounded item_hover_gray">
                <div class="card-body">
                    <p style="text-align:center;"><?php echo $data['product_name']?></p>
                    <h1 style="border-bottom-style: solid; text-align:center;"><?php echo number_format($data['product_price'])."฿"?></h1>
                    <button class="btn btn-success mb-1" style="width: -webkit-fill-available;" onclick="addToCart(<?php echo $data['product_id']?>)"><i class="fas fa-cart-plus"></i> Add to card</button>
                    <button class="btn btn-primary" style="width: -webkit-fill-available;" onclick="purchaseProduct()"><i class="fas fa-money-check"></i> Purchase</button>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-12 row">
        <div class="col-md-8 card shadow-lg p-3 mb-5 bg-body rounded ">
            <div class="card-body">
               <h3 style="text-align: center;" class="mb-3">Detail</h3>
               <table class="table table-light" style="width: 100%;">
                   <tr>
                       <td>
                           <p>Name</p>
                       </td>
                       <td>
                           <p><?php echo $data['product_name']?></p>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <p>Brand</p>
                       </td>
                       <td>
                           <p><?php echo $data['product_brand']?></p>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <p>Type</p>
                       </td>
                       <td>
                           <p><?php echo str_replace("_", " ", $data['product_group'])?></p>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <p>Rate</p>
                       </td>
                       <td>
                           <p><?php echo $data['product_rate']?></p>
                       </td>
                   </tr>
               </table>
               <hr>
               <h3 style="text-align: center;" class="mb-3">Properties</h3>
                <div class="card p-3">
                    <label>
                        <?php echo $data['product_detail_large']?>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-4 card shadow-lg p-3 mb-5 bg-body rounded item_hover_gray">
            <div class="card-body">
                <div style="border-bottom-style: solid;" class="pb-3 text-center">
                    <p>Update By</p>
                    <img src="<?php echo $data['updateby_profile']?>" alt="" class="w-25 rounded-circle" srcset="">
                    <p>Name : <?php echo $data['updateby_name']?></p>
                    <p>Status : <?php echo $data['updateby_role']?></p>
                    <p>Date : <?php echo $data['product_lastupdate']?></p>
                </div>
                <div class="text-center">
                    <p>Add By</p>
                    <img src="<?php echo $data['addby_profile']?>" alt="" class="w-25 rounded-circle" srcset="">
                    <p>Name : <?php echo $data['addby_name']?></p>
                    <p>Status : <?php echo $data['addby_role']?></p>
                    <p>Date : <?php echo $data['product_insert']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function purchaseProduct(){
        addToCart(<?php echo $data['product_id']?>)
        window.location.href = "?app=cart";
    }
</script>