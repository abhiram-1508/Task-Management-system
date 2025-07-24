<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
      font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
      min-height: 100vh;
      margin: 0;
    }
    .form-box {
      max-width: 380px;
      margin: 48px auto;
      background: rgba(255,255,255,0.95);
      padding: 34px 26px 28px 26px;
      border-radius: 20px;
      box-shadow: 0 10px 32px 0 rgba(44, 62, 80, 0.16);
      transition: box-shadow 0.3s, background 0.3s;
      backdrop-filter: blur(2px);
    }
    .form-box h2 {
      text-align: center;
      color: #007aff;
      letter-spacing: 0.5px;
      margin-bottom: 18px;
      font-weight: 700;
    }
    .form-box label {
      font-size: 1.03em;
      color: #444;
      font-weight: 500;
      letter-spacing: 0.1px;
    }
    .form-box input[type="text"],
    .form-box input[type="password"] {
      width: 100%;
      padding: 12px 10px;
      margin: 7px 0 18px 0;
      border: none;
      border-radius: 8px;
      background: #f4f9ff;
      font-size: 1.07em;
      box-shadow: 0 2px 7px 0 rgba(173, 204, 255, 0.14);
      transition: box-shadow 0.2s, border 0.2s;
      outline: none;
    }
    .form-box input:focus {
      border: 1.7px solid #97c9f7;
      box-shadow: 0 2px 10px 0 rgba(0, 122, 255, 0.09);
      background: #edf4fa;
    }
    .form-box button {
      background: linear-gradient(90deg, #007aff 20%, #30cfd0 100%);
      color: #fff;
      padding: 13px 0;
      border: none;
      border-radius: 7px;
      box-shadow: 0 2px 9px 0 rgba(52,144,220,0.11);
      font-weight: 600;
      font-size: 1.09em;
      letter-spacing: 0.1px;
      cursor: pointer;
      transition: background 0.2s, box-shadow 0.2s, transform 0.1s;
      width: 100%;
      margin-bottom: 2px;
    }
    .form-box button:hover {
      background: linear-gradient(90deg, #30cfd0 0%, #007aff 80%);
      box-shadow: 0 4px 20px 0 rgba(25, 72, 255, 0.14);
      transform: translateY(-2px) scale(1.02);
    }
    .form-links {
      margin-top: 18px;
      text-align: center;
      font-size: 1em;
    }
    .form-links a {
      color: #007aff;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.15s;
    }
    .form-links a:hover {
      text-decoration: underline;
      color: #30cfd0;
    }
    @media (max-width: 600px) {
      .form-box {
        margin: 20px 4px;
        padding: 18px 3px 14px 3px;
        max-width: 97vw;
        border-radius: 13px;
      }
      .form-box h2 { font-size: 1.2em; }
      .form-box label { font-size: 1em; }
      .form-box button { font-size: 1em; }
    }
  </style>
</head>
<body>
  <div class="form-box">
    <form method="POST" action="login_process.php">
      <h2>🔐 Login</h2>
      <label for="username">Username</label>
      <input type="text" name="username" required />
      <label for="password">Password</label>
      <input type="password" name="password" required />
      <button type="submit">Login</button>
      <div class="form-links">
        Don’t have an account? <a href="register.php">Register here</a>
      </div>
    </form>
  </div>
</body>
</html>
