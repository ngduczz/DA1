<?php

function commentListAll()
{
    $title = 'Danh sách bình luận';
    $view = 'comment/index';
    $scrips = 'datatable';
    $scrips2 = 'comment/scrips';
    $style = 'datatable';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function commentDelete()
{
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
