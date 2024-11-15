<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Chi tiết đơn hàng
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Tên:</h5>
                            <h6><?= isset($manageorderShowOne['ten_khachhang']) ? $manageorderShowOne['ten_khachhang'] : '' ?></h6>
                        </div>
                        <div class="col-md-6">
                            <h5>Thời gian đặt hàng:</h5>
                            <h6><?= isset($manageorderShowOne['ngaydathang']) ? $manageorderShowOne['ngaydathang'] : '' ?></h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Trạng thái đơn hàng:</h5>
                            <h6><?= isset($manageorderShowOne['ten_trangthai']) ? $manageorderShowOne['ten_trangthai'] : '' ?></h6>
                        </div>
                        <div class="col-md-6">
                            <h5>Phương thức thanh toán:</h5>
                            <h6><?= isset($manageorderShowOne['phuongthuc']) ? $manageorderShowOne['phuongthuc'] : '' ?></h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Địa chỉ đặt hàng:</h5>
                            <h6><?= isset($manageorderShowOne['diachi']) ? $manageorderShowOne['diachi'] : '' ?></h6>
                        </div>
                        <div class="col-md-6">
                            <h5>Số điện thoại: </h5>
                            <input type="text" name="sodienthoai" value="<?= $manageorderShowOne['sodienthoai'] ?>" class="form-control border-0 w-100 h-50 input-order">
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
                    <div class="card-footer text-muted text-center">
                        <a href="<?= BASE_URL_ADMIN ?>?act=manage-order" class="btn btn-primary">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>