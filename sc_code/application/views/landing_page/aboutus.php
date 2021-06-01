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
                        <li><a href="<?= base_url('pembeli/registration'); ?>" class="btn btn-dark btn-sm">Register</a></li>
                        <li><a href="<?= base_url('auth'); ?>" class="btn btn-dark btn-sm">Login</a></li>
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
                        <li><a href="<?= base_url('homepage'); ?>">Home</a></li>
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

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="<?= base_url('assets/image/mobile1.jpeg') ?>">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-40">About Our Shop</h2>
                    <p>Nusantara Phone Store merupakan e-commerce yang ada di Indonesia sejak tahun 2019.</p>
                    <p>Nusantara Phone Store menjual ponsel dengan berbagai macam merk.</p>
                    <p>Kami dapat memastikan produk yang kami jual original dan dalam kondisi yang bagus.</p>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('assets/image/original.png') ?>" height="80px">
                    <br><br>
                    <p>Produk Original</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('assets/image/fast.png') ?>" height="80px">
                    <br><br>
                    <p>Gratis Pengiriman</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('assets/image/exchange.png') ?>" height="80px">
                    <br><br>
                    <p>Pengembalian 14 Hari</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('assets/image/transaction.png') ?>" height="80px">
                    <br><br>
                    <p>Keamanan Transaksi 100% Aman</p>
                </div>
            </div>
        </div>
    </section>
    <section class="team-members mb-5">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>Team Members</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="team-member text-center">
                        <img class="img-circle" src="<?= base_url('assets/image/impostor.png') ?>" height="100px">
                        <h4>Daffa Ullaya</h4>
                        <p>Founder</p>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member text-center">
                        <img class="img-circle" src="<?= base_url('assets/image/impostor.png') ?>" height="100px">
                        <h4>Aryadi Pramarta</h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member text-center">
                        <img class="img-circle" src="<?= base_url('assets/image/impostor.png') ?>" height="100px">
                        <h4>Ajeung Angsaweni</h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member text-center">
                        <img class="img-circle" src="<?= base_url('assets/image/impostor.png') ?>" height="100px">
                        <h4>Delvanita</h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member text-center">
                        <img class="img-circle" src="<?= base_url('assets/image/impostor.png') ?>" height="100px">
                        <h4>Rizal</h4>
                        <p>Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>