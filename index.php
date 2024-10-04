<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css"> <!-- Optional custom CSS -->
    <title>Task Management System</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Task Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="views/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/dashboard.php">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to the Task Management System</h1>
            <p class="lead">Manage your tasks effectively and boost your productivity.</p>
        </div>
    </header>

    <div class="container mt-5">
        <h2 class="text-center">What You Can Do</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Task Creation</h5>
                        <p class="card-text">Easily create and manage your tasks with a user-friendly interface.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Task Updates</h5>
                        <p class="card-text">Update task status, edit details, or delete tasks effortlessly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Task Filtering</h5>
                        <p class="card-text">Filter tasks based on status to view completed, in-progress, or pending tasks.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h2 class="text-center">Future Features</h2>
            <ul class="list-group">
                <li class="list-group-item">✔️ Enhanced User Profiles</li>
                <li class="list-group-item">✔️ Team Collaboration Tools</li>
                <li class="list-group-item">✔️ Notifications and Reminders</li>
                <li class="list-group-item">✔️ Advanced Analytics Dashboard</li>
            </ul>
        </div>
    </div>

    <footer class="bg-light text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2024 Task Management System. All rights reserved.</p>
            <p class="mb-0">Follow us on <a href="#" class="text-primary">Twitter</a>, <a href="#" class="text-primary">Facebook</a>, <a href="#" class="text-primary">Instagram</a>.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
