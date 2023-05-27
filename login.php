<?php $file_name = "login";
include('templates/header.php') ?>
<div class="login-page  ">
    <div class="login-ses d-flex-al-jc">
        <div class="col-md-4 col-12">
            <div class="backg-login">
                <div class="logo-img mb-3">
                    <a href="index.php"><img src="./assets/img/logow.png" alt=""></a>
                    <a href="index.php"><i class='bx bx-arrow-back'></i></a>
                </div>
                <form>
                    <h3>Login Here</h3>
                    <div class="my-2">
                        <label for="username">Name</label>
                        <input type="name" placeholder="Enter Your Name" id="name" class="form-control">
                    </div>
                    <div class="my-2">
                        <label for="mail">E-mail</label>
                        <input type="email" placeholder="Enter Your Name" id="mail" class="form-control">
                    </div>
                    <div class="my-2">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" id="password" class="form-control">
                    </div>
                    <div class="my-3">
                        <a href="forgot.php">Forgot Password?</a>
                    </div>
                    <div class="mt-3 mb-3 ">
                        <a href="" class="btnw-des">Login</a>
                    </div>


                </form>
            </div>
        </div>
    </div>


</div>

<div class="d-none">
    <?php include('templates/footer.php') ?>
</div>