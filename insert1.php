<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Insert Result</title>

  <!-- Redirect to insert.php after 5 seconds -->
  <meta http-equiv="refresh" content="5;url=insert.php" />

  <style>
    body {
      background: linear-gradient(to right, #d4ebf2, #e9f6fc);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
    }

    .message-box {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
      text-align: center;
      max-width: 400px;
    }

    .message-box h2 {
      color: #007acc;
      margin-bottom: 15px;
    }

    .message-box p {
      font-size: 16px;
      margin-bottom: 20px;
      color: #333;
    }

    a.button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3399ff;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(51, 153, 255, 0.3);
      transition: background-color 0.3s ease;
    }

    a.button:hover {
      background-color: #007acc;
    }

    .note {
      margin-top: 10px;
      font-size: 14px;
      color: #666;
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
$h = $_POST['n8'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "emp";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// SQL insert
$sql = "INSERT INTO mark (name, roll, m1, m2, m3, m4, m5, m6) 
        VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";

?>

<div class="message-box">
  <?php
  if ($conn->query($sql) === TRUE) {
    echo "<h2>✅ Record Inserted</h2>";
    echo "<p>New student record added successfully.</p>";
  } else {
    echo "<h2>❌ Error</h2>";
    echo "<p>There was an issue inserting the record.<br/>" . $conn->error . "</p>";
  }
  $conn->close();
  ?>
  <a class="button" href="insert.php">← Back to Insert Page</a>
  <div class="note">Redirecting in 5 seconds...</div>
</div>

</body>
</html>
