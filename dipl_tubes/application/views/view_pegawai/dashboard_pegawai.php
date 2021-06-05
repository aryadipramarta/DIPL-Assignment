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
                            <img src="<?= base_url('assets/image/logopsnusantara.png') ?>" height="180px">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <ul class="top-menu text-right list-inline">

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
                            <li><a href="<?= base_url('pegawai/order_detail'); ?>">Order Detail</a></li>
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

                                                            <th>ID_Order</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Tanggal Checkout</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Barang</th>
                                                            <th>Order Status</th>
                                                            <th></th>
                                                        </tr>
                                                        <?php

                                                        foreach ($order_barang as $o) {
                                                            $id_order = $o->id_order;
                                                        ?>
                                                            <tr>

                                                                <td><?php echo $o->id_order ?></td>
                                                                <td><?php echo $o->nama_pembeli ?></td>
                                                                <td><?php echo $o->tanggal_beli ?></td>
                                                                <td>Rp.<?php echo number_format($o->total_bayar, 0, ',', '.') ?></td>
                                                                <td><?php echo 0 ?></td>
                                                                <td><?php echo $o->order_status ?></td>
                                                                <?php if ($o->order_status == 'Unconfirmed') { ?>
                                                                    <td><a href="<?= base_url('pegawai/proses/' . $id_order) ?>" class="btn btn-sm btn-success">Confirm</a>
                                                                    </td>
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