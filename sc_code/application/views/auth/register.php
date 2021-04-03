<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/style_register.css') ?> ">
    <title><?= $title; ?></title>
</head>
<style>
    .inner {
        min-width: 850px;
        margin: auto;
        padding-top: 68px;
        padding-bottom: 48px;
        background: url(<?= base_url('assets/image/registration-form-2.jpg') ?>);
    }

    .inner h3 {
        text-transform: uppercase;
        font-size: 22px;
        font-family: "Muli-Bold";
        text-align: center;
        margin-bottom: 32px;
        color: #333;
        letter-spacing: 2px;
    }
</style>

<body>
    <div class="wrapper" style="background-image: url(<?= base_url('assets/image/bg-registration-form-2.jpg') ?>);">
        <div class="inner">
            <form class="user" method="post" action="<?= base_url('pembeli/registration'); ?>">
                <h3>Registrasi Pembeli</h3>
                <div class="form-group">
                </div>
                <div class="form-wrapper">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name') ?>">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-wrapper">
                    <label for="">No.HP</label>
                    <input type="text" name="telepon" class="form-control" id="telepon" value="<?= set_value('telepon') ?>">
                    <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-wrapper">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username') ?>">
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-wrapper">
                    <label for="">password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= set_value('password') ?>">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <label>
                    <center>Already have an account? <a href="<?= base_url('auth'); ?>">Login</a></center>
                </label>
                <button>Register Now</button>
            </form>
        </div>
    </div>
</body>

</html>