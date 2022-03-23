    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body class="container">
    <h1>PHP Array</h1>
    <?php
    $cars = array("Lamborgini" , "Farrari" , "Civic" , "Bugatti");
    echo "My Favorite Car is " . $cars[0] . " , " . $cars[1] . " , " . $cars[2] . " , " . $cars[3] . ".";
    echo "<h1>Arrray count</h1>";
    echo count($cars);
    echo"<h1>Array Length</h1>";
    $arraylength = count($cars);
    for($x = 0; $x < $arraylength; $x++) {
        echo $cars[$x];
        echo "<br>";
    } 
    echo "<h1>Associative Array</h1>";
    $fruits = array("Apple"=>"300" , "Orange"=>"150" , "Mango"=>"200");
    foreach($fruits as $x=> $x_value){
        echo "" . $x . ", kg " . $x_value . "<br>";
    }
    echo "<h1>Fruits Array</h1>";
    echo "Apple is " . $fruits['Apple'] . " kg. ";
    ?>
</body>
</html>