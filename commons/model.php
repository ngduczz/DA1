<?php

// CRUD Danh sách chi tiết
if (!function_exists('get_str_keys')) {

    function get_str_keys($data)
    {
        return implode(',', array_keys($data));
    }
}

if (!function_exists('get_virual_params')) {

    function get_virual_params($data)
    {
        $keys = array_keys($data);
        $tmp = [];

        foreach ($keys as $key) {
            $tmp[] = ":$key";
        }

        return implode(',', $tmp);
    }
}

if (!function_exists('get_set_params')) {

    function get_set_params($data)
    {
        $keys = array_keys($data);
        $tmp = [];

        foreach ($keys as $key) {
            $tmp[] = "$key = :$key";
        }

        return implode(',', $tmp);
    }
}

// Thêm vào database
if (!function_exists('insert')) {
    function insert($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);
            $virual_params = get_virual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virual_params)";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => $value) {
                $stmt->bindValue(":$fieldName", $value);
            }

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Show ra danh sách
if (!function_exists('listAll')) {
    function listAll($tableName)
    {
        try {

            $sql = "SELECT * FROM $tableName ORDER BY id DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Chi tiết thông tin
if (!function_exists('showOne')) {
    function showOne($tableName, $id)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE id = :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindValue(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Cập nhật thông tin
if (!function_exists('update')) {
    function update($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "
                UPDATE $tableName 
                SET $setParams
                WHERE id = :id 
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => $value) {
                $stmt->bindValue(":$fieldName", $value);
            }

            $stmt->bindValue(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Xóa thông tin database
if (!function_exists('delete')) {
    function delete($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindValue(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
