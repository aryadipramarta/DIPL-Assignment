<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title><?= $title; ?></title>
</head>

<body>
    <center>
        <br>
        <div class="d-inline-flex p-2 bd-highlight" style="text-align: left;">
            <span class="border border-primary rounded" style="width: 500px;">
                <br><br>
                <center>
                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                        <center>
                            <h2 style="color:#0d6efd;">Register Pembeli</h2>
                        </center><br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="No. HP" value="<?= set_value('telepon') ?>">
                                <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?= set_value('username') ?>">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?= set_value('password') ?>">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <center><button type="submit" class="btn btn-block btn-primary" style="width: 200px;">Register</button></center>
                        <br>
                        <center>Already have an account? <a href="<?= base_url('auth'); ?>">Login</a></center>
                    </form>
                </center>
                <br>
            </span>
        </div>
    </center>
</body>

</html>