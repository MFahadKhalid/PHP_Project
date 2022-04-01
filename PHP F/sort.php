<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Sort</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body class="container">
<h1>Array Sort()</h1>
    <?php
    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
echo "<br>";
    echo '<br>';
    $book = array("Mathematics", "Chemistry", "Physics");
    sort($book);
    $books = count($book);
        for($x = 0; $x < $books; $x++) {
        echo $book[$x];
        echo "<br>";
    }
    echo "<h1>R sort()</h1>";
    $fruit = array("Apple", "Mango", "Banana");
    rsort($fruit);
    $cars = count($fruit);
    for($y = 0; $y < $cars; $y++) {
      echo $fruit[$y];
      echo "<br>";
    }
    echo "<h1>A sort</h1>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    echo "<h1>K sort</h1>";
    $name = array("Fahad"=>"16", "Awahab"=>"17", "Junaid"=>"16");
        ksort($name);
        foreach($name as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<h1>AR sort</h1>";
    $animal = array("Elephant"=>"35", "Lion"=>"37", "Leopard"=>"43");
    arsort($animal);
    foreach($animal as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    echo "<h1>KR sort</h1>";
    $thing = array("Fan"=>"950", "watch"=>"370", "Computer"=>"4300");
    krsort($thing);
    foreach($thing as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    ?>
</body>
</html>
