<div class="col-md-12 align-content-center text-center">
    <div class="position-absolute" style="background-image:url('./templates/image/new_banner.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh; width:210vh; filter: blur(50px);"></div>
    <div class="card col-md-4 m-auto border border- border-secondary mt-5" style="background-color: #ffffff91;">
        <div class="card-body m-auto">
            <div style="text-align: center;">
                <h1>
                    <i class="fas fa-user-alt" style="font-size: 10vh;"></i>
                </h1>
            </div>
            <hr>
            <div class="row col-md-12 m-auto">
                <table>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-user" aria-hidden="true"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="text" placeholder="Username" class="form-control" name="username" id="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="password" placeholder="Password" class="form-control" name="password" id="password">
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