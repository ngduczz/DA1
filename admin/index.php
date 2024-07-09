<?php
    session_start();

require '../commons/env.php';
require '../commons/helper.php';
require '../commons/connect.php';
require '../commons/model.php';

require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODELS_ADMIN);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Kiểm tra điều hướng
// authen_check($act);

match ($act) {
    // Admin
    '/' => dashboard(),

    // Authen
    'login' => login(),
    'logout' => logout(),

    // CRUD Danh mục 
    'category' => categoryListAll(),
    'category-create' => categoryCreate(),
    'category-update' => categoryUpdate($_GET['id']),
    'category-delete' => categoryDelete($_GET['id']),

    // CRUD Sản phẩm
    'produc' => producListAll(),
    'produc-create' => producCreate(),
    'produc-detail' => producShowOne($_GET['id']),
    'produc-update' => producUpdate($_GET['id']),
    'produc-delete' => producDelete($_GET['id']),

    // CRUD Tài khoản
    'user' => userListAll(),
    'user-create' => userCreate(),
    'user-detail' => userShowOne($_GET['id']),
    'user-update' => userUpdate($_GET['id']),
    'user-delete' => userDelete($_GET['id']),

    // CRUD Bình luận
    'comment' => commentListAll(),
    'comment-delete' => commentDelete($_GET['id']),

};

require '../commons/disconect.php';