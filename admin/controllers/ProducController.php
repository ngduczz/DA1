<?php

function producListAll()
{
    $title = 'Danh sách sản phẩm';
    $view = 'produc/index';
    $scrips = 'datatable';
    $scrips2 = 'produc/scrips';
    $style = 'datatable';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function producCreate()
{
    $view = 'produc/create';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function producShowOne()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function producUpdate()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function producDelete()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
