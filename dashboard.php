<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Management Dashboard - Sidebar + Rainbow Colors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #ffe6f0;">

<div class="d-flex">
    <!-- Sidebar -->
    <aside style="width: 240px; background: linear-gradient(135deg, #667eea, #764ba2); min-height: 100vh;" class="text-white p-4">
        <h4 class="mb-4 text-center"> Task Manager</h4>
      <ul class="nav flex-column gap-3">
    <li><a href="index.php" class="nav-link text-white fw-bold">Dashboard</a></li>
    <li><a href="add_task.php" class="nav-link text-white fw-bold">+ Add Task</a></li>
    <li><a href="calendar.php" class="nav-link text-white fw-bold">Calendar</a></li>
    <li><a href="report.php" class="nav-link text-white fw-bold">Reports</a></li>
    <li><a href="settings.php" class="nav-link text-white fw-bold">Settings</a></li>
    <li><a href="logout.php" class="nav-link text-white fw-bold">Logout</a></li>

</ul>



    </aside>

    <!-- Main -->
    <main class="p-4 w-100">
        <h2>Dashboard</h2>

        <div class="d-flex gap-3 my-4">
            <div class="p-3 rounded shadow w-25 text-center text-white" style="background-color: #ff4b2b;">
                <h6>TOTAL TASKS</h6>
                <h3><?php echo $conn->query("SELECT * FROM tasks")->num_rows; ?></h3>
            </div>
            <div class="p-3 rounded shadow w-25 text-center text-white" style="background-color: #36d1dc;">
                <h6>COMPLETED</h6>
                <h3><?php echo $conn->query("SELECT * FROM tasks WHERE status='completed'")->num_rows; ?></h3>
            </div>
            <div class="p-3 rounded shadow w-25 text-center text-white" style="background-color: #f7971e;">
                <h6>IN PROGRESS</h6>
                <h3><?php echo $conn->query("SELECT * FROM tasks WHERE status='inprogress'")->num_rows; ?></h3>
            </div>
            <div class="p-3 rounded shadow w-25 text-center text-white" style="background-color: #9b59b6;">
                <h6>PENDING</h6>
                <h3><?php echo $conn->query("SELECT * FROM tasks WHERE status='pending'")->num_rows; ?></h3>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="mb-3">Tasks</h5>
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Task</th>
                            <th>Priority</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
                        while($row = $result->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($row['task_name']) ?></td>
                            <td>
                                <?php if ($row['priority'] == 'High'): ?>
                                    <span class="badge" style="background-color:#e74c3c;">High</span>
                                <?php elseif ($row['priority'] == 'Medium'): ?>
                                    <span class="badge" style="background-color:#f1c40f;">Medium</span>
                                <?php else: ?>
                                    <span class="badge" style="background-color:#2ecc71;">Low</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $row['due_date'] ?></td>
                            <td>
                                <?php if ($row['status'] == 'completed'): ?>
                                    <span class="badge" style="background-color:#27ae60;">Completed</span>
                                <?php elseif ($row['status'] == 'inprogress'): ?>
                                    <span class="badge" style="background-color:#2980b9;">In Progress</span>
                                <?php else: ?>
                                    <span class="badge" style="background-color:#f39c12;">Pending</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="edit_task.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete_task.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

</body>
</html>
