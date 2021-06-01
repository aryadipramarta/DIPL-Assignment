<body id="body">
    <?php foreach ($user as $d) : ?>
        <!-- Top Header Bar -->
        <section class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="contact-number">
                            <img src="<?= base_url('assets/image/call.png') ?>" height="12px">
                            <span>&nbsp;&nbsp;Call Center: 021-334-776</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <!-- Site Logo -->
                        <div class="logo text-center">
                            <a href="#">
                                <h3>NUSANTARA PHONE STORE</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <ul class="top-menu text-right list-inline">
                            <li>
                                <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
                            </li>
                            <li class="dropdown dropdown-slide">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?= base_url('assets/image/user.png') ?>" height="20px"><span class="tf-ion-ios-arrow-down">
                                    </span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('pegawai/editProfile/' . $d['id_pegawai']); ?>">My Profile</a></li>
                                    <li><a href="<?= base_url('pegawai/logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <h1 class="page-name">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Menu -->
        <section class="user-dashboard page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline dashboard-menu text-center">
                            <li><a href="<?= base_url('pegawai'); ?>">Orders</a></li>
                            <li><a href="<?= base_url('pegawai/input_item'); ?>">Input Item</a></li>
                            <li><a class="active">List Item</a></li>
                        </ul>
                        <section class="user-dashboard page-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dashboard-wrapper user-dashboard">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr style="font-weight:bold;">
                                                            <td class="text-center" scope="col">ID</td>
                                                            <td class="text-center" scope="col">Product</td>
                                                            <td class="text-center" scope="col">Specifications</td>
                                                            <td class="text-center" scope="col">Type</td>
                                                            <td class="text-center" scope="col">Price </td>
                                                            <td class="text-center" scope="col">Stock </td>
                                                            <td class="text-center" scope="col">Action </td>
                                                        </tr>
                                                        <?php
                                                        // var_dump($tb_barang);
                                                        // die;
                                                        $id_barang = 1;
                                                        foreach ($tb_barang as $b) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $id_barang++ ?></td>
                                                                <td><?php echo $b['merk'] ?></td>
                                                                <td><?php echo $b['spesifikasi'] ?></td>
                                                                <td><?php echo $b['kondisi_barang'] ?></td>
                                                                <td><?php echo $b['harga'] ?></td>
                                                                <td><?php echo $b['stok'] ?></td>
                                                                <td><a href=<?= base_url() ?>pegawai/updateData/<?= $b['id_barang'] ?> class="btn btn-success mr-3">Edit</a><a href=<?= base_url() ?>pegawai/delete/<?= $b['id_barang'] ?> class="btn btn-danger">Delete</a></td>

                                                            </tr>
                                                        <?php } ?>
                                                    </thead>
                                                    <!-- <tbody id="tbl_data" style="text-align: center">
                                                
                                                </tbody> -->
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- <script type="text/javascript">
    $(document).ready(function() {
        tampil_data();
        //Menampilkan Data di tabel
        function tampil_data() {
            $.ajax({
                url: '<?php echo base_url(); ?>pegawai/ambilDatabarang',
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    var i;
                    var no = 0;
                    var html = "";
                    for (i = 0; i < response.length; i++) {
                        no++;
                        html = html + '<tr>' +
                            '<td>' + response[i].merk + '</td>' +
                            '<td>' + response[i].spesifikasi + '</td>' +
                            '<td>' + response[i].kondisi_barang + '</td>' +
                            '<td>' + response[i].harga + '</td>' +
                            '<td>' + response[i].stok + '</td>' +
                            // '<td style="width: 16.66%;">' + '<a data-id="' + response[i].id_barang + '" class="badge badge-success" href="<?= base_url(); ?>KonselorC/ubah/' + response[i].id_barang + '">Ubah</a>' + '</td>' +
                            '</tr>';
                    }
                    $("#tbl_data").html(html);
                }
            });
        }

    });
</script> -->
    <?php endforeach; ?>

    </html>