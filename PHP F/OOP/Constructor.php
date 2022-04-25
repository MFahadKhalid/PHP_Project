<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Constructor</title>
</head>
<body class="bg-info text-danger text-center">
    <div class="container">
        <h1 class="mt-5 pt-5">Constructor</h1>
        <?php
        class Car {
            public $name;
            public $modal;
            function __construct($name, $modal) {
                $this->name = $name; 
                $this->modal = $modal; 
            }
            function get_name() {
                return $this->name;
            }
            function get_modal() {
                return $this->modal;
            }
        }
        $lamborghini = new Car("Lamborghini", "i8");
        echo $lamborghini->get_name();
        echo "<br>";
        echo $lamborghini->get_modal();
        ?>
    </div>
</body>
</html>