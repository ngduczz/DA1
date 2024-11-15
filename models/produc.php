<?php
if (!function_exists('oneForProLiOne')) {
    function oneForProLiOne($id)
    {
        try {
            $sql = "
                SELECT 
                    sanpham.id,
                    sanpham.ten,
                    sanpham.gia,
                    sanpham.gia_sale,
                    sanpham.soluong,
                    sanpham.mota,
                    sanpham.mota_ngan,
                    sanpham.id_danhmuc,
                    sanpham.id_hinhanh_chinh,
                    sanpham.anh_chinh,
                    sanpham.xuatban,
                    danhmuc.ten_danhmuc,
                    danhmuc.anh_danhmuc,
                    GROUP_CONCAT(DISTINCT anhsp.ten_anh ORDER BY anhsp.id ASC SEPARATOR ',') AS anh_all,
                    GROUP_CONCAT(DISTINCT CONCAT(thuoctinh.ten_thuoctinh, ': ', bien_the.value) ORDER BY thuoctinh.id ASC SEPARATOR ', ') AS thuoctinh_all
                FROM 
                    sanpham
                INNER JOIN 
                    danhmuc ON sanpham.id_danhmuc = danhmuc.id
                LEFT JOIN 
                    anhsp ON sanpham.id = anhsp.id_sanpham
                LEFT JOIN 
                    sanpham_thuoctinh ON sanpham.id = sanpham_thuoctinh.id_sanpham
                LEFT JOIN 
                    thuoctinh ON sanpham_thuoctinh.id_thuoctinh = thuoctinh.id
                LEFT JOIN 
                    bien_the ON sanpham_thuoctinh.id_thuoctinh = bien_the.id_thuoctinh
                WHERE
                    sanpham.id = :id
                GROUP BY 
                    sanpham.id
            ";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Chuyển đổi chuỗi thuoctinh_all thành mảng variants
            if ($result && isset($result['thuoctinh_all'])) {
                $thuoctinh_all = explode(', ', $result['thuoctinh_all']);
                $result['variants'] = [];
                foreach ($thuoctinh_all as $thuoctinh) {
                    $parts = explode(': ', $thuoctinh);
                    if (count($parts) === 2) {
                        $result['variants'][$parts[0]][] = $parts[1]; // Group by attribute name
                    }
                }
            } else {
                $result['variants'] = [];
            }

            return $result;
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}