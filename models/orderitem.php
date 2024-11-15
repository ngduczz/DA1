<?php


function deleteCartItemByCartID($cartId, $productId)
{
    try {
        $sql = "DELETE FROM giohang_item WHERE id_giohang = :id_giohang AND id_sanpham = :id_sanpham";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindValue(":id_giohang", $cartId, PDO::PARAM_INT); // Bind giá trị $cartId
        $stmt->bindValue(":id_sanpham", $productId, PDO::PARAM_INT); // Bind giá trị $productId

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e); // Để debug lỗi khi có ngoại lệ xảy ra
    }
}



