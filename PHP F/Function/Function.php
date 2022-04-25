<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>PHP FUNTIONS</h1>
        <?php
        function company($company , $price){
            echo "$company Mobile price. $price <br>";
        }
        company("Poco x3" , "55,000");
        company("Samsaung A02s" , "20,000");
        company("OPPO A12" , "19,500");
        ?>
    </div>
</body>
</html>