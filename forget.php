<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #366bceff, #521e8dff);
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

    /* Temporary Code Box */
    .temp-code {
      margin-top: 25px;
      text-align: left;
    }

    .temp-code label {
      font-weight: 600;
      font-size: 14px;
      display: block;
      margin-bottom: 6px;
    }

    .temp-code input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
      font-size: 14px;
    }

    .temp-code input:focus {
      border-color: #1e3c72;
      box-shadow: 0 0 6px rgba(30, 60, 114, 0.3);
    }
  </style>
</head>
<body>
    <?php

$tempCode="";
// Initialize variables
$username = $email = "";
$usernameErr = $emailErr = $tempCode = "";
// Database connection
$conn = new mysqli("localhost", "root", "", "emp");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = htmlspecialchars(trim($_POST["username"]));
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // If no errors, check database
    if (empty($usernameErr) && empty($emailErr)) {
         $stmt = $conn->prepare("SELECT * FROM log WHERE uname = ? AND eid = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Generate temporary code
            $tempCode = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 6);
              
            // Update temp_code in database
           $update = $conn->prepare("UPDATE log SET temp=? WHERE uname=? AND eid=?");
if(!$update) {
    die("Prepare failed: " . $conn->error);
}
$update->bind_param("sss", $tempCode, $username, $email);
$update->execute();
if($update->error){
    die("Execute failed: " . $update->error);
}
$update->close();

            $_SESSION['temp_code'] = $tempCode;
        } else {
            echo "<script>alert('Invalid Username or Email!');</script>";
        }

        $stmt->close();
    }
}

$conn->close();
?>

  <div class="container">
    <h2>Forgot your password?</h2>
    <p>Enter your username and email to receive a password reset link.</p>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" required />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="e.g. user@example.com" required />
      </div>
      <button type="submit" class="btn">Send Temporary Password</button>
      <a href="login.php" class="back-link">← Back to Login</a>

      <!-- Temporary Code Box -->
         <div class="temp-code">
        <label>Your Temporary Code</label>
        <input type="text" id="tempCode" value="<?php echo $tempCode;?> " readonly />
      </div>
            <a href="forget1.php" class="back-link">change Password</a>

    </form>
  </div>

</body>
</html>
