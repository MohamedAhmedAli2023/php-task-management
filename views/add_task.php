<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include database connection
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user_id'];

    // Insert the new task into the database
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description, status, user_id) VALUES (?, ?, 'Pending', ?)");
    $stmt->execute([$title, $description, $user_id]);

    header("Location: dashboard.php");
    exit();
}
?>
