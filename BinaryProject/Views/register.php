<div class="login-page">
    <div class="container login-container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-register" method="post">
                            <div class="form-label-group">
                                <input type="email" id="emailRegister" name="emailRegister" class="form-control"
                                       placeholder="Email address"
                                       required autofocus>
                                <label for="emailRegister"<?php if ($_SESSION['invalidEmail']) echo "style=\" color: darkred\""; ?>>Email address</label>
                            </div>
                            <div class="form-label-group">
                                <input type="text" id="usernameRegister" name="usernameRegister" class="form-control"
                                       placeholder="Username">
                                <label for="usernameRegister"<?php if ($_SESSION['longUsername']) echo "style=\" color: darkred\""; ?>>Username</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="passwordRegister" name="passwordRegister" class="form-control"
                                       placeholder="Password"
                                       required>
                                <label for="passwordRegister"<?php if ($_SESSION['invalidPassword']) echo "style=\" color: darkred\""; ?>>Password</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="passwordRegisterBis" name="passwordRegisterBis"
                                       class="form-control"
                                       placeholder="Confirm you password"
                                       required>
                                <label for="passwordRegisterBis"<?php if ($_SESSION['invalidPassword']) echo "style=\" color: darkred\""; ?>>Password</label>
                            </div>


                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <input class="btn btnLogIn btn-lg btn-primary btn-block text-uppercase" type="submit"
                                   name="submit"
                                   id="submitRegister" value="Register"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>