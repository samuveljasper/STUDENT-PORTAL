<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Search Result</title>
  <style>
    body {
      background: linear-gradient(to right, #d4ebf2, #e9f6fc);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      margin: 0;
      padding: 40px 20px;
      display: flex;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
    }

    h2 {
      color: #007acc;
      margin-bottom: 20px;
      font-weight: 700;
      text-align: center;
    }

    table {
      width: 320px;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
      border-radius: 12px;
      overflow: hidden;
      font-size: 16px;
      margin-bottom: 25px;
    }

    td,
    th {
      padding: 12px 20px;
      border-bottom: 1px solid #e0e6ef;
      text-align: left;
    }

    tr:last-child td,
    tr:last-child th {
      border-bottom: none;
    }

    td:first-child {
      font-weight: 600;
      color: #007acc;
      width: 40%;
      background-color: #e6f2fb;
    }

    a {
      display: inline-block;
      padding: 10px 24px;
      background-color: #3399ff;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(51, 153, 255, 0.3);
      transition: background-color 0.3s ease;
    }

    a:hover {
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

  <?php
  $a = $_POST['p1'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "emp";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  $sql = "SELECT * FROM mark WHERE roll='$a'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $T = $row['m1'] + $row['m2'] + $row['m3'] + $row['m4'] + $row['m5'] + $row['m6'];

    if ($T > 580) {
      $g = "A+";
    } else if ($T > 520) {
      $g = "A";
    } else if ($T > 470) {
      $g = "B";
    } else if ($T > 360) {
      $g = "C";
    } else if ($T > 290) {
      $g = "D";
    } else if ($T >= 210) {
      $g = "E";
    } else {
      $g = "Failed";
    }
  ?>

    <h2>The Searched Result</h2>

    <table>
      <tr>
        <td>Name</td>
        <td><?php echo htmlspecialchars($row["name"]); ?></td>
      </tr>
      <tr>
        <td>Roll</td>
        <td><?php echo htmlspecialchars($row["roll"]); ?></td>
      </tr>
      <tr>
        <td>Mal</td>
        <td><?php echo htmlspecialchars($row["m1"]); ?></td>
      </tr>
      <tr>
        <td>Eng</td>
        <td><?php echo htmlspecialchars($row["m2"]); ?></td>
      </tr>
      <tr>
        <td>Chem</td>
        <td><?php echo htmlspecialchars($row["m3"]); ?></td>
      </tr>
      <tr>
        <td>Bio</td>
        <td><?php echo htmlspecialchars($row["m4"]); ?></td>
      </tr>
      <tr>
        <td>Mat</td>
        <td><?php echo htmlspecialchars($row["m5"]); ?></td>
      </tr>
      <tr>
        <td>Phy</td>
        <td><?php echo htmlspecialchars($row["m6"]); ?></td>
      </tr>
      <tr>
        <td>Total</td>
        <td><?php echo $T; ?></td>
      </tr>
      <tr>
        <td>Grade</td>
        <td><?php echo $g; ?></td>
      </tr>
    </table>

    <a href="search.php">? Back</a>

  <?php
  } else {
    echo '<div class="message">No such Roll number found.</div>';
    echo '<a href="search.php">? Back</a>';
	header("Refresh:3; url=search_edit.php"); 
  }
 
  ?>

</body>

</html>
