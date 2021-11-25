<div style="text-align: center;">
    <h1>Register</h1>
</div>
<br>
<div class="row col-md-12">
    <div class="col-md-6">
        <label for="">username</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>
    <div class="col-md-6">
        <label for="">password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    
    <div class="col-md-6">
        <label for="">display name</label>
        <input type="text" class="form-control" name="user_name" id="user_name">
    </div>
    <div class="col-md-6">
        <label for="">phone</label>
        <input type="text" class="form-control" name="user_phone" id="user_phone">
    </div>
    
    <div class="col-md-6">
        <label for="">Email</label>
        <input type="email  " class="form-control" name="user_mail" id="user_mail">
    </div>
    <div class="col-md-6">
        <label for="">Address</label>
        <input type="text" class="form-control" name="user_address" id="user_address">
    </div>
    <br>
    <div class="col-md-12" style="margin-top: 10%;">
        <input type="button" class="btn btn-success" style="width: inherit;" value="Submit" onclick="registerUser()">
        <input type="button" class="btn btn-primary mt-3" style="width: inherit;" value="Login" onclick='window.location.href = "?app=login";'>
    </div>
</div>