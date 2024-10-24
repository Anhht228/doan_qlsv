<?php
// ket noi voi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "action";

// Tạo kết nối
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: ", $e->getMessage();
    exit;
}
?>
