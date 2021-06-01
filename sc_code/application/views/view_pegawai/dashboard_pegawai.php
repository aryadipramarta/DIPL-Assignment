<body id="body">
    <!-- Top Header Bar -->
    <?php foreach ($user as $d) : ?>
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
                            <li><a class="active">Orders</a></li>
                            <li><a href="<?= base_url('pegawai/input_item'); ?>">input Item</a></li>
                            <li><a href="<?= base_url('pegawai/list_item'); ?>">List Item</a></li>
                        </ul>
                        <section class="user-dashboard page-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dashboard-wrapper user-dashboard">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID_ORDER</th>
                                                            <th>ID PEMBELI</th>
                                                            <th>ORDER STATUS</th>
                                                            <th>TANGGAL-BELI</th>
                                                            <th>TOTAL BAYAR</th>
                                                            <th></th>
                                                        </tr>
                                                        <?php
                                                        foreach ($order_barang as $o) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $o['id_order'] ?></td>
                                                                <td><?php echo $o['id_pembeli'] ?></td>
                                                                <td><?php echo $o['order_status'] ?></td>
                                                                <td><?php echo $o['tanggal_beli'] ?></td>
                                                                <td><?php echo $o['total_bayar'] ?></td>
                                                                <?php if ($o['order_status'] == 'Unconfirmed') { ?>
                                                                    <td><button type="button" class="btn btn-info">Confirm</button></td>
                                                                <?php } else { ?>
                                                                    <td></td>
                                                                <?php
                                                                } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
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
        <?php endforeach; ?>
        </section>