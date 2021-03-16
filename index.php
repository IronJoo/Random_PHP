<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Calculator</title>
</head>
<body>
    <form method="get" action="index.php">
        <h2>Please input two values:</h2>
        Number 1: <input type="number" name="num1"><br><br>
        Number 2: <input type="number" name="num2"><br><br>
        <input type="submit" value="Submit Name">
    </form>
    <br>
    <?php echo $_GET["num1"] + $_GET["num2"]?>
</body>
</html>