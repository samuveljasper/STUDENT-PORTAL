<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	background: linear-gradient(to right, #d4ebf2, #e9f6fc);      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .signup-container {
      width: 400px;
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 35px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(106, 13, 173, 0.2);
    }

    .signup-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #6a0dad;
    }

    .form-group {
      margin-bottom: 18px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #333;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #bbb;
      border-radius: 8px;
      font-size: 14px;
      box-sizing: border-box;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: #6a0dad;
      outline: none;
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
      transition: 0.3s ease;
    }

    .submit-btn:hover {
      background: #550a8a;
    }

    @media (max-width: 480px) {
      .signup-container {
        width: 90%;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Sign Up</h2>
    <form action="sup.php" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="n1" required />
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="number" name="n2" required />
      </div>
      <div class="form-group">
        <label>Gender</label>
        <input type="text" name="n3" required />
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea name="n4" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label>Email ID</label>
        <input type="email" name="n5" required />
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="n6" required />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="n7" required />
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</body>
</html>
