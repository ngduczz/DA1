<?php

if (!function_exists('ListshowONEComment')) {
    function ListshowONEComment($tableName, $id)
    {
      try {
        $sql = "SELECT bl.id, 
                           bl.id_sanpham, 
                           sp.ten AS ten_sanpham, 
                           bl.ten, 
                           bl.ngay, 
                           bl.text, 
                           bl.id_taikhoan, 
                           tk.ten AS ten_taikhoan,
                           tk.anh AS anh
                    FROM binhluan bl
                    INNER JOIN sanpham sp ON bl.id_sanpham = sp.id
                    INNER JOIN taikhoan tk ON bl.id_taikhoan = tk.id
                    WHERE bl.id_sanpham = :id
                    ORDER BY bl.id DESC";
  
        // Prepare SQL statement
        $stmt = $GLOBALS['conn']->prepare($sql);
  
        // Bind parameter
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Assuming $id is an integer
  
        // Execute query
        $stmt->execute();
  
        // Fetch all rows as associative array
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
        return $comments; // Return array of comments
      } catch (\Exception $e) {
        debug($e); // Handle exceptions (you can log or handle differently)
        return []; // Return empty array or handle error case as appropriate
      }
    }
  }