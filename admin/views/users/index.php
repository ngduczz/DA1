<head>
    <style>
        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">
                Danh Sách Tài Khoản
                <a href="<?= BASE_URL_ADMIN ?>?act=user-create" class="btn btn-primary">Thêm mới</a>
            </h3>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="list-unstyled m-0">
                        <li><?= $_SESSION['error'] ?></li>
                    </ul>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Ảnh</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Chức vụ</th>
                            <th>Tính năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $index => $item) : ?>
                            <tr>
                                <td><?= $item['ten'] ?></td>
                                <td><img src="<?= BASE_URL . $item['anh'] ?>" alt="Ảnh <?= $index; ?>" width="65"></td>
                                <td><?= $item['ngaysinh'] ?></td>
                                <td><?= $item['diachi'] ?></td>
                                <td><?= $item['sodienthoai'] ?></td>
                                <td><?= $item['trangthai']
                                        ? '<span class="badge badge-success">Admin</span>'
                                        : ' <span class="badge badge-warning">Member</span>'
                                    ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-show&id=<?= $item['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-update&id=<?= $item['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-delete&id=<?= $item['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>