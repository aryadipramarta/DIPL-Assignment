<body id="body">
    <!-- Top Header Bar -->
    <?php foreach ($data as $d) : ?>
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
                                    <li><a href="<?= base_url('pemilik/editProfile/' . $d['id_pemilik']); ?>">My Profile</a></li>
                                    <li><a href="<?= base_url('pemilik/logout') ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Menu Section -->
        <section class="menu">
            <nav class="navbar navigation">
                <div class="container">
                    <!-- Navbar Links -->
                    <div id="navbar" class="navbar-collapse collapse text-center">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url('pemilik') ?>">Dashboard Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
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
                        <div class="page-wrapper">
                            <div class="container-fluid">
                                <!-- Cards  -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card text-white text-center bg-dark mb-3">
                                            <div class="card-body">
                                                <img src="<?= base_url('assets/image/price-tag.png') ?>" width="20px">
                                                <h5 class="card-title">Total Penjualan</h5>
                                                <small class="font-light">Rp. <?php echo number_format($total_jual, 0, ',', '.') ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card text-white text-center bg-secondary mb-3">
                                            <div class="card-body">
                                                <img src="<?= base_url('assets/image/user.png') ?>" width="20px">
                                                <h5 class="card-title">Total Users</h5>
                                                <small class="font-light"><?php echo $total_user ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card text-white text-center bg-secondary mb-3">
                                            <div class="card-body">
                                                <img src="<?= base_url('assets/image/cart.png') ?>" width="20px">
                                                <h5 class="card-title">Total Shop</h5>
                                                <small class="font-light"><?php echo $total_transaksi ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-5">
                                        <div class="card text-white text-center bg-secondary mb-3">
                                            <div class="card-body">
                                                <img src="<?= base_url('assets/image/pending.png') ?>" width="20px">
                                                <h5 class="card-title">Unconfirmed Orders</h5>
                                                <small class="font-light"><?php echo $total_unconfirmed ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Transaksi -->
                                <section class="user-dashboard page-wrapper">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="dashboard-wrapper user-dashboard">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Kurir Agent</th>
                                                                    <th>Metode Pembayaran</th>
                                                                    <th>Total Bayar</th>
                                                                </tr>
                                                                <?php
                                                                $no = 1;
                                                                foreach ($laporan as $o) {
                                                                ?>
                                                                    <tr>

                                                                        <td><?php echo $no++ ?></td>
                                                                        <td><?php echo $o->nama_pembeli ?></td>
                                                                        <td><?php echo $o->Nama_Agent ?></td>
                                                                        <td><?php echo $o->nama_rekening ?></td>
                                                                        <td>Rp. <?php echo number_format($o->harga_total, 0, ',', '.') ?></td>
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
                            <?php endforeach; ?>