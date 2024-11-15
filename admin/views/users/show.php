<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle rounded-circle" src="<?= BASE_URL . $users['anh'] ?>" alt="User profile picture" width="150">
                            </div>
                        </div>
                        <h3 class="profile-username text-center"><?= $users['ten'] ?></h3>
                        <?= $users['trangthai']
                            ? '<p class="text-muted text-center">Admin</p>'
                            : '<p class="text-muted text-center">Member</p>'
                        ?>
                        <!-- <ul class="list-group">
                            <?php if ($users['trangthai'] == '0') : ?>
                                <li class="list-group-item"><a href="<?= BASE_URL_ADMIN ?>?act=user-order&id=<?= $users['id'] ?>" class="text-decoration-none">Đơn hàng</a></li>
                                <li class="list-group-item"><a href="<?= BASE_URL_ADMIN ?>?act=user-history-order&id=<?= $users['id'] ?>" class="text-decoration-none">Lịch sử mua hàng</a></li>
                            <?php endif; ?>
                        </ul> -->
                    </div>
                    <div class="mt-4">
                        <a href="<?= BASE_URL_ADMIN ?>?act=user" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại</a>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <div class="card-body">
                                <strong><i class="fa-regular fa-envelope"></i> Email</strong>
                                <p class="text-muted"><?= $users['email'] ?></p>
                                <hr>
                                <!-- <strong><i class="fa-solid fa-lock"></i> Mật khẩu</strong>
                                <p class="text-muted"><?= $users['matkhau'] ?></p>
                                <hr> -->
                                <strong><i class="fa-solid fa-phone-volume"></i> Số điện thoại</strong>
                                <p class="text-muted"><?= $users['sodienthoai'] ?></p>
                                <hr>
                                <strong><i class="fa-solid fa-calendar-days"></i> Ngày sinh</strong>
                                <p class="text-muted"><?= $users['ngaysinh'] ?></p>
                                <hr>
                                <strong><i class="fa-solid fa-location-dot"></i> Địa chỉ</strong>
                                <p class="text-muted"><?= $users['diachi'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>


                    <?php if ($users['trangthai'] == '0') : ?>
                        <div class="container-fluid">
                            <!-- Page Heading -->
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">
                                        Danh Sách Đơn Hàng
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="table1-tab" data-toggle="tab" href="#table1" role="tab" aria-controls="table1" aria-selected="true">Tất cả đơn hàng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="table2-tab" data-toggle="tab" href="#table2" role="tab" aria-controls="table2" aria-selected="false">Chờ xác nhận</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="table3-tab" data-toggle="tab" href="#table3" role="tab" aria-controls="table3" aria-selected="false">Đã xác nhận</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content mt-3" id="myTabContent">
                                        <!-- Table 1 - Tất cả đơn hàng -->
                                        <div class="tab-pane fade show active" id="table1" role="tabpanel" aria-labelledby="table1-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><input type="checkbox" id="selectAll"></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Số điện thoại</th>
                                                            <th>Trạng thái đơn hàng</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Tính năng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listorderOne as $order) : ?>
                                                            <tr>
                                                                <td><input type="checkbox" class="item1"></td>
                                                                <td>HD0<?= $order['id'] ?></td>
                                                                <td><?= $order['ten_khachhang'] ?></td>
                                                                <td><?= $order['diachi'] ?></td>
                                                                <td><?= $order['sodienthoai'] ?></td>
                                                                <td><span class="text-capitalize"><?= $order['ten_trangthai'] ?></span></td>
                                                                <td><?= $order['tongtien'] ?></td>
                                                                <td>
                                                                    <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-show&id=<?= $order['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>
                                                                    <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-update&id=<?= $order['id'] ?>" class="btn btn-warning"><i class="fa-regular fa-square-check"></i></a>
                                                                    <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-delete&id=<?= $order['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <!-- Các dòng dữ liệu bổ sung ở đây -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Table 2 - Chờ xác nhận -->
                                        <div class="tab-pane fade" id="table2" role="tabpanel" aria-labelledby="table2-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><input type="checkbox" id="selectAll"></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Số điện thoại</th>
                                                            <th>Trạng thái đơn hàng</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Tính năng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listorderOne as $order) : ?>
                                                            <?php if ($order['ten_trangthai'] == 'chưa xác nhận') : ?>
                                                                <tr>
                                                                    <td><input type="checkbox" class="item2"></td>
                                                                    <td>HD0<?= $order['id'] ?></td>
                                                                    <td><?= $order['ten_khachhang'] ?></td>
                                                                    <td><?= $order['diachi'] ?></td>
                                                                    <td><?= $order['sodienthoai'] ?></td>
                                                                    <td><span class="text-capitalize"><?= $order['ten_trangthai'] ?></span></td>
                                                                    <td><?= $order['tongtien'] ?></td>
                                                                    <td>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-show&id=<?= $order['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-update&id=<?= $order['id'] ?>" class="btn btn-warning"><i class="fa-regular fa-square-check"></i></a>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-delete&id=<?= $order['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        <!-- Các dòng dữ liệu bổ sung ở đây -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Table 3 - Đã xác nhận -->
                                        <div class="tab-pane fade" id="table3" role="tabpanel" aria-labelledby="table3-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><input type="checkbox" id="selectAll"></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Số điện thoại</th>
                                                            <th>Trạng thái đơn hàng</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Tính năng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listorderOne as $order) : ?>
                                                            <?php if ($order['ten_trangthai'] == 'xác nhận') : ?>
                                                                <tr>
                                                                    <td><input type="checkbox" class="item3"></td>
                                                                    <td>HD0<?= $order['id'] ?></td>
                                                                    <td><?= $order['ten_khachhang'] ?></td>
                                                                    <td><?= $order['diachi'] ?></td>
                                                                    <td><?= $order['sodienthoai'] ?></td>
                                                                    <td><span class="text-capitalize"><?= $order['ten_trangthai'] ?></span></td>
                                                                    <td><?= $order['tongtien'] ?></td>
                                                                    <td>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-show&id=<?= $order['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-update&id=<?= $order['id'] ?>" class="btn btn-warning"><i class="fa-regular fa-square-check"></i></a>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-delete&id=<?= $order['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        <!-- Các dòng dữ liệu bổ sung ở đây -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Table 4 - Đã thành công -->
                                        <div class="tab-pane fade" id="table4" role="tabpanel" aria-labelledby="table4-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><input type="checkbox" id="selectAll"></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Số điện thoại</th>
                                                            <th>Trạng thái đơn hàng</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Tính năng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listorderOne as $order) : ?>
                                                            <?php if ($order['ten_trangthai'] == 'thành công') : ?>
                                                                <tr>
                                                                    <td><input type="checkbox" class="item4"></td>
                                                                    <td>HD0<?= $order['id'] ?></td>
                                                                    <td><?= $order['ten_khachhang'] ?></td>
                                                                    <td><?= $order['diachi'] ?></td>
                                                                    <td><?= $order['sodienthoai'] ?></td>
                                                                    <td><span class="text-capitalize"><?= $order['ten_trangthai'] ?></span></td>
                                                                    <td><?= $order['tongtien'] ?></td>
                                                                    <td>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-show&id=<?= $order['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-update&id=<?= $order['id'] ?>" class="btn btn-warning"><i class="fa-regular fa-square-check"></i></a>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-delete&id=<?= $order['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        <!-- Các dòng dữ liệu bổ sung ở đây -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <!-- Page Heading -->
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">
                                        Lịch sử mua hàng của <?= $users['ten'] ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content mt-3" id="myTabContent">
                                        <!-- Table 1 - Tất cả đơn hàng -->
                                        <div class="tab-pane fade show active" id="table1" role="tabpanel" aria-labelledby="table1-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><input type="checkbox" id="selectAll"></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Trạng thái đơn hàng</th>
                                                            <th>Tổng tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($listorderhistory as $order) : ?>
                                                            <tr>
                                                                <td><input type="checkbox" class="item1"></td>
                                                                <td>HD0<?= $order['id'] ?></td>
                                                                <td><?= $order['ten_khachhang'] ?></td>
                                                                <td><?= $order['diachi'] ?></td>
                                                                <td><span class="text-capitalize"><?= $order['ten_trangthai'] ?></span></td>
                                                                <td><?= $order['tongtien'] ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <!-- Các dòng dữ liệu bổ sung ở đây -->
                                                    </tbody>
                                                </table>
                                                <!-- <div class="mt-4">
                                <a href="<?= BASE_URL_ADMIN ?>?act=user-show&id=<?= $users['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại</a>
                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>