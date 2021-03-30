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
                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <center>
                            <h2 style="color:#0d6efd;">Login</h2>
                        </center><br>
                        <?= $this->session->flashdata('message'); ?>
                        <br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
                            </div>
                        </div>
                        <br>
                        <div class="form-row" style="width:400px;">
                            <div class="col">
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                            </div>
                        </div>
                        <br>
                        <center><button type="submit" class="btn btn-block btn-primary" style="width: 200px;">Login</button></center>
                        <br>
                        <center>Forget Password? <a href="">Click Here</a></center>
                        <center><a href="<?= base_url('auth/registration'); ?>">Create an Account!</a></center>
                    </form>
                </center>
                <br>
            </span>
        </div>
    </center>
</body>

</html>