<style>
  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    background-color: #f8f9fa;
    border-radius: 4px;
  }

  .custom-file-upload input[type="file"] {
    display: none;
  }

  .custom-file-upload img {
    max-width: 100px;
    max-height: 100px;
    display: block;
    margin: 10px 0;
  }

  .thumbnail-container img {
    max-width: 100%;
    height: auto;
  }
</style>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Cập nhật sản phẩm: <?= htmlspecialchars($title) ?></h3>
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
      <form action="<?= BASE_URL_ADMIN ?>?act=produc-update&id=<?= $pro['id'] ?>" method="post" enctype="multipart/form-data" class="form_update">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr style="text-align: center;">
                <th>Ảnh</th>
                <th>Thông tin sản phẩm</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="product-images" style="text-align: center;" width="50%">
                  <h4>Ảnh sản phẩm</h4>
                  <div class="thumbnail-container">
                    <img src="<?= BASE_URL . $pro['anh_chinh'] ?>" alt="">
                  </div>
                  <label class="custom-file-upload">
                    <span>Chọn ảnh</span>
                    <input type="file" id="fileInput" name="anh_chinh">
                    <img id="previewImage" src="" alt="" style="display:none;">
                  </label>
                  <div class="container mt-4">
                    <h4>Thư viện ảnh</h4>
                    <div class="row">
                      <!-- Dynamically generate image items -->
                      <?php if (!empty($pro['anh_all'])) : ?>
                        <?php $anhPaths = explode(',', $pro['anh_all']); ?>
                        <?php foreach ($anhPaths as $path) : ?>
                          <?php
                          $imageId = getImageIdFromPath($path);
                          ?>
                          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                              <img src="<?= BASE_URL . '/' . htmlspecialchars($path) ?>" alt="Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                              <div class="card-body text-center">
                                <input type="checkbox" name="delete_images[]" value="<?= htmlspecialchars($imageId) ?>"> Xóa
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                  <!-- Thêm ảnh mới -->
                  <label class="custom-file-upload">
                    <span>Chọn ảnh</span>
                    <input type="file" name="anh[]" multiple>
                    <img id="previewImage" src="" alt="" style="display:none;">
                  </label>
                </td>
                <td style="font-size: large;">
                  <h1 class="update-title">Tên sản phẩm:</h1>
                  <input type="text" name="ten" value="<?= htmlspecialchars($pro['ten']) ?>" class="text in1">
                  <h2 class="product-id">Mã: #<?= $pro['id'] ?></h2>
                  <h3>Loại sản phẩm:</h3>
                  <select name="update_danhmuc" class="text in2">
                    <?php foreach ($category as $cat) : ?>
                      <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $pro['id_danhmuc'] ? 'selected' : '' ?>>
                        <?= $cat['ten_danhmuc'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <h3>Thuộc tính:</h3>
                  <select name="thuoctinh[]" class="text in2 select2" multiple="multiple">
                    <?php foreach ($thuoctinh as $item) : ?>
                      <option value="<?= $item['id'] ?>" <?= in_array($item['id'], $selected_thuoctinh) ? 'selected' : '' ?>>
                        <?= $item['ten_thuoctinh'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <h3 class="update-quantity">Số lượng:</h3>
                  <input type="number" name="soluong" value="<?= $pro['soluong'] ?>" class="text in2">
                  <h3 class="update-price">Giá:</h3>
                  <input type="number" name="gia" value="<?= $pro['gia'] ?>" class="text in2">
                  <h3 class="update-price">Giảm giá:</h3>
                  <input type="number" name="giamgia" value="<?= $pro['gia_sale'] ?>" class="text in2">
                  <h3 class="update-description">Mô tả ngắn:</h3>
                  <input type="text" name="motangan" value="<?= htmlspecialchars($pro['mota_ngan']) ?>" class="text in2">
                  <h3 class="update-description">Mô tả:</h3>
                  <textarea name="mota" class="text in2 text_content"><?= htmlspecialchars($pro['mota']) ?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mt-4">
          <button type="submit" name="update_product" class="btn btn-primary">
            <i class="fa-solid fa-save"></i> Lưu
          </button>
          <a href="<?= BASE_URL_ADMIN ?>?act=produc" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  document.getElementById('fileInput').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(e) {
      var img = document.getElementById('previewImage');
      img.src = e.target.result;
      img.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
  });

  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Chọn thuộc tính",
      allowClear: true
    });
  });
</script>