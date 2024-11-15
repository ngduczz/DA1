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
                                <img class="profile-user-img img-fluid img-circle rounded-circle" src="<?= BASE_URL.$anh ?>" alt="User profile picture" width="150">
                            </div>
                        </div>
                        <h3 class="profile-username text-center"><?= $ten?></h3>
                        <?= $user['trangthai']
                            ? '<p class="text-muted text-center">Admin</p>'
                            : '<p class="text-muted text-center">Member</p>'
                        ?>
                        <!-- /.card-body -->
                    </div>
                    <div class="mt-4">
                        <a href="<?= BASE_URL_ADMIN ?>?act=user" class="btn btn-warning"><i class="fa-solid fa-list mr-1"></i> Danh sách</a>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <div class="card-body">
                                <strong><i class="fa-regular fa-envelope"></i> Email</strong>
                                <p class="text-muted"><?= $email ?></p>
                                <hr>
                                <strong><i class="fa-solid fa-lock"></i> Mật khẩu</strong>
                                <p class="text-muted"><?= $matkhau ?></p>
                                <hr>
                                <strong><i class="fa-solid fa-phone-volume"></i> Số điện thoại</strong>
                                <p class="text-muted"><?= $sodienthoai ?></p>
                                <hr>
                                <strong><i class="fa-solid fa-calendar-days"></i> Ngày sinh</strong>
                                <p class="text-muted"><?= $ngaysinh ?></p>
                                <hr>
                                <strong><i class="fa-solid fa-location-dot"></i> Địa chỉ</strong>
                                <p class="text-muted"><?= $diachi ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>