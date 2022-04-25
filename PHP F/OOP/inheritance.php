<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Inheritance</title>
</head>
<body class="bg-dark text-light text-center">
    <div class="container-fluid">
        <div class="container">
            <h1 class="mt-5 pt-5">Inheritance</h1>
            <?php
            class Cars {
                public $name;
                public $modal;
                public function __construct($name, $modal) {
                $this->name = $name;
                $this->modal = $modal; 
               }
                public function intro() {
                echo "The Cars is {$this->name} and the Modal is {$this->modal}."; 
               }
            }
            class Lamborghini extends Cars {
            public function message() {
             echo "Am I a Cars or a BMW? "; 
            }
            }
            $Lamborghini = new Lamborghini("Lamborghini", "i8");
            $Lamborghini->message();
            $Lamborghini->intro();
            ?>
        </div>
    </div>
</body>
</html>