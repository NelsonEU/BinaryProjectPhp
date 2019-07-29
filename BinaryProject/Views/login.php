<div class="login-page">
    <div class="container login-container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" method="post">
                            <div class="form-label-group">
                                <input type="email" id="emailLogin" name="emailLogin" class="form-control"
                                       placeholder="Email address"
                                       required autofocus>
                                <label for="emailLogin" <?php if ($_SESSION['noUser'] || $_SESSION['wrongUser']) echo "style=\" color: darkred\""; ?>>Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="passwordLogin" name="passwordLogin" class="form-control"
                                       placeholder="Password"
                                       required>
                                <label for="passwordLogin" <?php if ($_SESSION['noUser'] || $_SESSION['wrongUser']) echo "style=\" color: darkred\"" ?>>Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input passwordCheckbox" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <input class="btn btnLogIn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit"
                                   id="submitLogin" value="Sign in"/>
                            <hr class="my-4 separator separatorLogin">
                            <div class="mt-2 mb-3">
                                Don't have an account ? <a href="index.php?action=register">Click here !</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>