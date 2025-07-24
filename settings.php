<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings</title>
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
    </style>
</head>
<body>

<div class="sidebar">
    <h5>Task Management</h5>
    <a href="index.php">Dashboard</a>
    <a href="add_task.php">Add Task</a>
    <a href="report.php">Reports</a>
    <a href="calendar.php">Calendar</a>
    <a href="settings.php">Settings</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main-content">
    <div class="container my-5">
        <h3 class="text-center mb-4">⚙️ Settings</h3>
        <div class="card shadow p-4">
            <h5 class="mb-3">User Preferences</h5>

            <form>
                <div class="mb-3">
                    <label class="form-label">Change Display Name</label>
                    <input type="text" class="form-control" placeholder="Enter new display name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Email</label>
                    <input type="email" class="form-control" placeholder="Enter new email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Theme</label>
                    <select class="form-select">
                        <option>Light (Default)</option>
                        <option>Dark Mode</option>
                        <option>Baby Pink</option>
                        <option>Rainbow</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Notification Preferences</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">Email Notifications</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Task Reminders</label>
                    </div>
                </div>

                <button class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
