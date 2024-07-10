<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=cate-create" class="btn btn-primary">Create</a>
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Danh sách danh mục
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tên danh mục</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tên danh mục</th>
                            <th>Chức năng</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <tr>
                                <th>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=cate-detail&id=<?= $cate['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=cate-update&id=<?= $cate['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=cate-delete&id=<?= $cate['id'] ?>" class="btn btn-primary" onclick=" return confirm('Co xoa khong ?')">Delete</a>
                                </th>

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>