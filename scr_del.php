<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Delete Record</title>

    <style>
        body {
            background: linear-gradient(to right, #f0f8ff, #e6f2ff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .nav {
            width: 100%;
            background-color: #007acc;
            padding: 10px 20px;
        }

        .nav a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin: 0 10px;
        }

        .nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007acc;
            text-align: center;
            margin-bottom: 25px;
        }

        table.data-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.data-table td {
            padding: 10px;
            font-size: 15px;
            border-bottom: 1px solid #ddd;
        }

        table.data-table td:first-child {
            font-weight: bold;
            background-color: #f2faff;
            width: 40%;
        }

        input[type="text"] {
            width: 100%;
            padding: 6px;
            font-size: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
        }

        input[readonly] {
            background-color: #f4f4f4;
            color: #666;
        }

        .btn-delete {
            background-color: #d9534f;
            color: white;
            font-weight: bold;
            padding: 10px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-delete:hover {
            background-color: #c9302c;
        }

        .center {
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>
</head>

<body>

    <!-- Navigation Bar -->
    <div class="nav">
        <a href="search_edit.php">Back</a>
        <a href="in.php" style="float: right;">Home</a>
    </div>

    <div class="container">
        <h1>Delete Student Record</h1>

        <?php
        $a = $_POST['p1'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "emp";

        $conn = new mysqli($servername, $username, $password, $db);

        $sql = "SELECT * FROM mark WHERE roll='$a'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>

            <form action="del.php" method="post" onsubmit="return confirmDelete();">
                <table class="data-table">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="n1" value="<?php echo $row['name']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Roll</td>
                        <td><input type="text" name="n2" value="<?php echo $row['roll']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Malayalam</td>
                        <td><input type="text" name="n3" value="<?php echo $row['m1']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td><input type="text" name="n4" value="<?php echo $row['m2']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td><input type="text" name="n5" value="<?php echo $row['m3']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Biology</td>
                        <td><input type="text" name="n6" value="<?php echo $row['m4']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Maths</td>
                        <td><input type="text" name="n7" value="<?php echo $row['m5']; ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td><input type="text" name="n8" value="<?php echo $row['m6']; ?>" readonly /></td>
                    </tr>
                </table>

                <div class="center">
                    <input type="submit" class="btn-delete" name="aa" value="Delete" />
                </div>
            </form>

        <?php
        } else {
            echo "<p class='error'>No such Roll number found.</p>";
        }
        ?>
    </div>

</body>

</html>
