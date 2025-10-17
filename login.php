<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url("purple-spring-wallpapers_7383_1920x1200.jpg") no-repeat center center fixed;
      background-size: cover;
    }

    .login-container {
      width: 400px;
      margin: 100px auto;
      background: rgba(255, 255, 255, 0.92);
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #6a0dad;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      outline: none;
      transition: 0.3s;
    }

    .form-group input:focus {
      border-color: #6a0dad;
      box-shadow: 0 0 6px rgba(106, 13, 173, 0.3);
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background: #6a0dad;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .submit-btn:hover {
      background: #550a8a;
    }

    .links {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
    }

    .links a {
      color: #6a0dad;
      text-decoration: none;
      margin: 0 10px;
      font-weight: 500;
    }

    .links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>User Login</h2>
  <form method="post" action="menu.php">
    <div class="form-group">
      <input type="text" name="n1" placeholder="Username" required />
    </div>
    <div class="form-group">
      <input type="password" name="n2" placeholder="Password" required />
    </div>
    <button type="submit" class="submit-btn">Login</button>

    <div class="links">
      <a href="forget.php">Forgot Password?</a>
      <a href="signup.php">Create Account</a>
    </div>
  </form>
</div>

</body>
</html>
