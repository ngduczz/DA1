<head>
    <style>
.table th, .table td {
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
                Danh Sách Bình Luận
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Ngày</th>
                            <th>Nội dung</th>
                            <th>Tài khoản</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comment as $item) : ?>
                            <tr>
                                <td><?= $item['ten'] ?></td>
                                <td><?= $item['ngay'] ?></td>
                                <td><?= $item['text'] ?></td>
                                <td><?= $item['ten_taikhoan'] ?></td>
                                <td>
                                    <!-- <a href="<?= BASE_URL_ADMIN ?>?act=&id=<?= $item['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a> -->
                                    <a href="<?= BASE_URL_ADMIN ?>?act=comment-delete&id=<?= $item['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>