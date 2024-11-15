<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">
                Thêm đơn hàng
            </h3>
        </div>
        <div class="card-body">
            <form action="process_order.php" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên khách hàng: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="ten" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                </div>
                                <input type="text" class="form-control" name="dia_chi" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-phone-volume"></i></span>
                                </div>
                                <input type="text" class="form-control" name="so_dien_thoai" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tổng tiền:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-audio-description"></i></span>
                                </div>
                                <input type="text" class="form-control" name="tong_tien" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Phương thức thanh toán:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-money-check-dollar"></i></span>
                                </div>
                                <select class="form-control" name="phuong_thuc_thanh_toan" id="phuong_thuc_thanh_toan">
                                    <?php foreach ($paymentMethods as $item) : ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['phuongthuc'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Trạng thái đơn hàng:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-tasks"></i></span>
                                </div>
                                <select class="form-control" name="trang_thai_don_hang" id="trang_thai_don_hang">
                                    <?php foreach ($typeMethods as $item) : ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['ten_trangthai'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="<?= BASE_URL_ADMIN ?>?act=manage-order" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại</a>
                    <button type="submit" class="btn btn-warning">Thêm mới</button>
                </div>

            </form>
        </div>
    </div>
</div>