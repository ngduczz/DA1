<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">
                Chi Tiết Sản Phẩm
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center;">
                            <th>Ảnh</th>
                            <th>Thông tin sản phẩm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-images" style="text-align: center;" width="50%">
                                <div class="row px-xl-12">
                                    <div class="col-lg-12 pb-5">
                                        <h4>Ảnh sản phẩm</h4>
                                        <div class="thumbnail-container">
                                            <img src="<?= BASE_URL . $pro['anh_chinh'] ?> " alt="">
                                        </div>
                                    </div>
                                    <div class="container mt-4">
                                        <h4>Thư viện ảnh</h4>
                                        <div class="row">
                                            <!-- Dynamically generate image items -->
                                            <?php if (!empty($pro['anh_all'])) : ?>
                                                <?php $anhPaths = explode(',', $pro['anh_all']); ?>
                                                <?php foreach ($anhPaths as $path) : ?>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                                        <div class="card">
                                                            <img src="<?= BASE_URL . '/' . $path ?>" alt="Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-info">
                                <div class="product-details">
                                    <h1 class="product-title">Tên sản phẩm: <?= htmlspecialchars($pro['ten']) ?></h1>
                                    <h2 class="product-id">Mã: #<?= htmlspecialchars($pro['id_sanpham']) ?></h2>
                                    <h3 class="product-category">Loại sản phẩm: <?= htmlspecialchars($pro['ten_danhmuc']) ?></h3>
                                    <h3 class="product-quantity">Số lượng: <?= htmlspecialchars($pro['soluong']) ?></h3>
                                    <h3 class="product-price">Giá: <?= htmlspecialchars(number_format($pro['gia'], 0, ',', ',')) ?> VNĐ</h3>
                                    <p class="product-description">Mô tả ngắn: <?= htmlspecialchars($pro['mota_ngan']) ?></p>
                                    <p class="product-description">Mô tả: <?= htmlspecialchars($pro['mota']) ?></p>

                                    <?php if (!empty($pro['variants'])) : ?>
                                        <h3 class="product-variants-title">Các thuộc tính:</h3>
                                        <?php foreach ($pro['variants'] as $variantName => $variantValues) : ?>
                                            <div class="variant-group">
                                                <strong class="item-variant-name"><?= htmlspecialchars($variantName) ?></strong>
                                                <ul class="list-variants ">
                                                    <?php foreach ($variantValues as $index => $variantValue) : ?>
                                                        <li class="item-variant">
                                                            <a data-index="<?= $index ?>" title="<?= htmlspecialchars($variantName) ?>" class="text-decoration-none button__change-color is-flex is-align-items-center">
                                                                <!-- <img src="URL_TO_YOUR_IMAGE" width="50" height="50" alt="<?= htmlspecialchars($pro['ten']) ?>-<?= htmlspecialchars($variantName) ?>" loading="lazy"> -->
                                                                <div class="is-flex is-flex-direction-column">
                                                                    <span><?= htmlspecialchars($variantValue) ?></span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered comment-table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center;">
                            <th>Người Bình Luận</th>
                            <th>Thời gian và ngày</th>
                            <th>Nội dung</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($commentshowone as $item) : ?>
                            <tr>
                                <td><?= htmlspecialchars($item['id_sanpham']) ?></td>
                                // Kiểm tra id thì vẫn in ra id sản phẩm con mẹ
                                <td><?= htmlspecialchars($item['ten']) ?></td>
                                <td><?= htmlspecialchars($item['ngay']) ?></td>
                                <td><?= htmlspecialchars($item['text']) ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=hide-comment&id=<?= $item['id'] ?>" class="btn btn-info">
                                        <i class="fa-solid fa-eye-slash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="<?= BASE_URL_ADMIN ?>?act=produc" class="btn btn-primary">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Quay lại
                </a>
            </div>
        </div>
    </div>
</div>