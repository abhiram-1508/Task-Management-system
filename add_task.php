<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task_name'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    $conn->query("INSERT INTO tasks (task_name, priority, due_date, status) VALUES ('$task', '$priority', '$due_date', '$status')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f0;
            display: flex;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .sidebar {
            width: 240px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            padding: 30px 20px;
            color: white;
        }
        .sidebar h5 {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            margin: 20px 0;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
        }
        .sidebar a:hover {
            color: #ffd6e0;
        }
        .main-content {
            margin-left: 240px;
            padding: 80px 50px;
            width: 100%;
        }
        .card {
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        h3 {
            font-weight: 600;
        }
        button {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h5>Task Management</h5>
    <a href="dashboard.php">Dashboard</a>
    <a href="add_task.php">Add Task</a>
    <a href="report.php">Reports</a>
    <a href="calendar.php">Calendar</a>
    <a href="settings.php">Settings</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main-content">
    <div class="container">
        <div class="card mx-auto" style="max-width: 500px; background-color: white;">
            <h3 class="text-center text-primary mb-4">🎯 Add New Task</h3>
            <form method="POST">
                <div class="mb-3">
                    <input type="text" name="task_name" class="form-control border-primary" placeholder="📝 Task Name" required>
                </div>

                <div class="mb-3">
                    <select name="priority" class="form-select border-warning">
                        <option value="Low">Low Priority</option>
                        <option value="Medium">Medium Priority</option>
                        <option value="High">High Priority</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="date" name="due_date" class="form-control border-info" required>
                </div>

                <div class="mb-4">
                    <select name="status" class="form-select border-success">
                        <option value="pending">Pending</option>
                        <option value="inprogress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary px-4">➕ Add Task</button>
                    <a href="index.php" class="btn btn-outline-secondary px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
