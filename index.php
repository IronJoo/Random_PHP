<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Questionnaire</title>
</head>
<body>
    <form method="post" action="index.php">
        Are you male? <br>
        Yes <input type="checkbox" name="male"> <br><br>
        Are you tall? <br>
        Yes <input type="checkbox" name="tall"> <br><br>
        <input type="submit" value="Submit Selection">
    </form>
    <br>
    <?php
      if($_POST['male'] == true){
        $male = true;
      }
      else {$male = false;}

      if($_POST['tall'] == true){
        $tall = true;
      }
      else{$tall = false;}

      if($male == true && $tall == true)
      {
        echo "<h4>You are male and tall!</h4>";
      }
      elseif ($male == true && $tall == false)
      {
        echo "<h4>You are male and not tall!</h4>";
      }
      elseif($male == false && $tall == true)
      {
        echo "<h4>You are not male and you are tall!</h4>";
      }
      else
      {
        echo "<h4>You are neither male nor tall!</h4>";
      }

    ?>
</body>
</html>
