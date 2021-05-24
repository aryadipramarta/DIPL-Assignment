<body id="body">
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
                        <li><a href="<?= base_url('pembeli/registration'); ?>" class="btn btn-dark btn-sm">Register</a></li>
                        <li><a href="<?= base_url('authpembeli'); ?>" class="btn btn-dark btn-sm">Login</a></li>
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
                        <li><a href="homepage-user.html">Home</a></li>
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
                        <li><a href="<?= base_url('homepage/contact'); ?>">Contact</a></li>
                        <li><a href="<?= base_url('homepage/aboutus'); ?>">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/image/header1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/image/header2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/image/header3.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Our Product</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($barang as $brg) : ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
                                <span class="bage">Sale</span>
                                <img class="img-responsive" src="<?php echo base_url() . 'assets/image/' . $brg->img_barang ?>" alt="product-img" />
                            </div>
                            <div class="product-content">
                                <h4><a href=""><?php echo $brg->merk ?></a></h4>
                                <p>Rp. <?php echo $brg->harga ?></p>
                                <?php echo anchor('barang/spesifikasi/' . $brg->id_barang, '<span class="badge badge-success">View Spesifikasi Barang</span>') ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>