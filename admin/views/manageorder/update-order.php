<div class="container-fluid mt-5 update-order-admin">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Cập nhật đơn hàng
                </div>
                <div class="card-body">
                    <!-- Hiển thị thông báo -->
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error'];
                            unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['message'])): ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['message'];
                            unset($_SESSION['message']); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Tên:</h5>
                                <h6><?= isset($manageorderShowOne['ten_khachhang']) ? $manageorderShowOne['ten_khachhang'] : '' ?></h6>
                            </div>
                            <div class="col-md-6">
                                <h5>Thời gian đặt hàng:</h5>
                                <input type="datetime-local" value="<?= isset($manageorderShowOne['ngaydathang']) ? date('Y-m-d\TH:i', strtotime($manageorderShowOne['ngaydathang'])) : '' ?>" name="ngaydathang" class="form-control border-0 w-100 h-50 input-order">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Trạng thái đơn hàng:</h5>
                                <select class="form-control border-0" name="id_trangthai" id="trang_thai_don_hang">
                                    <?php foreach ($updateOrderstatus as $status) : ?>
                                        <option value="<?= $status['id'] ?>" <?= ($status['id'] == $manageorderShowOne['id_trangthai']) ? 'selected' : '' ?>>
                                            <?= $status['ten_trangthai'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h5>Phương thức thanh toán:</h5>
                                <select class="form-control border-0" name="id_thanhtoan" id="phuong_thuc_thanh_toan">
                                    <?php foreach ($updateOrderpayment as $method) : ?>
                                        <option value="<?= $method['id'] ?>" <?= ($method['id'] == $manageorderShowOne['id_thanhtoan']) ? 'selected' : '' ?>>
                                            <?= $method['phuongthuc'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Trạng thái đơn hàng:</h5>
                                <input type="text" name="diachi" value="<?= isset($manageorderShowOne['diachi']) ? $manageorderShowOne['diachi'] : '' ?>" class="form-control border-0 w-100 h-50 input-order">
                               
                            </div>
                            <div class="col-md-6">
                                <h5>Số điện thoại:</h5>
                                <input type="text" name="diachi" value="<?= $manageorderShowOne['sodienthoai'] ?>" class="form-control border-0 w-100 h-50 input-order">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Danh sách sản phẩm:</h5>
                                <ul class="list-group">
                                    <?php foreach ($ListorderShowOneSP as $item) : ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <strong><?= $item['ten'] ?></strong>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <span class="badge badge-primary"><?= $item['soluong'] ?></span>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <?= number_format($item['soluong'] * $item['gia'], 0, ',', '.') ?> VNĐ
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 text-right">
                                <?php
                                $total = 0;
                                foreach ($ListorderShowOneSP as $item) {
                                    $total += $item['soluong'] * $item['gia'];
                                }
                                ?>
                                <h4>Tổng tiền: <?= number_format($total, 0, ',', '.') ?> VNĐ</h4>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="<?= BASE_URL_ADMIN ?>?act=manage-order" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại</a>
                            <button type="submit" class="btn btn-warning">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>