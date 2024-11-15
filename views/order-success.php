<style>
    .container {
        background-color: #fff;
        padding: 5em;
        border-radius: 10px;
        text-align: center;
    }

    .container h1 {
        color: #4CAF50;
    }

    .container p {
        font-size: 18px;
        color: #333;
    }

    .container .btn {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>
<div class="container">
    <h1>Đặt hàng thành công!</h1>
    <p>Cảm ơn bạn đã mua hàng. Đơn hàng của bạn đang được xử lý.</p>
    <a href="<?= BASE_URL?>?act=history-order&id=<?=  $_SESSION['user']['id'] ?>" class="btn">Kiểm tra đơn hàng</a>
</div>