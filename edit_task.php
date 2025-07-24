<?php
include 'db.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task_name'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    $conn->query("UPDATE tasks SET task_name='$task', priority='$priority', due_date='$due_date', status='$status' WHERE id=$id");
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">
    <h3>Edit Task</h3>
    <form method="POST">
        <input type="text" name="task_name" class="form-control mb-3" value="<?= htmlspecialchars($row['task_name']) ?>" required>
        <select name="priority" class="form-select mb-3">
            <option value="Low" <?= $row['priority']=='Low' ? 'selected' : '' ?>>Low</option>
            <option value="Medium" <?= $row['priority']=='Medium' ? 'selected' : '' ?>>Medium</option>
            <option value="High" <?= $row['priority']=='High' ? 'selected' : '' ?>>High</option>
        </select>
        <input type="date" name="due_date" class="form-control mb-3" value="<?= htmlspecialchars($row['due_date']) ?>" required>
        <select name="status" class="form-select mb-3">
            <option value="pending" <?= $row['status']=='pending' ? 'selected' : '' ?>>Pending</option>
            <option value="inprogress" <?= $row['status']=='inprogress' ? 'selected' : '' ?>>In Progress</option>
            <option value="completed" <?= $row['status']=='completed' ? 'selected' : '' ?>>Completed</option>
        </select>
        <button class="btn btn-primary">Update Task</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>