<?php

function categoryListAll()
{
    $title = 'Danh sách danh mục';
    $view = 'category/index';
    $scrips = 'datatable';
    $scrips2 = 'ategory/scrips';
    $style = 'datatable';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function categoryCreate()
{
    $view = 'category/create';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function categoryUpdate()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function categoryDelete()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
