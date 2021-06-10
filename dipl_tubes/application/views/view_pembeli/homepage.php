<body id="body">

    <!-- Start Top Header Bar -->
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
                            <li>
                                <a href="<?= base_url('cart') ?>"><img src="<?= base_url('assets/image/cart.png') ?>" height="20px"></a>
                            </li>
                            <li class="dropdown dropdown-slide">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?= base_url('assets/image/user.png') ?>" height="20px"><span class="tf-ion-ios-arrow-down">
                                    </span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('pembeli/editProfile/' . $d['id_pembeli']); ?>">My Profile</a></li>
                                    <li><a href="<?= base_url('pembeli/view_myorder/' . $d['id_pembeli']); ?>">My Order</a></li>
                                    <li><a href="<?= base_url('pembeli/logout') ?>">Logout</a></li>
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
                    <div class="navbar-header">
                        <h2 class="menu-title">Main Menu</h2>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Navbar Links -->
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url('pembeli') ?>">Home</a></li>
                        </ul>
                        <div class="navbar-form navbar-right">
                            <?php echo form_open('pembeli/caribarang') ?>
                            <input type="text" name="keyword" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-success">Find</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
            </nav>
        </section>
    <?php endforeach; ?>

    <section class="products section">
        <div class="container">

            <div class="row">
                <?php foreach ($barang as $brg) : ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
                                <span class="bage">Sale</span>
                                <img class="img-responsive" src="<?php echo base_url() . 'assets/image/' . $brg->img_barang ?>" alt="product-img" height="180px" />
                            </div>
                            <div class="product-content">
                                <h4><a href="<?= base_url('barang/spesifikasi/' . $brg->id_barang); ?>"><?php echo $brg->merk ?></a></h4>
                                <p>Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?>
                                </p>
                                <?php echo anchor('barang/spesifikasi/' . $brg->id_barang, '<span class="badge badge-success">View Spesifikasi Barang</span>') ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>