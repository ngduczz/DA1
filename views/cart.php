<?php
$shipping = 10 * 23000; // Chi phí vận chuyển giả định $10 và tỷ giá 1 USD = 23,000 VND
$subtotal = caculator_order_total(); // Tổng tiền trước khi cộng phí vận chuyển

// Nếu không có subtotal, đặt giá của total bằng 0
if ($subtotal > 0) {
    $total = $subtotal + $shipping; // Tổng tiền cần thanh toán
    $shipping_display = number_format($shipping, 0, ',', ',') . ' VNĐ';
} else {
    $total = 0;
    $shipping_display = '0 VNĐ';
}
?>

<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php if (!empty($_SESSION['cart'])) : ?>
                        <?php foreach ($_SESSION['cart'] as $item) : ?>
                            <tr>
                                <td class="align-middle"><img src="<?= BASE_URL . $item['anh_chinh'] ?>" alt="" style="width: 200px; height: 150px;"></td>
                                <td class="align-middle"><?= $item['ten'] ?></td>
                                <td class="align-middle"><?= number_format($item['gia_sale'] ?: $item['gia'], 0, ',', ',') ?> VNĐ</td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <a href="<?= BASE_URL . '?act=cart-dec&productID=' . $item['id'] ?>">
                                                <button class="btn btn-sm btn-primary btn-minus">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?= $item['soluong'] ?>">
                                        <div class="input-group-btn">
                                            <a href="<?= BASE_URL . '?act=cart-inc&productID=' . $item['id'] ?>">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
</div>
                                </td>
                                <td class="align-middle"><?= number_format($item['soluong'] * ($item['gia_sale'] ?: $item['gia']), 0, ',', ',') ?> VNĐ</td>
                                <td class="align-middle"><a href="<?= BASE_URL . '?act=cart-del&productID=' . $item['id'] ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Voucher">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium"><?= $subtotal > 0 ? number_format($subtotal, 0, ',', ',') . ' VNĐ' : '0 VNĐ' ?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium"><?= $shipping_display ?></h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold"><?= number_format($total, 0, ',', ',') ?> VNĐ</h5> <!-- Tổng tiền đã bao gồm phí vận chuyển -->
                    </div>
                    <button onclick="validateCheckout()" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function validateCheckout() {
    var total = <?= $total ?>;
    if (total <= 0) {
        alert('Không có đơn hàng nào phải thanh toán');
        window.location.href = '<?= BASE_URL ?>';
    } else {
        window.location.href = '<?= BASE_URL ?>?act=order-checkout';
    }
}
</script>