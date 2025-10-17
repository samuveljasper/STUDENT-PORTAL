<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search by Roll</title>

<style>
  /* Reset some default styles */
  body, h1, table, th, td, input, a {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
    background: linear-gradient(to right, #d4ebf2, #e9f6fc);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
  }

  table.header-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
  }

  table.header-table td {
    border: 1px solid #3399ff;
    padding: 10px 20px;
    background-color: #3399ff;
  }

  table.header-table td a {
    color: white;
    text-decoration: none;
    font-weight: bold;
  }

  table.header-table td a:hover {
    text-decoration: underline;
  }

  .search-container {
    background: white;
    padding: 25px 40px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(51, 153, 255, 0.2);
    width: 350px;
    text-align: center;
  }

  h1 {
    color: #007acc;
    margin-bottom: 20px;
    font-size: 28px;
  }

  form table {
    width: 100%;
    border-collapse: collapse;
  }

  th {
    text-align: left;
    font-weight: 600;
    font-size: 16px;
    color: #444;
    padding-bottom: 8px;
  }

  input[type="text"] {
    width: 100%;
    padding: 8px 12px;
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

  input[type="submit"] {
    width: 100%;
    background-color: #3399ff;
    color: white;
    border: none;
    padding: 12px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #007acc;
  }
</style>
</head>

<body>
  <table class="header-table">
    <tr>
      <td align="right"><a href="in.php">Home</a></td>
    </tr>
  </table>

  <div class="search-container">
    <h1>SEARCH HERE</h1>
    <form action="scr_edit.php" method="post">
      <table>
        <tr>
          <th>Enter the roll number</th>
          <th><input type="text" name="p1" required autocomplete="off" /></th>
        </tr>
        <tr>
          <th colspan="2">
            <input type="submit" name="p2" value="Search" />
          </th>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>
