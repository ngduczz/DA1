<?php 

if (!function_exists('getUserClientByEmailAndPassword')) {
    function getUserClientByEmailAndPassword($email, $matkhau)
    {
        try {
            $sql = "SELECT * FROM taikhoan WHERE email = :email AND matkhau = :pmatkhauAND type = 0 LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":matkhau", $matkhau);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('checkUniEmail')) {
    function checkUniEmail($tableName, $email)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindValue(":email", $email);

            $stmt->execute();


            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}