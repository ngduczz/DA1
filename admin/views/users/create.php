<div class="container-fluid">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="m-0 font-weight-bold text-primary"><?= $title ?></h3>
          </div>
          <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= $_SESSION['success'] ?>
            </div>
            <?php unset($_SESSION['success']); ?>
          <?php endif; ?>

          <?php if (isset($_SESSION['errors'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul class="list-unstyled m-0">
                <?php foreach ($_SESSION['errors'] as $error) : ?>
                  <li><?= $error ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php unset($_SESSION['errors']); ?>
          <?php endif; ?>
          <form method="post" enctype="multipart/form-data">
            <div class="card-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Tên tài khoản:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-file-signature"></i></span>
                  </div>
                  <input type="text" class="form-control" name="ten">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Email:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                  </div>
                  <input type="text" class="form-control" name="email">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Ảnh</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                  </div>
                  <input type="file" class="form-control border-0" name="anh">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Mật khẩu:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                  </div>
                  <input type="text" class="form-control" name="matkhau">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Số điện thoại:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-phone-volume"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask name="sodienthoai">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask -->
              <div class="form-group">
                <label>Ngày sinh</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                  </div>
                  <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask name="ngaysinh">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Địa chỉ</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                  </div>
                  <input type="text" class="form-control" name="diachi">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Chức vụ</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-address-book"></i></span>
                  </div>
                  <select name="trangthai" id="" class="form-control">
                    <option value="1">Admin</option>
                    <option value="0">Menber</option>
                  </select>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <a href="<?= BASE_URL_ADMIN ?>?act=user" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại</a>
              <button type="submit" class="btn btn-warning">Thêm mới</button>
            </div>
          </form>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col (left) -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>