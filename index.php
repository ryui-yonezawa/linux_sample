<?php
$dsn = 'mysql:dbname=user;host=127.0.0.1;';
$user = 'ryui';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    
    $sql = "select * from user";
    $result = $dbh->query(&sql);
	
} catch (PDOException $e) {
    print "Ú‘±Ž¸”s: " . $e->getMessage() . "\n";
    exit();
}
?>
