<?php

function  updateQuantitybyCartIDAndProductID($cartId,$productID,$quantity){
    try {
        $sql = "
            UPDATE giohang_item 
            SET soluong = :soluong
            WHERE 
                  id_giohang = :id_giohang
            AND
                  id_sanpham = :id_sanpham
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->bindValue(":soluong", $quantity);
        $stmt->bindValue(":id_giohang", $cartId);
        $stmt->bindValue(":id_sanpham", $productID);



        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}
function deleteCartItemByCartIDAndProductID($cartId,$productID){
    try {
        $sql = "
            DELETE FROM giohang_item 
            WHERE 
                  id_giohang = :id_giohang
            AND
                  id_sanpham = :id_sanpham
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindValue(":id_giohang", $cartId);
        $stmt->bindValue(":id_sanpham", $productID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}
