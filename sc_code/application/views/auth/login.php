<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main_login.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/util_login.css') ?> ">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?= base_url('assets/image/bg-02.jpg') ?> )">
                    <span class="login100-form-title-1"> Sign In </span>
                    <?= $this->session->flashdata('message'); ?>
                </div>

                <form class="login100-form validate-form" method="post" action="<?= base_url('auth'); ?>">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" id="username" placeholder="Enter username" />
                        <small class="text-danger"><?= form_error('username'); ?></small>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="password" placeholder="Enter password" />
                        <small class="text-danger"><?= form_error('password'); ?></small>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div>
                            <a href="#" class="txt1">Forget Password ?</a>
                        </div>

                        <div>
                            <a href="<?= base_url('pembeli/registration') ?>" class="txt1"> Create an Account !</a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>