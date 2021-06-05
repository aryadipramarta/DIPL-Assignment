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
                </div>
            </nav>
        </section>

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <h1 class="page-name">Edit Profile</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="user-dashboard page-wrapper">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard-wrapper dashboard-user-profile">
                            <div class="media">
                                <form method="post" action="<?= base_url('pembeli/editProfile/' . $d['id_pembeli']); ?>">
                                    <div class=" mt-3 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $d['nama_pembeli'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?= $d['username_pembeli'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $d['email_pembeli'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Mobile Phone</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $d['noHp_pembeli'] ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right align-bottom">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </section>