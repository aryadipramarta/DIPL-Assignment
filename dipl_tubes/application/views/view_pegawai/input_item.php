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
              <li class="dropdown dropdown-slide">
                <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
                  <img src="<?= base_url('assets/image/user.png') ?>" height="20px"><span class="tf-ion-ios-arrow-down">
                  </span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url('pegawai/editProfile/' . $d['id_pegawai']); ?>">My Profile</a></li>
                  <li><a href="<?= base_url('pegawai/logout'); ?>">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
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

    <!-- Main Menu -->
    <section class="user-dashboard page-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-inline dashboard-menu text-center">
              <li><a href="<?= base_url('pegawai'); ?>">Orders</a></li>
              <li><a href="<?= base_url('pegawai/order_detail'); ?>">Order Detail</a></li>
              <li><a class="active">Input Item</a></li>
              <li><a href="<?= base_url('pegawai/list_item'); ?>">List Item</a></li>
            </ul>
            <section class="user-dashboard page-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="dashboard-wrapper dashboard-user-profile">
                      <div class="media">
                        <?php echo form_open_multipart('pegawai/add'); ?>
                        <div class=" mt-3 mb-5">
                          <label for="exampleInputEmail1" class="form-label">Product</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="merk">
                        </div>
                        <div class="mb-5">
                          <label for="exampleFormControlTextarea1" class="form-label">Specifications</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="spesifikasi"></textarea>
                        </div>
                        <div class="mb-5">
                          <label for="exampleInputEmail1" class="form-label">Type</label>
                          <br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi_barang" id="inlineRadio1" value="New">
                            <label class="form-check-label" for="inlineRadio1">New</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi_barang" id="inlineRadio2" value="Second">
                            <label class="form-check-label" for="inlineRadio2">Second</label>
                          </div>
                        </div>
                        <div class="mb-5">
                          <label for="exampleInputEmail1" class="form-label">Price</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="harga">
                        </div>
                        <div class="mb-5">
                          <label for="exampleInputEmail1" class="form-label">Stock</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="stok">
                        </div>
                        <div class="mb-5">
                          <label class="form-label">Upload Foto</label>
                          <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right align-bottom">Input Item</button>
                        <?php echo form_close(); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  </html>