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
                            <li>
                                <form action="<?= base_url(''); ?>" method="POST"><input type="text" class="form-control" placeholder="Search...">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </form>
                            </li>
                            <li>
                                <a href="<?= base_url('cart') ?>"><img src="<?= base_url('assets/image/cart.png') ?>" height="20px"></a>
                            </li>
                            <li class="dropdown dropdown-slide">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?= base_url('assets/image/user.png') ?>" height="20px"><span class="tf-ion-ios-arrow-down">
                                    </span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('pembeli/editProfile/' . $d['id_pembeli']); ?>">My Profile</a></li>
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
                            <li><a href="<?= base_url('pembeli'); ?>">Home</a></li>
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
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <section class="page-wrapper success-msg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="block text-center">
                            <img src="<?= base_url('assets/image/checkmark.png') ?>" height="50px">
                            <h1 class="text-center">Thank you! For your payment</h1>
                            <h2 class="text-center">Silahkan Lakukan Pembayaran Pada Rekening Yang Sudah Disediakan</h2>
                            <a href="<?= base_url('pembeli'); ?>" class="btn btn-main mt-20">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </section>