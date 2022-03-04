<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="str.css">
</head>
<body>
    <?php
        echo "<h1>Square root</h1>";
        echo(sqrt(64) . "<br>");
        echo(sqrt(0) . "<br>");
        echo(sqrt(1) . "<br>");
        echo(sqrt(9) . "<br>");
        echo "<h1>Pi</h1>";
        echo(pi());
        echo "<br>";
        echo "<h1>Minimum / Maximum</h1>";
        echo(min(0, 150, 30, 20, -8, -200) . "<br>");
        echo(max(0, 150, 30, 20, -8, -200));
        echo "<h1>Abs</h1>";
        echo(abs(-6.7));
        echo "<h1>Round</h1>";
        echo(round(0.60) . "<br>");
        echo(round(0.50) . "<br>");
        echo(round(0.49) . "<br>");
        echo(round(-4.40) . "<br>");
        echo(round(-4.60) ."<br>");
        echo "<h1>Random</h1>";
        echo(rand());
    ?>
</body>
</html>