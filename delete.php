<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'ryui';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    
    
    $sql = "insert into user values (:id)";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id);
    &stmt->execute(&parmas)
    
    
    stmt->execute(params);
    
    header('Location: index.php?fg=1')
	
} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=0?err='. $e->getMessage());
    exit();
}
?>



















