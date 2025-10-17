<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }

    .container {
      background: #fff;
      border-radius: 12px;
      padding: 40px;
      width: 380px;
      box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .container h2 {
      margin-bottom: 10px;
      color: #1e3c72;
    }

    .container p {
      margin-bottom: 25px;
      font-size: 14px;
      color: #666;
    }

    .form-group {
      text-align: left;
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: 600;
      font-size: 14px;
      display: block;
      margin-bottom: 6px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
      font-size: 14px;
    }

    .form-group input:focus {
      border-color: #2a5298;
      box-shadow: 0 0 6px rgba(42, 82, 152, 0.3);
    }

    .btn {
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, #1e3c72, #2a5298);
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .back-link {
      display: inline-block;
      margin-top: 15px;
      font-size: 14px;
      color: #2a5298;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  

<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "emp";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tempPassword    = trim($_POST['n1']); // Temporary password
    $newPassword     = trim($_POST['n2']); // New password
    $confirmPassword = trim($_POST['n3']); // Confirm password

    // Basic validation
    if (empty($tempPassword) || empty($newPassword) || empty($confirmPassword)) {
        die("All fields are required!");
    }

    if ($newPassword !== $confirmPassword) {
        die("New Password and Confirm Password do not match!");
    }

    // Optional: hash the new password
    //$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Check if temp password exists
    $stmt = $conn->prepare("SELECT * FROM log WHERE temp = ?");
    $stmt->bind_param("s", $tempPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Temporary password is valid
        $row = $result->fetch_assoc();
        $username = $row['uname']; // Adjust if column name is different
        $email = $row['eid'];      // Adjust if column name is different

        // Update the password and clear temp_code
        $update = $conn->prepare("UPDATE log SET pwd=?, temp=NULL WHERE uname=? AND eid=?");
        $update->bind_param("sss", $newPassword, $username, $email);

        if ($update->execute()) {
            echo "<script>alert('Password updated successfully!'); window.location.href='login.php';</script>";
            unset($_SESSION['temp_code']); // Clear temp code from session
        } else {
            echo "Error updating password: " . $update->error;
        }

        $update->close();
    } else {
        echo "<script>alert('Invalid temporary password!'); window.location.href='forgot.php';</script>";
    }

    $stmt->close();
}

$conn->close();

?>

  <div class="container">
    <h2>Reset your password</h2>
    <p>Enter your temporary password and set a new one.</p>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label>Temporary Password</label>
        <input type="text" name="n1" placeholder="Enter temporary password" required />
      </div>
      <div class="form-group">
        <label>New Password</label>
        <input type="password" name="n2" placeholder="Enter new password" required />
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="n3" placeholder="Confirm new password" required />
      </div>
      <button type="submit" class="btn">Save Password</button>
      <a href="login.php" class="back-link">← Back to Login</a>
    </form>
  </div>

  <script>
    document.getElementById("resetForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const newPass = this.newPassword.value;
      const confirmPass = this.confirmPassword.value;

      if (newPass !== confirmPass) {
        alert("New password and Confirm password do not match!");
        return;
      }

      // You can send AJAX request to backend here
      alert("Your password has been changed ✅");
      this.reset();
    });
  </script>
</body>
</html>
