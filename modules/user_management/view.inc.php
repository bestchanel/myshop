<div class="p-5">
    <h2 style="border-bottom-style: solid;"> User Management <samp class="text-danger"> (ระบบจัดการสมาชิก) </samp> </h2>
    <div class="card mt-5 p-5">
        <table id="myTable" class="table table-body text-center align-middle">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>รูปภาพ</th>
                    <th>ชื่อ/นามสกุล</th>
                    <th>บทบาท</th>
                    <th>สถานะ</th>
                    <th>การอนุญาต</th>
                    <th>ตัวเลือก</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i < count($data); $i++) { ?>
                
                <tr <?php if ($data[$i]['user_allow'] == "ban") {
                    echo 'class="table-danger"';
                }?> >
                    <td>
                        <?php echo intval($i+1)?>
                    </td>
                    <td>
                        <img src="<?php echo $data[$i]['user_profile']?>" alt="" srcset="" class="rounded border border-secondary" style="width: 15vh;">
                    </td>
                    <td>
                        <?php echo $data[$i]['user_name']?>
                    </td>
                    <td>
                        <?php echo $data[$i]['user_role']?>
                    </td>
                    <td>
                        <?php echo $data[$i]['user_status']?>
                    </td>
                    <td>
                        <div data-bs-toggle="tooltip" data-bs-placement="bottom" <?php if ($data[$i]['user_allow'] == 'allow') {
                            echo 'class="btn btn-success"';
                            echo 'title="อนุญาต"';
                        }else {
                            echo 'class="btn btn-danger"';
                            echo 'title="ถูกแบน"';
                        }?> 
                        >
                            <?php echo strtoupper($data[$i]['user_allow'])?>
                        </div>
                    </td>
                    <td>
                        <?php if ($data[$i]['user_allow'] == "ban") {?>
                            <button onclick="updateUserByAdmin(<?php echo $data[$i]['user_id']?>, 'user_allow', 'allow')" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unban <?php echo $data[$i]['user_name']?>">
                                <i class="fas fa-check"></i>
                            </button>
                       <?php }else{ ?>
                            <button onclick="updateUserByAdmin(<?php echo $data[$i]['user_id']?>, 'user_allow', 'ban')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ban <?php echo $data[$i]['user_name']?>">
                                <i class="fas fa-times"></i>
                            </button>
                        <?php }?>
                        
                        <button onclick="updateUserByAdmin(<?php echo $data[$i]['user_id']?>, 'user_role', 'Admin')" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Set <?php echo $data[$i]['user_name']?> to Admin">
                            <i class="fas fa-user-shield"></i>
                        </button>
                        <button onclick="updateUserByAdmin(<?php echo $data[$i]['user_id']?>, 'user_role', 'Sellman')" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Set <?php echo $data[$i]['user_name']?> to Sellman">
                            <i class="fas fa-user-tie"></i>
                        </button>
                        <button onclick="updateUserByAdmin(<?php echo $data[$i]['user_id']?>, 'user_role', 'Member')" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Set <?php echo $data[$i]['user_name']?> to Member">
                            <i class="fas fa-user-alt"></i>
                        </button>

                        <div class="col-md-12 row mt-2">
                            <div class="col-md-10 p-0">
                                <input type="text" class="form-control" value="<?php echo $data[$i]['user_status']?>" name="job_<?php echo $data[$i]['user_id']?>" id="job_<?php echo $data[$i]['user_id']?>">
                            </div>
                            <div class="col-md-2 p-0">
                                <button class="btn btn-secondary mt-auto" onclick="updateUserByAdmin(<?php echo $data[$i]['user_id']?>, 'user_status', $('#job_<?php echo $data[$i]['user_id']?>').val())">
                                    <i class="fas fa-wrench"></i>
                                </button>
                            </div>
                        </div>

                    </td>
                </tr>

            <?php }?>
            </tbody>
        </table>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );


function updateUserByAdmin(user_id, key, val) {
    // console.log(user_id);
    // console.log(key);
    // console.log(val);
   fetch("controllers/updateUserByID.php", {
       method: 'post',
       body: JSON.stringify({
           user_id: user_id,
           key: key,
           val: val,
       })
   })
   .then((res) => res.json())
   .then((data)=>{
       if (data) {
           window.location.reload();
       }
   })
}

</script>