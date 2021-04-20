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
                                <li><a href="#">My Profile</a></li>
                                <li><a href="<?= base_url('pegawai/logout') ?>">Logout</a></li>
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
                        <li><a href="#">Home</a></li>
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">iPhone</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">OPPO</a></li>
                                <li><a href="#">Xiaomi</a></li>
                                <li><a href="#">VIVO</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Dashboard</a></li>
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


    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline dashboard-menu text-center">
                        <li><a class="active" href="dashboard.html">Dashboard</a></li>
                        <li><a href="order.html">Orders</a></li>
                        <li><a href="address.html">Address</a></li>
                        <li><a href="profile-details.html">Profile Details</a></li>
                    </ul>
                    <div class="dashboard-wrapper user-dashboard">
                        <div class="total-order mt-20">
                            <h4>Total Orders</h4><br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Total Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#!">#252125</a></td>
                                            <td>Mar 25, 2016</td>
                                            <td>2</td>
                                            <td>$ 99.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#!">#252125</a></td>
                                            <td>Mar 25, 2016</td>
                                            <td>2</td>
                                            <td>$ 99.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#!">#252125</a></td>
                                            <td>Mar 25, 2016</td>
                                            <td>2</td>
                                            <td>$ 99.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>