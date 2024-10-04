<?php
// Database configuration
$host = 'localhost'; 
$db_name = 'task_management'; 
$username = 'root'; 
$password = ''; 

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
