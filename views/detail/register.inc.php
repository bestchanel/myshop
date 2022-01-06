<div class="col-md-12">
    <div class="position-absolute" style="background-image:url('./templates/image/banner number2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh; width:210vh; filter: blur(50px);"></div>
    <div class="card col-md-4 m-auto border border- border-secondary mt-5" style="background-color: #ffffff91;">
        <div class="card-body m-auto"> 
            <div style="text-align: center;">
                <h1>Register</h1>
            </div>
            <hr>
            <div class="row col-md-12">
                <table>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-user"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-lock"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-tag"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Display name" name="user_name" id="user_name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-phone"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Phone" name="user_phone" id="user_phone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-envelope"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="email  " class="form-control" placeholder="Email" name="user_mail" id="user_mail">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                <i class="fas fa-map-marked-alt"></i>
                            </h3>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Address" name="user_address" id="user_address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
                <div class="col-md-12" style="margin-top: 10%;">
                    <div class="text-center">
                        <input type="button" class="btn btn-success w-100" style="width: inherit;" value="Submit" onclick="registerUser()">
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-primary w-100 mt-3" style="width: inherit;" value="Login" onclick='window.location.href = "?app=login";'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 