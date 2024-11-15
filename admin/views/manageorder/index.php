<head>
    <style>
        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to initialize table behavior
            function initializeTable(tableId, itemClass) {
                const selectAllCheckbox = document.querySelector(`#${tableId} #selectAll`);
                const itemCheckboxes = document.querySelectorAll(`#${tableId} .${itemClass}`);

                function updateHeaderCheckbox() {
                    const allChecked = Array.from(itemCheckboxes).every(function(itemCheckbox) {
                        return itemCheckbox.checked;
                    });

                    selectAllCheckbox.checked = allChecked;
                }

                selectAllCheckbox.addEventListener('change', function() {
                    itemCheckboxes.forEach(function(checkbox) {
                        checkbox.checked = selectAllCheckbox.checked;
                    });
                });

                itemCheckboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        updateHeaderCheckbox();
                    });
                });
            }

            // Initialize each table
            initializeTable('dataTable1', 'item1');
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <!-- Page Heading -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">
                    Danh Sách Đơn Hàng
                </h3>
            </div>
            <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['message'])): ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['message']; unset($_SESSION['message']); ?>
                        </div>
                    <?php endif; ?>
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="table1-tab" data-toggle="tab" href="#table1" role="tab" aria-controls="table1" aria-selected="true">Tất cả đơn hàng</a>
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
                                    <?php foreach ($manageorder as $order) : ?>
                                        <tr>
                                            <td><input type="checkbox" class="item1"></td>
                                            <td>HD0<?= $order['id'] ?></td>
                                            <td><?= $order['ten_khachhang'] ?></td>
                                            <td><?= $order['diachi'] ?></td>
                                            <td><?= $order['sodienthoai'] ?></td>
                                            <td><span class="text-capitalize"><?= $order['ten_trangthai'] ?></span></td>
                                            <td><?= number_format($order['tongtien']) ?></td>
                                            <td>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-show&id=<?= $order['id'] ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-xuly&id=<?= $order['id'] ?>" class="btn btn-success"><i class="fa-regular fa-square-check"></i></a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-update&id=<?= $order['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=manage-order-delete&id=<?= $order['id'] ?>" class="btn btn-primary" onclick="return confirm('Có muốn xóa không ?')"><i class="fa-regular fa-trash-can"></i></a>
                                            </td>
                                        </tr>
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

</body>