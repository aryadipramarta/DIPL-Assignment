<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body id="body">
    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <!-- <h2>Nusantara Phone Store</h2> -->
                        <h3 class="text-center">Welcome to Nusantara Phone Store!</h3>
                        <div class="buttonPart">
                            <ul class="list-inline mt-5">
                                <li class="li"><a href="<?= base_url('authpembeli'); ?>" class="btn btn-main btn-large btn-round" style="color: white;">Login as Customer</a></li>
                            </ul>
                            <ul class="list-inline mt-10">
                                <li class="li"><a href="<?= base_url('authpegawai'); ?>" class="btn btn-main btn-large btn-round" style="color: white;">Login as Admin</a></li>
                            </ul>
                            <ul class="list-inline mt-10">
                                <li class="li"><a href="<?= base_url('authpemilik'); ?>" class="btn btn-main btn-large btn-round" style="color: white;">Login as Owner</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>