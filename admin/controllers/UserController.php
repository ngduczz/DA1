<?php

function userListAll()
{
    $title = 'Danh sach User';
    $view = 'users/index';
    $scrips = 'datatable';
    $scrips2 = 'users/scrips';
    $style = 'datatable';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userCreate()
{
    $view = 'users/create';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userShowOne()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userUpdate()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userDelete()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
