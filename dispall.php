<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Student Marks Table</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #d4ebf2, #e9f6fc);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    h2 {
      text-align: center;
      margin-top: 30px;
      color: #007acc;
    }

    table {
      margin: 40px auto;
      border-collapse: collapse;
      width: 90%;
      max-width: 1000px;
      background-color: white;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      padding: 12px 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #3399ff;
      color: white;
      font-size: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f9fc;
    }

    tr:hover {
      background-color: #e0f4ff;
    }

    .back-link {
      text-align: center;
      margin-bottom: 30px;
    }

    .back-link a {
      text-decoration: none;
      color: white;
      background-color: #3399ff;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .back-link a:hover {
      background-color: #007acc;
    }

    @media screen and (max-width: 768px) {
      table {
        width: 95%;
        font-size: 14px;
      }

      th, td {
        padding: 10px;
      }
    }
  </style>
</head>

<body>

  <h2>Student Marks Table</h2>

  <table>
    <tr>
      <th>Roll</th>
      <th>Name</th>
      <th>Malayalam</th>
      <th>English</th>
      <th>Hindi</th>
      <th>Physics</th>
      <th>Chemistry</th>
      <th>Maths</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "emp";
    $conn = new mysqli($servername, $username, $password, $db);

    $sql = "SELECT * FROM mark";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["roll"] . "</td>";
        echo "<td>" . strtoupper($row["name"]) . "</td>";
        echo "<td>" . $row["m1"] . "</td>";
        echo "<td>" . $row["m2"] . "</td>";
        echo "<td>" . $row["m3"] . "</td>";
        echo "<td>" . $row["m4"] . "</td>";
        echo "<td>" . $row["m5"] . "</td>";
        echo "<td>" . $row["m6"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='8'>Table is empty!</td></tr>";
    }
    ?>
  </table>

  <div class="back-link">
    <a href="in.php">← Back</a>
  </div>

</body>
</html>
