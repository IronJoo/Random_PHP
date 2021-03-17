<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Calculator</title>
</head>
<body>
    <form method="post" action="index.php">
        First number: <input type="number" step="0.001" name="num1"><br><br>
        Operator: <input type="text" name="op"><br><br>
        Second number: <input type="number" name="num2"><br><br>
        <input type="submit" value="Calculate">
    </form>
    <br>
    <?php
      $num1 = $_POST["num1"];
      $op = $_POST["op"];
      $num2 = $_POST["num2"];

      if($op == "+")
      {
        echo $num1 + $num2;
      }
      elseif($op == "-")
      {
        echo $num1 - $num2;
      }
      elseif($op == "/" || $op == ":")
      {
        echo $num1 / $num2;
      }
      elseif($op == "*" || $op == "x")
      {
        echo $num1 * $num2;
      }
      else
      {
        echo "Invalid number or operator.";
      }
    ?>
</body>
</html>
