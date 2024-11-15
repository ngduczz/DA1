<?php
function getCartID($id_taikhoan)
{;
    $cart = getCartByUserID($id_taikhoan);
    if (empty($cart)) {
        return insert_get_last_id('giohang', ['id_taikhoan' => $id_taikhoan]);
    }
    return $cart['id'];
}
function getCartByUserID($id_taikhoan)
{
    try {

        $sql = "SELECT * FROM giohang WHERE id_taikhoan = :id_taikhoan LIMIT 1";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindValue(":id_taikhoan", $id_taikhoan);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}
