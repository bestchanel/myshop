<div class="col-md-12 align-content-center text-center">
    <div class="position-absolute" style="background-image:url('./templates/image/banner number2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh; width:210vh; filter: blur(50px);"></div>
    <div class="card col-md-4 m-auto border border- border-secondary mt-5" style="background-color: #ffffff91;">
        <div class="card-body m-auto">
            <div style="text-align: center;">
                <h1>Login</h1>
            </div>
            <hr>
            <div class="row col-md-12 m-auto">
                <table>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-user"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="username" id="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-lock"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="password" class="form-control" name="password" id="password">
                        </td>
                    </tr>
                </table>
                <br>
                <div class="col-md-12" style="margin-top: 10%;">
                    <div class="text-center">
                        <input type="button" class="btn btn-success w-100" style="width: inherit;" value="Login" onclick="loginUser()">
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-secondary w-100 mt-3" style="width: inherit;" value="Register" onclick='window.location.href = "?app=register";'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>