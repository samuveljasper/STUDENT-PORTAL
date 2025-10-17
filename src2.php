<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
$a=$_POST['n1'];
$servername = "localhost";
$username = "root";
$password = "";
$db="emp";
$conn = new mysqli($servername, $username, $password,$db);

$sql = "select * from mark where  roll='$a';
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  header('location:in.php');
}

else
{
echo "sorry password or user name is incorrect";
header("Refresh:5; url=login.php");
echo "<br>You will be redirected in 5 seconds...";

}
?>


<body>
</body>
</html>
