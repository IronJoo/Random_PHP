<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Madlibs Game</title>
</head>
<body>
    <form method="get" action="index.php">
        <h2>Please input the following:</h2>
        Color: <input type="text" name="color"><br><br>
        Plural Noun: <input type="text" name="pluralNoun"><br><br>
        Celebrity: <input type="text" name="celebrity"><br><br>
        <input type="submit" value="Submit Inputs">
    </form>
    <br>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
    
    
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    
    ?>
</body>
</html>