<body id="body">
    <!-- Top Header Bar -->
    <input type="hidden" id="path" value="<?= base_url('pembeli/confirmation') ?>">
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="contact-number">
                        <img src="img/call.png" height="12px">
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
                                <li><a href="<?= base_url('pembeli/editProfile/' . $user); ?>">My Profile</a></li>
                                <li><a href="<?= base_url('pembeli/order'); ?>">My Order</a></li>
                                <li><a href="<?= base_url('pembeli/logout') ?>">Logout</a></li>
                            </ul>
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

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Checkout</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url('pembeli'); ?>">Home</a></li>
                            <li class="active">checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="checkout shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="block billing-details">
                            <h4 class="widget-title">Billing Details</h4>
                            <form class="checkout-form" method="POST" action="">
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" placeholder="<?= $nama ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label for="user_address">Address</label>
                                    <input type="text" class="form-control" name="jalan_alamat" id="jalan_alamat" placeholder="">
                                </div>
                                <div class="checkout-country-code clearfix">
                                    <div class="form-group">
                                        <label for="user_post_code">Zip Code</label>
                                        <input type="text" class="form-control" name="kode_pos" id="kode_pos">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_city">City</label>
                                        <input type="text" class="form-control" name="kota_alamat" id="kota_alamat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_country">Province</label>
                                    <input type="text" class="form-control" name="provinsi_alamat" id="provinsi_alamat" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="block">
                            <h4 class="widget-title">Payment Method</h4>
                            <p>Make Sure You Write the Correct Account Number</p>
                            <div class="checkout-product-details">
                                <div class="payment">
                                    <div class="card-details">
                                        <form class="checkout-form" method="post" action="<?= base_url('pembeli/confirmation') ?>">
                                            <label for="card-number">Choose Bank Account <span class="required">*</span></label>

                                            <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="metode-pembayaran">
                                                <?php foreach ($pembayaran as $byr) {
                                                    $id_rekening = $byr->id_metodepembayaran;
                                                    $nama_rekening = $byr->nama_rekening;
                                                    $nomer_rekening = $byr->nomer_rekening;
                                                    $atas_nama = $byr->atas_nama; ?>
                                                    <option data-metode="<?= $nomer_rekening ?>" value="<?= $id_rekening ?>"><?php echo ($nama_rekening); ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="card-number">Choose Agent <span class="required">*</span></label>
                                            <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="agent-kurir">
                                                <?php foreach ($kurir as $kr) {
                                                    $Agent_Kurir = $kr->id_Agent_Kurir;
                                                    $Nama_Agent = $kr->Nama_Agent;
                                                    $Ongkos_kirim = $kr->Ongkos_kirim; ?>
                                                    <option data-ongkir="<?= $Ongkos_kirim ?>" value="<?= $Agent_Kurir ?>"><?php echo ($Nama_Agent); ?></option>
                                                <?php } ?>
                                            </select>
                                            <p>*Remember To Transfer To This Account Number*</p>
                                            <p>Account Number : <span id="no-rek" data-rekening="0"></span></p>
                                            <button class="btn btn-main mt-20" id="submitBtn">Place Order</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-checkout-details">
                            <div class="block">
                                <h4 class="widget-title">Order Summary</h4>
                                <?php foreach ($cartItems as $item) :; ?>
                                    <input type="hidden" value="<?= $item["id"] ?>" class="id-barang">
                                    <input type="hidden" value="<?= $item["qty"] ?>" class="qty-barang">
                                    <div class="media product-card">
                                        <a class="pull-left" href="detail-product.html">
                                            <?php $imageURL = !empty($item["image"]) ? base_url('assets/image/' . $item["image"]) : base_url('assets/images/pro-demo-img.jpeg'); ?>
                                            <img class="media-object" src="<?php echo $imageURL; ?>" alt="Image" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="detail-product.html">iPhone 11</a></h4>
                                            <p class="price"><?php echo $item["qty"]; ?> x <?php echo number_format($item["price"], 0, ',', '.') ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <?php if ($cartItems > 0) { ?>
                                    <?php

                                    $total = 0;
                                    foreach ($cartItems as $item) {
                                        $total += $item["price"] * $item["qty"];
                                    }

                                    ?>
                                    <ul class="summary-prices">
                                        <li>
                                            <span>Subtotal:</span>
                                            <span class="price">Rp.<?php echo number_format($total, 0, ',', '.') ?></span>
                                        </li>
                                        <li>
                                            <span>Shipping:</span>
                                            <span id="shipping-fee" data-shipping="0"></span>
                                        </li>
                                    </ul>
                                    <div class="summary-total">
                                        <span>Total</span>
                                        <span id="total-harga-text"></span>
                                    </div>
                                    <input type="hidden" id="total-harga" value="<?= $total ?>">
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function countOngkir() {
            const id_kurir = kurirSelect.value
            const optionOngkir = document.querySelector(`#agent-kurir > option[value="${id_kurir}"]`)
            return optionOngkir.dataset.ongkir
        }

        function countTotal(ongkir) {
            const total = parseInt(document.getElementById('total-harga').value) + parseInt(ongkir)
            return total
        }

        function shownorek() {
            const id_metodepembayaran = rekeningpembayaran.value
            const optionNorek = document.querySelector(`#metode-pembayaran > option[value="${id_metodepembayaran}"]`)
            return optionNorek.dataset.metode
        }
        const rekeningpembayaran = document.getElementById("metode-pembayaran")
        const submitBtn = document.getElementById("submitBtn")
        const kurirSelect = document.getElementById("agent-kurir")
        const shippingElement = document.getElementById("shipping-fee")
        const norekening = document.getElementById("no-rek")
        const totalText = document.getElementById("total-harga-text")
        let ongkir = 0
        let norek = 0
        norek = shownorek()
        norekening.textContent = norek
        ongkir = countOngkir()
        shippingElement.textContent = "Rp. " + numberWithCommas(ongkir)
        total = countTotal(ongkir)
        totalText.textContent = "Rp. " + numberWithCommas(total)

        kurirSelect.addEventListener("change", () => {
            ongkir = countOngkir()
            shippingElement.textContent = "Rp. " + numberWithCommas(ongkir)
            total = countTotal(ongkir)
            totalText.textContent = "Rp. " + numberWithCommas(total)
        })

        rekeningpembayaran.addEventListener("change", () => {
            norek = shownorek()
            norekening.textContent = norek
        })

        submitBtn.addEventListener("click", (e) => {
            e.preventDefault()
            // data alamat
            const dataAlamat = {
                jalan_alamat: document.getElementById("jalan_alamat").value,
                kota_alamat: document.getElementById("kota_alamat").value,
                kode_pos: document.getElementById("kode_pos").value,
                provinsi_alamat: document.getElementById("provinsi_alamat").value,
            }

            // data order detail
            const ids_barang = [...document.querySelectorAll(".id-barang")].map(item => {
                const [id_barang] = item.value.split("_")
                return id_barang
            })
            const qty_barang = [...document.querySelectorAll(".qty-barang")].map(item => item.value)

            const dataOrderDetail = {
                ids_barang,
                qty_barang
            }

            // data payment method and kurir
            const additional = {
                agent_kurir: document.getElementById("agent-kurir").value,
                metode_pembayaran: document.getElementById("metode-pembayaran").value,
                total_harga: countTotal(ongkir)
            }

            const params = {
                ...dataAlamat,
                ...dataOrderDetail,
                ...additional
            }

            const path = document.getElementById("path").value
            post(path, params)
        })

        function post(path, params, method = 'post') {
            // The rest of this code assumes you are not using a library.
            // It can be made less verbose if you use one.
            const form = document.createElement('form');
            form.method = method;
            form.action = path;

            for (const key in params) {
                if (params.hasOwnProperty(key)) {
                    const hiddenField = document.createElement('input');
                    hiddenField.type = 'hidden';
                    hiddenField.name = key;
                    hiddenField.value = params[key];

                    form.appendChild(hiddenField);
                }
            }

            document.body.appendChild(form);
            form.submit();
        }
    </script>