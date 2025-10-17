<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start(); // Start the session at the top

// Get form data
$a = $_POST['n1']; // username
$b = $_POST['n2']; // password

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "emp";

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM log WHERE uname=? AND pwd=?");
$stmt->bind_param("ss", $a, $b);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login successful
    $row = $result->fetch_assoc();

    // Create session variables
    $_SESSION['username'] = $row['uname'];
    $_SESSION['email'] = $row['eid']; // if you have email column
    $_SESSION['loggedin'] = true;

    // Redirect to dashboard
    header("Location: in.php");
    exit();
} else {
    // Login failed
    echo "Sorry, username or password is incorrect.<br>";
    echo "You will be redirected in 5 seconds...";
    header("Refresh:5; url=login.php");
}

$stmt->close();
$conn->close();
?>


</body>
</html>
