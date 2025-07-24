<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #ffe6f0;
            display: flex;
            margin: 0;
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
            padding: 50px;
            width: 100%;
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
    <div class="container my-4">
        <h3 class="text-center mb-4">📊 Task Management Report</h3>
        <div class="row text-center mb-5">
            <?php
            $total = $conn->query("SELECT * FROM tasks")->num_rows;
            $completed = $conn->query("SELECT * FROM tasks WHERE status='completed'")->num_rows;
            $inprogress = $conn->query("SELECT * FROM tasks WHERE status='inprogress'")->num_rows;
            $pending = $conn->query("SELECT * FROM tasks WHERE status='pending'")->num_rows;

            $completedPercent = $total > 0 ? round(($completed / $total) * 100) : 0;
            $inprogressPercent = $total > 0 ? round(($inprogress / $total) * 100) : 0;
            $pendingPercent = $total > 0 ? round(($pending / $total) * 100) : 0;
            ?>

            <div class="col-md-3">
                <h6>Total Tasks</h6>
                <h3><?= $total ?></h3>
            </div>
            <div class="col-md-3">
                <h6>Completed</h6>
                <h3><?= $completedPercent ?>%</h3>
            </div>
            <div class="col-md-3">
                <h6>In Progress</h6>
                <h3><?= $inprogressPercent ?>%</h3>
            </div>
            <div class="col-md-3">
                <h6>Pending</h6>
                <h3><?= $pendingPercent ?>%</h3>
            </div>
        </div>

        <canvas id="taskChart" width="400" height="200"></canvas>
    </div>
</div>

<script>
    const ctx = document.getElementById('taskChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Completed', 'In Progress', 'Pending'],
            datasets: [{
                data: [<?= $completed ?>, <?= $inprogress ?>, <?= $pending ?>],
                backgroundColor: ['#27ae60', '#3498db', '#f1c40f']
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Task Status Overview'
                }
            }
        }
    });
</script>

</body>
</html>
