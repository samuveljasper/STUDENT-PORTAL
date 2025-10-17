<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "emp";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$k = 1000;
$sql = "SELECT * FROM mark ORDER BY roll DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $k = $row["roll"] + 1;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Entry Form</title>
    <style>
        body {
            background-color: #d4ebf2; /* Light blue background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-bar {
            background-color: #3399ff;
            padding: 10px 20px;
            text-align: right;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #007acc;
            margin-bottom: 30px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 10px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #b3d7ff;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #3399ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #267acc;
        }
    </style>
</head>
<body>

<div class="top-bar">
    <a href="in.php">Home</a>
</div>

<div class="container">
    <h2>STUDENT DETAILS</h2>
    <form action="insert1.php" method="post">
        <table>
            <tr>
                <td>NAME</td>
                <td><input type="text" name="n1" required /></td>
            </tr>
            <tr>
                <td>ROLL NO</td>
                <td><input type="text" name="n2" value="<?php echo $k; ?>" readonly /></td>
            </tr>
            <tr>
                <td>MALAYALAM</td>
                <td><input type="text" name="n3" required /></td>
            </tr>
            <tr>
                <td>ENGLISH</td>
                <td><input type="text" name="n4" required /></td>
            </tr>
            <tr>
                <td>CHEMISTRY</td>
                <td><input type="text" name="n5" required /></td>
            </tr>
            <tr>
                <td>PHYSICS</td>
                <td><input type="text" name="n6" required /></td>
            </tr>
            <tr>
                <td>BIOLOGY</td>
                <td><input type="text" name="n7" required /></td>
            </tr>
            <tr>
                <td>MATHS</td>
                <td><input type="text" name="n8" required /></td>
            </tr>
        </table>
        <button type="submit">SUBMIT</button>
    </form>
</div>

</body>
</html>
