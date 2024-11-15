<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">
                Các thuộc tính
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Form thêm mới thuộc tính -->
                <div class="col-6">
                    <h5>Thêm mới thuộc tính</h5>
                    <form method="POST" action="<?= BASE_URL_ADMIN ?>?act=attributes">
                        <div class="form-group">
                            <label for="ten_thuoctinh">Tên thuộc tính:</label>
                            <input type="text" id="ten_thuoctinh" name="ten_thuoctinh" class="form-control" required>
                        </div>
                        <button type="submit" name="add_attribute" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
                <!-- Form thêm biến thể vào thuộc tính -->
                <div class="col-6">
                    <h5>Thêm biến thể vào thuộc tính</h5>
                    <form method="POST" action="<?= BASE_URL_ADMIN ?>?act=attributes" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id_thuoctinh">Chọn thuộc tính:</label>
                            <select id="id_thuoctinh" name="id_thuoctinh" class="form-control" required>
                                <?php foreach ($attribut as $item) : ?>
                                    <option value="<?= $item['id'] ?>"><?= htmlspecialchars($item['ten_thuoctinh']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gia_tri_thuoctinh">Giá trị thuộc tính (cách nhau bằng dấu phẩy):</label>
                            <input type="text" id="gia_tri_thuoctinh" name="gia_tri_thuoctinh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gia">Giá tiền (cách nhau bằng dấu phẩy):</label>
                            <input type="text" id="gia" name="gia" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="anh">Ảnh (cách nhau bằng dấu phẩy, sử dụng tên tệp):</label>
                            <input type="file" id="anh" name="anh[]" class="form-control" multiple>
                        </div>
                        <button type="submit" name="add_variant" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
            <!-- Danh sách thuộc tính hiện có -->
            <div class="table-responsive mt-4">
                <table class="table table-bordered" style="text-align: center;" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên thuộc tính</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($attribut as $item) : ?>
                            <tr>
                                <td><?= htmlspecialchars($item['ten_thuoctinh']) ?></td>
                                <td>
                                    <!-- <a href="<?= BASE_URL_ADMIN ?>?act=attributes-update&id=<?= $item['id'] ?>" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a> -->
                                    <a href="<?= BASE_URL_ADMIN ?>?act=attributes-delete&id=<?= $item['id'] ?>" class="btn btn-primary" onclick="return confirm('Có xóa không ?')">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $first = true; ?>
                    <?php foreach ($attribut as $attr) : ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $first ? 'active' : '' ?>" id="tab-<?= $attr['id'] ?>" data-bs-toggle="tab" href="#content-<?= $attr['id'] ?>" role="tab"><?= htmlspecialchars($attr['ten_thuoctinh']) ?></a>
                        </li>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-4" id="myTabContent">
                    <?php $first = true; ?>
                    <?php foreach ($attribut as $attr) : ?>
                        <div class="tab-pane fade <?= $first ? 'show active' : '' ?>" id="content-<?= $attr['id'] ?>" role="tabpanel">
                            <h5>Biến thể của thuộc tính <?= htmlspecialchars($attr['ten_thuoctinh']) ?></h5>
                            <table class="table table-bordered" style="text-align: center;" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Giá trị biến thể</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($variants[$attr['id']] as $variant) : ?>
                                        <tr>
                                            <td><?= htmlspecialchars($variant['value']) ?></td>
                                            <td>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=variant-delete&id=<?= $variant['id'] ?>" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa biến thể này không?')">
                                                <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle JS (bao gồm Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>