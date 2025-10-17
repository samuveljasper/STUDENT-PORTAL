<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Delete Record</title>

  <!-- Redirect to search_del.php after 5 seconds -->
  <meta http-equiv="refresh" content="5;url=search_del.php" />

  <style>
    body {
      background: linear-gradient(to right, #fbe9e7, #fff3f0);
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
      box-shadow: 0 4px 15px rgba(255, 69, 58, 0.2);
      text-align: center;
      max-width: 450px;
    }

    .message-box h2 {
      color: #d32f2f;
      margin-bottom: 15px;
    }

    .message-box p {
      font-size: 16px;
      margin-bottom: 20px;
      color: #333;
    }

    .success {
      color: #388e3c;
    }

    .error {
      color: #d32f2f;
    }

    a.button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #f44336;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(244, 67, 54, 0.3);
      transition: background-color 0.3s ease;
    }

    a.button:hover {
      background-color: #c62828;
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
$b = $_POST['n2'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "emp";

$conn = new mysqli($servername, $username, $password, $db);
?>

<div class="message-box">
  <?php
  if ($conn->connect_error) {
    echo "<h2 class='error'>❌ Connection Failed</h2>";
    echo "<p class='error'>".$conn->connect_error."</p>";
  } else {
    $sql = "DELETE FROM mark WHERE roll = $b";
    if ($conn->query($sql) === TRUE) {
      echo "<h2 class='success'>✅ Record Deleted</h2>";
      echo "<p class='success'>The student record has been removed successfully.</p>";
    } else {
      echo "<h2 class='error'>❌ Error</h2>";
      echo "<p class='error'>Failed to delete the record.<br/>" . $conn->error . "</p>";
    }
    $conn->close();
  }
  ?>
  <a class="button" href="search_del.php">← Back to Delete Page</a>
  <div class="note">Redirecting in 5 seconds...</div>
</div>

</body>
</html>
