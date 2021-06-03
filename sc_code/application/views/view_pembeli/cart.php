<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

<script>
    // Update item quantity
    function updateCartItem(obj, rowid) {
        $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {
            rowid: rowid,
            qty: obj.value
        }, function(resp) {
            if (resp == 'ok') {
                location.reload();
            } else {
                alert('Cart update failed, please try again.');
            }
        });
    }
</script>

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
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <form method="post">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Image</th>
                                                <th class="">Item Name</th>
                                                <th class="">Price</th>
                                                <th class="">Quantity</th>
                                                <th class="">Total Price</th>
                                                <th class="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($cartItems > 0) {
                                                foreach ($cartItems as $item) {    ?>
                                                    <tr>
                                                        <td>
                                                            <?php $imageURL = !empty($item["image"]) ? base_url('assets/image/' . $item["image"]) : base_url('assets/images/pro-demo-img.jpeg'); ?>
                                                            <img src="<?php echo $imageURL; ?>" width="250" />
                                                        </td>
                                                        <td><?php echo $item["name"]; ?></td>
                                                        <td>Rp<?php echo number_format($item["price"], 0, ',', '.') ?></td>
                                                        <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                                                        <td class="text-right">Rp<?php echo number_format($item["subtotal"], 0, ',', '.') ?></td>
                                                        <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('cart/removeItem/' . $item["rowid"]); ?>':false;"><i class="itrash"></i> </button> </td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr>
                                                    <td colspan="6">
                                                        <p>Your cart is empty.....</p>
                                                    </td>
                                                <?php } ?>
                                                <?php if ($cartItems > 0) { ?>
                                                    <?php

                                                    $total = 0;
                                                    foreach ($cartItems as $item) {
                                                        $total += $item["price"] * $item["qty"];
                                                    }

                                                    ?>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Total Cart</strong></td>
                                                    <td class="text-right">Rp.<strong><?php echo number_format($total, 0, ',', '.') ?></strong></td>
                                                    <td></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?= base_url('pembeli/checkout') ?>" class="btn btn-main pull-right">Checkout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>