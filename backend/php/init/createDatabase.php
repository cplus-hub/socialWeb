<?php
require ("./../lib/lib.php");
try {
    $db = new db;
    $conn = $db->connection();
    
    // 檢查資料庫是否存在
    $sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['socialWeb']);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        echo "資料庫已存在，不需要建立";
        exit;
    } else {
        // 建立資料庫
        $createDbSql = "CREATE DATABASE `socialWeb` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
        $conn->exec($createDbSql);
        
        echo "資料庫創建成功";
    }
} catch (Exception $e) {
    throw ("Cannot Connect To Database");
}
?>