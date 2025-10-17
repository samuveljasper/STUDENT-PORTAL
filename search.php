<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="iso-8859-1" />
  <title>Search by Roll</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url("https://images.pexels.com/photos/304664/pexels-photo-304664.jpeg?cs=srgb&dl=pexels-martinpechy-304664.jpg&fm=jpg") no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .overlay {
      background-color: rgba(212, 235, 242, 0.85); /* light blue semi-transparent */
      min-height: 100vh;
      padding: 20px;
    }

    .top-bar {
      background-color: rgba(51, 153, 255, 0.9);
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
      margin: 60px auto;
      background-color: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    h1 {
      color: #007acc;
      margin-bottom: 30px;
    }

    table {
      margin: 0 auto;
      border-collapse: collapse;
      width: 100%;
    }

    th {
      padding: 15px;
      font-size: 16px;
      text-align: left;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #b3d7ff;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
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

    input[type="submit"]:hover {
      background-color: #267acc;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <div class="top-bar">
      <a href="in.php">Home</a>
    </div>

    <div class="container">
      <h1><b>SEARCH HERE</b></h1>

      <form action="scr1.php" method="post">
        <table>
          <tr>
            <th>Enter the roll number</th>
            <th><input type="text" name="p1" required /></th>
          </tr>
          <tr>
            <th colspan="2" style="text-align: center;">
              <input type="submit" name="p2" value="Search" />
            </th>
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>
</html>
