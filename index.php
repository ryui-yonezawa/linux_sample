<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'ryui';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    
    $sql = "select * from user";
    $result = $dbh->query(&sql);
	
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>



















