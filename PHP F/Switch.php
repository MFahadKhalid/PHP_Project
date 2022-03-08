<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch</title>
    <link rel="stylesheet" href="str.css">
</head>
<body>
    <h1>Php Switch , If Elseif and Else</h1>
    <?php
    $favFruit = "Apple";
    switch ($favFruit) {
    case "Apple":
        echo "Your favorite Fruit is Apple!";
    break;
    case "Orange":
        echo "Your favorite Fruit is Orange!";
    break;
    case "Kiwi":
        echo "Your favorite Fruit is Kiwi!";
    break;
    default:
        echo "Your favorite Fruit is Apple, Orange, and Kiwi!";
    }
    $x = 5;
    $y = 6;
    if("$x == $y"){
        echo "x is equal to y";
    }
    ?>
</body>
</html>