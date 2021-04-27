<body id="body">

    <!-- Start Top Header Bar -->
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
                        <a href="index.html">
                            <h3>Nusantara Phone Store</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <ul class="top-menu text-right list-inline">
                        <li>
                            <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
                        </li>
                        <li>
                            <a href="#!"><img src="<?= base_url('assets/image/cart.png') ?>" height="20px"></a>
                        </li>
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url('assets/image/user.png') ?>" height="20px"><span class="tf-ion-ios-arrow-down">
                                </span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('pembeli/profile'); ?>">My Profile</a></li>
                                <li><a href="<?= base_url('pembeli/order'); ?>">My Order</a></li>
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
                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url('pembeli') ?>">Home</a></li>
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="products.html">iPhone</a></li>
                                <li><a href="products.html">Samsung</a></li>
                                <li><a href="products.html">OPPO</a></li>
                                <li><a href="products.html">Xiaomi</a></li>
                                <li><a href="products.html">VIVO</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="about.html">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="single-product">
        <div class="container">
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class="d-flex justify-content-center"><img class="img-responsive" src='<?php echo base_url() . 'assets/image/' . $spesifikasi->img_barang ?>'></div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2><?php echo $spesifikasi->merk ?></h2>
                        <p class="product-price">Rp. <?php echo $spesifikasi->harga ?></p>

                        <p class="product-description mt-20">
                            <?php echo $spesifikasi->spesifikasi ?>
                        </p>

                    </div><br>
                    <a href="<?php echo base_url('barang/addToCart/' . $spesifikasi->id_barang); ?>" class="btn btn-main mt-20">Add To Cart</a>
                </div>
            </div>
        </div>
        </div>
    </section>