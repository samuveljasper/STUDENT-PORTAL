<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search by Roll</title>
<style>
  /* Reset some default styles */
  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f7fb;
    color: #333;
  }

  /* Table styling for the header */
  table.header-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #3399ff;
  }
  table.header-table td {
    padding: 12px 20px;
  }
  table.header-table a {
    color: white;
    font-weight: 600;
    text-decoration: none;
  }
  table.header-table a:hover {
    text-decoration: underline;
  }

  /* Main container centered */
  .container {
    max-width: 500px;
    margin: 50px auto;
    background: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(51, 153, 255, 0.2);
    text-align: center;
  }

  h1 {
    margin-bottom: 25px;
    color: #007acc;
  }

  /* Form table */
  table.form-table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto 20px;
  }

  table.form-table th {
    background-color: #e6f2ff;
    padding: 12px 10px;
    font-weight: 600;
    font-size: 16px;
    border: 1px solid #ccc;
  }

  table.form-table input[type="text"] {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #bbb;
    border-radius: 6px;
    font-size: 15px;
    box-sizing: border-box;
    transition: border-color 0.3s;
  }
  table.form-table input[type="text"]:focus {
    border-color: #3399ff;
    outline: none;
  }

  table.form-table th[colspan] {
    border: none;
    background: transparent;
  }

  /* Submit button styling */
  input[type="submit"] {
    background-color: #3399ff;
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #007acc;
  }

</style>
</head>

<body>
<table class="header-table" border="0">
  <tr>
    <td align="right"><a href="in.php">Home</a></td>
  </tr>
</table>

<div class="container">
  <h1><b>SEARCH HERE</b></h1>
  <form action="scr_del.php" method="post">
    <table class="form-table" border="0">
      <tr> 
        <th>Enter the roll number</th>
        <th><input type="text" name="p1" required /></th>
      </tr>
      <tr align="center">
        <th colspan="2">
          <input type="submit" name="p2" value="Search" />
        </th>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
