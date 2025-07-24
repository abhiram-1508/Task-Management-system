<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .btn-dashboard {
            background-color: #6c5ce7;
            border: none;
            padding: 10px 30px;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .btn-dashboard:hover {
            background-color: #5a4fcf;
        }
        .btn-logout {
            background-color: #ff4b81;
            border: none;
            padding: 10px 30px;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
        }
        .btn-logout:hover {
            background-color: #e43f6f;
        }
    </style>
</head>
<body>

    <div class="card">
        <h3>🎉 Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
        <p class="mt-3">You have successfully logged into the Task Management Dashboard.</p>

        <!-- Absolute Link for Dashboard Button -->
        <a href="dashboard.php" class="btn-dashboard">Dashboard</a> <br>

        <!-- Logout Button -->
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

</body>
</html>
