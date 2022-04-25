<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematical Array</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Mathematical Array</h1>
        <?php
        $cars = array (
            array("Lamborgini",22,18),
            array("Farrari",15,13),
            array("BMW",22,10),
            array("Rolls Royale",5,15)
        );
        echo "The car name is " .$cars[0][0].": Stock: ".$cars[0][1].", Sold:".$cars[0][2].".<br>";
        echo "The car name is " .$cars[1][0].": Stock: ".$cars[1][1].", Sold:".$cars[1][2].".<br>";
        echo "The car name is " .$cars[2][0].": Stock: ".$cars[2][1].", Sold:".$cars[2][2].".<br>";
        echo "The car name is " .$cars[3][0].": Stock: ".$cars[3][1].", Sold:".$cars[3][2].".<br><br>";
        for ($row = 0; $row < 4; $row++){
            echo "<p><b>Row Number</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++){
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>