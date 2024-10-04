<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include database connection
include('../includes/db.php');

// Fetch tasks for the logged-in user
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Welcome to Your Dashboard</h2>
        <p class="text-center"><a href="logout.php" class="btn btn-danger">Logout</a></p>

        <h3>Your Tasks</h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($tasks)): ?>
                    <tr>
                        <td colspan="3" class="text-center">No tasks available</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($task['title']); ?></td>
                            <td><?php echo htmlspecialchars($task['description']); ?></td>
                            <td><?php echo htmlspecialchars($task['status']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <h3>Add a New Task</h3>
        <form method="POST" action="add_task.php">
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Task Title" required>
            </div>
            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Task Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
