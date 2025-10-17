<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Result</title>
  <meta http-equiv="refresh" content="5;url=login.php" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0d8f6, #f3e9ff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .message-box {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(106, 13, 173, 0.2);
      text-align: center;
      max-width: 400px;
    }

    .message-box h2 {
      color: #6a0dad;
      margin-bottom: 15px;
    }

    .message-box p {
      font-size: 16px;
      color: #444;
      margin-bottom: 20px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #6a0dad;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .button:hover {
      background-color: #4b0784;
    }

    .note {
      margin-top: 10px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

<?php
$a = $_POST['n1'];
$b = $_POST['n2'];
$c = $_POST['n3'];
$d = $_POST['n4'];
$e = $_POST['n5'];
$f = $_POST['n6'];
$g = $_POST['n7'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "emp";

$conn = new mysqli($servername, $username, $password, $db);

// Message output
echo '<div class="message-box">';

$sql = "SELECT * FROM log WHERE uname='$f'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>?? Username Taken</h2>";
    echo "<p>Sorry, the username <b>$f</b> already exists. Please try again.</p>";
} else {
    $sql = "INSERT INTO log (name, age, gen, addr, eid, uname, pwd)
            VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>? Signup Successful</h2>";
        echo "<p>Your account has been created. You will be redirected to the login page.</p>";
    } else {
        echo "<h2>? Error</h2>";
        echo "<p>There was an error while creating your account.<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>

<a href="login.php" class="button">Go to Login Now</a>
<div class="note">You will be redirected in 5 seconds...</div>
</div>
</body>
</html>
