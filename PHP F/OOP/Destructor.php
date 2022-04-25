<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Destructor</title>
</head>
<body class="bg-secondary text-center text-light">
    <div class="container">
    <h1 class="mt-5 pt-5">Destructor</h1>
    <?php
    class Fruit {
        var $name;
        var $modal;
        function __construct($name, $modal) {
            $this->name = $name;
            $this->modal = $modal; 
        }
        function __destruct() {
            echo "The Car is {$this->name} and the Modal is {$this->modal}."; 
        }
    }
    $lamborghini = new Fruit("Lamborghini", "i8");
    ?>
    </div>
</body>
</html>