<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="text-center container">
    <h1>While Loop</h1>
    <?php
    $C= 1;
    while($C <= 10){
        echo  "The number is:".$C."<br>";
        $C++;
        }
        echo "<h1>Do while Loop</h1>";
        $A= 1;
        do{
            echo  "The number is:".$A."<br>";
            $A++;
        }  while ($A <= 5);
        echo "<h1>For Loop</h1>";
        for ($B = 0; $B <= 10; $B++){
            echo "The number is:".$B."<br>";
        }
        echo "<h1>For Each Loop</h1>";
        $age = array("Fahad"=>"16", "Abdul Wahab"=>"17", "Zeeshan"=>"11");
        foreach($age as $x => $val){
            echo $x ."=".$val."<br>";
        }

    ?>
    </div>
</body>
</html>
