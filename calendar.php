<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
                margin-bottom: 20px;
            }
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
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
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="mb-4">📅 Task Calendar</h3>
            <div class="text-end">
                <div id="currentDate" class="fw-bold"></div>
                <div id="currentTime" class="fw-bold"></div>
            </div>
        </div>

        <div class="card shadow p-4">
            <h5 class="mb-3">Calendar</h5>
            <div class="d-flex flex-wrap justify-content-between" style="max-width: 600px; margin:auto;">
                <?php
                $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                foreach ($days as $day):
                ?>
                <div class="p-2 text-center fw-bold" style="width: 14%;"><?= $day ?></div>
                <?php endforeach; ?>

                <?php for ($i = 1; $i <= 30; $i++): ?>
                <div class="border text-center p-2 m-1 rounded" style="width: 14%; background-color: #fff;">
                    <?= $i ?>
                </div>
                <?php endfor; ?>
            </div>
            <p class="text-center text-muted mt-3">This is a static calendar. Dynamic features can be added later.</p>
        </div>
    </div>
</div>

<script>
    function updateDateTime() {
        const now = new Date();
        const date = now.toLocaleDateString();
        const time = now.toLocaleTimeString();
        document.getElementById('currentDate').textContent = `📆 ${date}`;
        document.getElementById('currentTime').textContent = `⏰ ${time}`;
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>

</body>
</html>
