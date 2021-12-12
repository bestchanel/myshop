<div class="col-md-12">
    <div class="card col-md-4 m-auto border border-secondary">
        <div class="card-body m-auto">
            <div style="text-align: center;">
                <h1>Login</h1>
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
                <br>
                <div class="col-md-12" style="margin-top: 10%;">
                    <div class="text-center">
                        <input type="button" class="btn btn-success w-auto" style="width: inherit;" value="Login" onclick="loginUser()">
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-secondary mt-3 w-auto" style="width: inherit;" value="Register" onclick='window.location.href = "?app=register";'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>