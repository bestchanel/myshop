<div class="col-md-12 p-5">
    <div class="card shadow-lg p-3 mb-3 bg-body bg-gradient rounded">
        <h1 class="text-md-center">Account</h1>
    </div>
    <div class="col-md-12 row">
        <div class="col-md-2 ">
            <div class="card shadow-lg p-3 mb-5 bg-body bg-gradient rounded">
                <div class="card-body" style="text-align: center;">
                    <img src="<?php echo $_SESSION['user_data']['user_profile']?>" alt="" srcset="" class="img img-responsive full-width" style="width: -webkit-fill-available; border-radius:100%; width:15vh;">
                    <div style="text-align: center;" class="mt-4">
                        <a type="button" class="btn btn-danger mb-4" href="logout.php">Logout</a>
                        <p>ID : <?php echo $_SESSION['user_data']['username']?></p>
                        <p>ชื่อ : <?php echo $_SESSION['user_data']['user_name']?></p>
                        <p>สถานะ : <?php echo $_SESSION['user_data']['user_role']?></p>
                        <p>ตำแหน่ง : <?php echo $_SESSION['user_data']['user_status']?></p>
                        <div class="bg-warning w-100 rounded p-3 m-1">
                            <p>อัปเดทล่าสุด</p>
                            <p><?php echo $_SESSION['user_data']['user_update']?></p>
                        </div>
                        <div class="bg-warning w-100 rounded p-3 m-1">
                            <p>เป็นสมาชิกเมื่อ</p>
                            <p><?php echo $_SESSION['user_data']['user_insert']?></p>
                        </div>
                        <div class="btn-success btn mt-5 pt-2">
                            <p><i class="fas fa-money-check-alt"></i> เงินในบัญชี </p>
                            <p><?php echo number_format(floatval($_SESSION['user_data']['user_money']),2)."฿"?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card shadow-lg p-3 mb-5 bg-body bg-gradient rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between pb-4" style="border-bottom-style: solid;">
                        <h3>Edit profile</h3>
                        <button class="btn btn-success pt-3" onclick="updateUser()">
                            <p><i class="fas fa-user-edit"></i> ยืนยันการเปลี่ยนแปลง</p>
                        </button>
                    </div>

                    <div class="col-md-12 row">
                        <div class="col-md-6 mt-5">
                            <p>Display name</p>
                            <input class="form-control" type="text" name="user_name" id="user_name" value="<?php echo $_SESSION['user_data']['user_name']?>"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <p>password</p>
                            <div class="d-flex bd-highlight">
                                <input class="form-control p-2 w-100 bd-highlight" type="password" name="password" id="password" value="<?php echo $_SESSION['user_data']['password']?>"/>
                                <button class="btn btn-secondary p-2 flex-shrink-1 bd-highlight" id="show_pass">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-6 mt-5">
                            <p>Email</p>
                            <input class="form-control" type="email" name="user_mail" id="user_mail" value="<?php echo $_SESSION['user_data']['user_mail']?>"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <p>Address</p>
                            <input class="form-control" type="text" name="user_address" id="user_address" value="<?php echo $_SESSION['user_data']['user_address']?>"/>
                        </div>
                       
                        <div class="col-md-6 mt-5">
                            <p>Phone</p>
                            <input class="form-control" type="text" name="user_phone" id="user_phone" value="<?php echo $_SESSION['user_data']['user_phone']?>"/>
                        </div>

                        <div class="col-md-6 mt-5" style="align-self: end; text-align: right;">
                            <button class="btn btn-primary" type="Button" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="fas fa-image"></i> 
                                Change Avatar
                            </button>
                        </div>
                    </div>

                </div>
            </div>
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
myModal.addEventListener('shown.bs.modal', function () {
  //myInput.focus()
})

$( "#show_pass" ).click(function() {
    if ($("#password").attr("type") == 'password') {
        $('#password').attr("type", "text");
    } else {
        $('#password').attr("type", "password");
    }
});


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

    fetch("https://itustore.000webhostapp.com/models/uploadProfile.php", {
        method:"POST",
        body : form_data
    }).then(function(response){
        return response.json();
    }).then(function(responseData){

        window.location.reload();

    });


}

function updateUser() {
    let user_name = document.getElementById('user_name').value
    let _password = document.getElementById('password').value
    let user_mail = document.getElementById('user_mail').value
    let user_phone = document.getElementById('user_phone').value
    let user_address = document.getElementById('user_address').value

    fetch('https://itustore.000webhostapp.com/models/UserModel.php',{
        method: 'post',
        body: JSON.stringify({
            action:'update',
            user_name: user_name,
            password: _password,
            user_mail: user_mail,
            user_phone: user_phone,
            user_address: user_address
        })
    })
    .then((response) => response.json())
    .then((data) => {
        // if(data){
        //     window.location.reload()
        // }
        window.location.reload();
        console.log(data);
    })
}


function CCC(cheat_code) {
    CheatCodeCommand(cheat_code);
}


function CheatCodeCommand(cheat_code) {
    let findD;
    let code;
    let val;
    let canFetch = false
    let round = 1
    if(Array.isArray(cheat_code)){
        round = cheat_code.length
        canFetch = true;
        console.log("cheat-array");
    }else if(typeof cheat_code === 'string') {
        findD = cheat_code.indexOf("*");
        code = cheat_code.substring(0, findD);
        val = cheat_code.substring(findD+1, cheat_code.length);
        console.log("cheat-string");
        canFetch = true;
    }

    if (canFetch) {
        for (let i = 0; i < round; i++) {
            if (Array.isArray(cheat_code)) {
                findD = cheat_code[i].indexOf("*");
                code = cheat_code[i].substring(0, findD);
                val = cheat_code[i].substring(findD+1, cheat_code[i].length);
            }
            console.log({code : code});
            console.log({val : val});
            fetch("https://itustore.000webhostapp.com/controllers/cheatCmdByCode.php", {
                method: 'post',
                body: JSON.stringify({
                    code: code,
                    val: val
                })
            })
            .then((res)=> res.json())
            .then((data)=>{
                if (data) {
                    console.log("%c Code["+cheat_code+"]"+data, 'background: #000000; color: #00ff40;');
                    console.log("%c Press F5 ", 'background: #000000; color: #ffff00;');
                } else {
                    console.log("%c Code["+cheat_code+"] [Cheat Fail] Please check your code!", 'background: #000000; color: #fe0000;');
                    console.log("%c Press F5 ", 'background: #000000; color: #ffff00;');
                }
            })
        }
    }else{
        console.log("%c [Cheat Fail] Please check your code!", 'background: #000000; color: #fe0000;');
        console.log("%c Press F5 ", 'background: #000000; color: #ffff00;');
    }
}

</script>