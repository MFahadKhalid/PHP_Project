<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body style="background: linear-gradient(to right, grey, lightgrey );" class="text-light text-center">
    <div class="container-fluid">
        <div class="container">
            <h1 class="mt-5 text-primary">OOP</h1>
            <?php 
            class fruits{
                public $name;
                public $color;
                function set_name($name){
                    $this->name = $name;
                }
                function get_name(){
                    return $this->name;
                }
            }
            $mango = new fruits();
            $mango->set_name("Mango ");
            echo $mango->get_name();
            $mango->set_name("Apple ");
            echo $mango->get_name();
            $mango->set_name("Banana");
            echo $mango->get_name();
            ?>
        </div>
    </div>
</body>
</html>