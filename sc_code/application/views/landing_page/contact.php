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
                        <img src="<?= base_url('assets/image/logopsnusantara.png') ?>" height="180px">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <ul class="top-menu text-right list-inline">
                        <a href="<?= base_url('pembeli/registration'); ?>" class="btn btn-dark">Register</a>
                        <a href="<?= base_url('homepage/authlogin'); ?>" class="btn btn-secondary">Login</a>
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
                        <h1 class="page-name">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="contact-form col-md-6 ">
                        <form id="contact-form" method="post" action="" role="form">

                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                            </div>

                            <div class="form-group">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                            </div>

                            <div id="mail-success" class="success">
                                Thank you. The Mailman is on His Way
                            </div>

                            <div id="mail-fail" class="error">
                                Sorry, don't know what happened. Try later
                            </div>

                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                            </div>

                        </form>
                    </div>

                    <!-- Contact Details -->
                    <div class="contact-details col-md-6">
                        <ul class="contact-short-info">
                            <li>
                                <img src="<?= base_url('assets/image/home.png') ?>" height="12px">
                                <span>Buah Batu, Bandung, Jawa Barat</span>
                            </li>
                            <li>
                                <img src="<?= base_url('assets/image/call.png') ?>" height="12px">
                                <span>Phone: 021-334-776</span>
                            </li>
                            <li>
                                <img src="<?= base_url('assets/image/web.png') ?>" height="12px">
                                <span>Fax: 021-334-776</span>
                            </li>
                            <li>
                                <img src="<?= base_url('assets/image/mail.png') ?>" height="12px">
                                <span>Email: halo@nusantaraps.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>