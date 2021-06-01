    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">


    </head>

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
                                <a href="#">
                                    <h3>NUSANTARA PHONE STORE</h3>
                                </a>
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
        <?php endforeach; ?>
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
            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p33">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">388,688</h2>
                                    <span class="desc">items sold</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">1,086</h2>
                                    <span class="desc">this week</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">Rp. 192,321,332</h2>
                                    <span class="desc">total earnings</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END STATISTIC-->

                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h2 class="title-1 m-b-25">Recent Order</h2>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>date</th>
                                                    <th>order ID</th>
                                                    <th>name</th>
                                                    <th class="text-right">price</th>
                                                    <th class="text-right">quantity</th>
                                                    <th class="text-right">total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2021-09-29 05:57</td>
                                                    <td>100398</td>
                                                    <td>iPhone X 64Gb Grey</td>
                                                    <td class="text-right">$999.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$999.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-28 01:22</td>
                                                    <td>100397</td>
                                                    <td>Samsung S8 Black</td>
                                                    <td class="text-right">$756.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$756.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-27 02:12</td>
                                                    <td>100396</td>
                                                    <td>iPhone 11 Pro</td>
                                                    <td class="text-right">$22.00</td>
                                                    <td class="text-right">2</td>
                                                    <td class="text-right">$44.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-26 23:06</td>
                                                    <td>100395</td>
                                                    <td>iPhone X 256Gb Black</td>
                                                    <td class="text-right">$1199.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$1199.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-25 19:03</td>
                                                    <td>100393</td>
                                                    <td>Samsung S10 Blue</td>
                                                    <td class="text-right">$10.00</td>
                                                    <td class="text-right">3</td>
                                                    <td class="text-right">$30.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-29 05:57</td>
                                                    <td>100392</td>
                                                    <td>Iphone Xr 64Gb Red</td>
                                                    <td class="text-right">$199.00</td>
                                                    <td class="text-right">6</td>
                                                    <td class="text-right">$1494.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-24 19:10</td>
                                                    <td>100391</td>
                                                    <td>Samsung S21 Black</td>
                                                    <td class="text-right">$699.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$699.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-09-22 00:43</td>
                                                    <td>100393</td>
                                                    <td>iPhone XS 256Gb Gold</td>
                                                    <td class="text-right">$10.00</td>
                                                    <td class="text-right">3</td>
                                                    <td class="text-right">$30.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- STATISTIC CHART-->
                                <section class="statistic-chart">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1 class="title-5 m-b-35">statistics</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <!-- TOP CAMPAIGN-->
                                            <div class="top-campaign">
                                                <h3 class="title-3 m-b-30">top campaigns</h3>
                                                <div class="table-responsive">
                                                    <table class="table table-top-campaign">
                                                        <tbody>
                                                            <tr>
                                                                <td>1. Bandung</td>
                                                                <td>$70,261.65</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2. Jakarta</td>
                                                                <td>$46,399.22</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3. Medan</td>
                                                                <td>$35,364.90</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4. Surabaya</td>
                                                                <td>$20,366.96</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5. Bali</td>
                                                                <td>$10,366.96</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END TOP CAMPAIGN-->

                                </section>