<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Record</title>
<style>
  body {
    background: linear-gradient(to right, #d4ebf2, #e9f6fc);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 20px;
  }

  .container {
    background: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(51, 153, 255, 0.2);
    max-width: 400px;
    text-align: center;
  }

  .message {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .success {
    color: #2e7d32;
    font-weight: 600;
  }

  .error {
    color: #c62828;
    font-weight: 700;
  }

  .redirect-info {
    font-size: 14px;
    color: #555;
  }

  a.back-btn {
    display: inline-block;
    margin-top: 25px;
    text-decoration: none;
    background-color: #3399ff;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  a.back-btn:hover {
    background-color: #007acc;
  }
</style>
</head>

<body>
<div class="container">
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

// Check connection
if ($conn->connect_error) {
    echo '<p class="message error">Connection failed: ' . $conn->connect_error . '</p>';
    exit();
}

$sql = "UPDATE mark SET name='$a', m1=$c, m2=$d, m3=$e, m4=$f, m5=$g, m6=$h WHERE roll=$b";

if ($conn->query($sql) === TRUE) {
    echo '<p class="message success">Record updated successfully.</p>';
} else {
    echo '<p class="message error">Error updating record: ' . $conn->error . '</p>';
}

$conn->close();

// Redirect after 5 seconds
header("Refresh:5; url=search_edit.php");
echo '<p class="redirect-info">You will be redirected in 5 seconds...</p>';
?>

<a href="search_edit.php" class="back-btn">Back</a>
</div>
</body>
</html>
