<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">
        Thêm Sản Phẩm
      </h3>
    </div>
    <div class="card-body">
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
      <form action="" enctype="multipart/form-data" method="POST">
        <div class="row">
          <div class="col-md-6">

            <!-- <div class="mb-3">
              <label for="" class="form-label">Tên sản phẩm</label> <br>
              <input type="text" class="form-control" name="ten">
            </div> -->

            <div class="form-group">
              <label>Tên sản phẩm:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-file-signature"></i></span>
                </div>
                <input type="text" class="form-control" name="ten" value="">
              </div>
            </div>

            <div class="mb-3 mt-3">
              <label for="" class="form-label">Ảnh sản phẩm:</label> <br>
              <input style="padding: 3px;" type="file" class="form-control" name="anh_chinh" id="anh">
            </div>
            <div class="mb-3 mt-3">
              <label for="" class="form-label">Thư viện ảnh:</label> <br>
              <input style="padding: 3px;" type="file" class="form-control" name="anh[]" id="anh" multiple>
            </div>
            <!-- <div class="mb-3 mt-3">
              <label for="" class="form-label">Giá</label> <br>
              <input type="number" min=0 class="form-control" name="gia">
            </div> -->

            <div class="form-group">
              <label>Giá:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                </div>
                <input type="number" min=0 class="form-control" name="gia" value="">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label>Giảm giá:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                </div>
                <input type="number" min=0 class="form-control" name="giamgia" value="">
              </div>
              <!-- /.input group -->
            </div>
            <!-- <div class="mb-3 mt-3">
              <label for="" class="form-label">Số lượng</label> <br>
              <input type="number" min=0 class="form-control" name="soluong">
            </div> -->

            <div class="form-group">
              <label>Số lượng:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-cash-register"></i></span>
                </div>
                <input type="number" min=0 class="form-control" name="soluong" value="">
              </div>
              <!-- /.input group -->
            </div>

            <div class="mb-3 mt-3">
              <label for="" class="form-label">Danh mục</label> <br>
              <select class="form-control" name="id_danhmuc" id="id_danhmuc">
                <?php foreach ($category as $category) : ?>
                  <option value="<?= $category['id'] ?>"><?= $category['ten_danhmuc'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- <div class="mb-3 mt-3">
              <label for="" class="form-label">Mô tả</label> <br>
              <input type="text" class="form-control" name="mota">
            </div> -->
            <div class="form-group">
              <label>Mô tả ngắn:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-audio-description"></i></span>
                </div>
                <input type="text" class="form-control" name="motangan" value="">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label>Mô tả:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-audio-description"></i></span>
                </div>
                <input type="text" class="form-control" name="mota" value="">
              </div>
              <!-- /.input group -->
            </div>
          </div>
        </div>

        <div class="mt-4">
          <a href="<?= BASE_URL_ADMIN ?>?act=produc" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại</a>
          <button type="submit" class="btn btn-warning">Thêm mới</button>
        </div>

      </form>
    </div>
  </div>
</div>