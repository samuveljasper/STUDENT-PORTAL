<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    echo "<h2>Access Denied. Please <a href='login.php'>login</a> first.</h2>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Options Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #d4ebf2, #e9f6fc);
            min-height: 100vh;
        }

        .header {
            background-color: #3399ff;
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header .welcome {
            font-size: 20px;
        }

        .header .logout a {
            font-size: 16px;
            color: #fff;
            text-decoration: none;
            border: 1px solid white;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .header .logout a:hover {
            background-color: white;
            color: #3399ff;
        }

        .container {
            text-align: center;
            margin-top: 80px;
            padding: 20px;
        }

        .options-table {
            margin: 0 auto;
            width: 300px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .options-table tr {
            transition: transform 0.2s ease;
        }

        .options-table th {
            padding: 20px;
            font-size: 18px;
            border-bottom: 1px solid #eee;
            background-color: #f8fbff;
        }

        .options-table th a {
            display: block;
            text-decoration: none;
            color: #007acc;
            transition: color 0.3s, background-color 0.3s;
            padding: 12px;
            border-radius: 8px;
        }

        .options-table th a:hover {
            background-color: #e0f0ff;
            color: #005f99;
        }

        .options-table tr:last-child th {
            border-bottom: none;
        }

        @media (max-width: 480px) {
            .header {
                flex-direction: column;
                text-align: center;
            }

            .options-table {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="welcome">
        Welcome <i><?php echo htmlspecialchars($_SESSION['username']); ?></i>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <table class="options-table">
        <tr><th><a href="insert.php">➕ INSERT</a></th></tr>
        <tr><th><a href="search.php">🔍 SEARCH</a></th></tr>
        <tr><th><a href="dispall.php">📋 DISPLAY ALL</a></th></tr>
        <tr><th><a href="search_edit.php">✏️ EDIT / UPDATE</a></th></tr>
        <tr><th><a href="search_del.php">🗑️ DELETE</a></th></tr>
    </table>
</div>

</body>
</html>
