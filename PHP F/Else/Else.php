<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>If , Else If and Else</h1>
    <?php
    $t = date("16");
    echo "<p>My name is fahad khalid and my age is " . $t; 
    echo ", and you all:</p>";
    $t = date("H");
    if ($t < "16") {
        echo "Have a good Day!";
      } elseif ($t) {
        echo "Have a good morning!";
      } else {
        echo "Have a good night!";
      }
    ?>
</html>