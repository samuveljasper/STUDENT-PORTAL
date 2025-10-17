<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Marks</title>

<style>
  /* Reset and base styles */
  body, h1, table, th, td, input, a {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  body {
    background: linear-gradient(to right, #d4ebf2, #e9f6fc);
    min-height: 100vh;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  /* Top navigation table */
  table.nav-table {
    width: 100%;
    max-width: 800px;
    border-collapse: collapse;
    margin-bottom: 30px;
    border: 1px solid #3399ff;
    background-color: #3399ff;
  }
  
  table.nav-table td {
    padding: 12px 20px;
  }
  
  table.nav-table a {
    color: white;
    font-weight: 600;
    text-decoration: none;
    font-size: 16px;
  }
  
  table.nav-table a:hover {
    text-decoration: underline;
  }
  
  /* Centered heading */
  h1 {
    color: #007acc;
    margin-bottom: 25px;
    font-size: 28px;
  }
  
  /* Form container */
  form {
    background-color: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(51, 153, 255, 0.2);
    width: 350px;
  }
  
  /* Edit table styles */
  table.edit-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 12px;
  }
  
  table.edit-table td:first-child {
    font-weight: 600;
    color: #333;
    padding-left: 10px;
    width: 40%;
  }
  
  table.edit-table td:last-child {
    padding-right: 10px;
  }
  
  /* Inputs */
  input[type="text"] {
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 1.5px solid #3399ff;
    border-radius: 6px;
    outline: none;
    transition: border-color 0.3s ease;
  }
  
  input[type="text"]:focus {
    border-color: #007acc;
    box-shadow: 0 0 8px rgba(0, 122, 204, 0.5);
  }
  
  input[readonly] {
    background-color: #fffacd; /* light yellow */
    cursor: not-allowed;
  }
  
  /* Submit button */
  input[type="submit"] {
    width: 100%;
    margin-top: 25px;
    padding: 12px 0;
    font-size: 18px;
    font-weight: 700;
    color: white;
    background-color: #3399ff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  input[type="submit"]:hover {
    background-color: #007acc;
  }
  
  .message {
      background-color: #fff3f3;
      border: 1px solid #ff6b6b;
      color: #d9534f;
      padding: 15px 20px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(255, 107, 107, 0.2);
      font-size: 18px;
      margin-bottom: 25px;
    }
	
</style>

</head>

<body>
  
  <table class="nav-table" border="1">
    <tr>
      <td><a href="search_edit.php">Back</a></td>
      <td align="right"><a href="in.php">Home</a></td>
    </tr>
  </table>

  <div align="center">
    <h1>Edit Your Marks</h1>
  </div>

  <?php
  $a = $_POST['p1'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "emp";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM mark WHERE roll='$a'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();
  ?>

  <form action="edit.php" method="post">
    <table class="edit-table" border="0" align="center">
      <tr>
        <td>Name</td>
        <td><input type="text" name="n1" value="<?php echo htmlspecialchars($row["name"]); ?>" required /></td>
      </tr>
      <tr>
        <td>Roll</td>
        <td><input type="text" name="n2" value="<?php echo htmlspecialchars($row["roll"]); ?>" readonly /></td>
      </tr>
      <tr>
        <td>Mal</td>
        <td><input type="text" name="n3" value="<?php echo htmlspecialchars($row["m1"]); ?>" required /></td>
      </tr>
      <tr>
        <td>Eng</td>
        <td><input type="text" name="n4" value="<?php echo htmlspecialchars($row["m2"]); ?>" required /></td>
      </tr>
      <tr>
        <td>Chem</td>
        <td><input type="text" name="n5" value="<?php echo htmlspecialchars($row["m3"]); ?>" required /></td>
      </tr>
      <tr>
        <td>Bio</td>
        <td><input type="text" name="n6" value="<?php echo htmlspecialchars($row["m4"]); ?>" required /></td>
      </tr>
      <tr>
        <td>Mat</td>
        <td><input type="text" name="n7" value="<?php echo htmlspecialchars($row["m5"]); ?>" required /></td>
      </tr>
      <tr>
        <td>Phy</td>
        <td><input type="text" name="n8" value="<?php echo htmlspecialchars($row["m6"]); ?>" required /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="aa" value="Update" /></td>
      </tr>
    </table>
  </form>

  <?php
  }
   else {  
    echo '<div class="message">No such Roll number found.</div>';
    echo '<a href="search_edit.php">? Back</a>';
	header("Refresh:3; url=search_edit.php"); 
	  
  }

  $conn->close();
  ?>

</body>

</html>
