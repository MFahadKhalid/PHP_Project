<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str Function</title>
    <link rel="stylesheet" href="str.css">
</head>
<body>
    <h1>Pre_Defined Function</h1>
    <?php
        echo "<h2>STRLEN</h2>";
        echo strlen ("Hello world!");
        echo "<br> <br>";
        echo "<h2>STR_WORD_COUNT</h2>";
        echo str_word_count ("Hello world!");
        echo "<br> <br>";
        echo "<h2>STRREV</h2>";
        echo strrev ("Hello world!");
        echo "<br> <br>";
        echo "<h2>STROPS</h2>";
        echo strpos ("Hello world!" , "world");
        echo "<br> <br>";
        echo "<h2>STR_REPLACE</h2>";
        echo str_replace ("world" , "Fahad" ,"Hello world");
        echo "<br> <br>";
        echo "<h2>IS_INT</h2>";
        echo is_int ("Hello world");
        $x = 100.85;
        var_dump(is_int($x));
        echo "<br> <br>";
        echo "<h2>VAR_DUMP IS_INT</h2>";
        $x = 10085;
        var_dump(is_int($x));
        echo "<br> <br>";
        echo "<h2>VAR_DUMP IS_FLOAT</h2>";
        $x = 10.365;
        var_dump(is_float($x));
        echo "<br> <br>";
        echo "<h2>VAR_DUMP IS_NUMERIC</h2>";
        $x = 5985;
        var_dump(is_numeric($x));
        echo "<br><br>";
        $x = "5985";
        echo "<h2>VAR_DUMP IS_NUMERIC</h2>";
        var_dump(is_numeric($x));
        echo "<br><br>";
        $x = "59.85" + 100;
        echo "<h2>VAR_DUMP IS_NUMERIC</h2>";
        var_dump(is_numeric($x));
        echo "<br><br>";
        $x = "Hello";
        echo "<h2>VAR_DUMP IS_NUMERIC</h2>";
        var_dump(is_numeric($x));
    ?>
</body>
</html>