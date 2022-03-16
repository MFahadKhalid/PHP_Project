<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break</title>
    <link rel="stylesheet" href="str.css">
</head>
<body>
    <h1>"CONTINUE"</h1>
 <?php
    for ($x = "A"; $x < "J"; $x++) {
  if ($x == "E") {
    continue;
  }
  echo "The number is:".$x."<br>";
}
        echo "<h1>Break</h1>";
for ($x = "A"; $x < "J"; $x++) {
    if ($x == "E") {
      break;
    }
    echo "The number is:".$x."<br>";
  }
 ?>
</body>
</html>