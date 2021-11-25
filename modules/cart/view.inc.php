<div class="col-md-12 bg-secondary p-5 row">
    <div class="col-md-8 card rounded p-5">
        <div>
            <h3>CART <i class="fas fa-shopping-cart"></i></h3>
        </div>
        <div>
            <table class="table table-light table-striped display" id="myTable" style="width:100%">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < count($data); $i++) { ?>
                        <tr>
                            <td>
                                <img src="<?php echo $data[$i]['product_image']?>" class="w-25" alt="" srcset="">
                            </td>
                            <td>
                                <?php echo $data[$i]['product_name']?>
                            </td>
                            <td>
                                <?php echo $data[$i]['product_price']?>
                            </td>
                            <td>
                                0
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4 card rounded p-5">
        <div>
            <h3>CART <i class="fas fa-shopping-cart"></i></h3>
        </div>
    </div>
</div>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>