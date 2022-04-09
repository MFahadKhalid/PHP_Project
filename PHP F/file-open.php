<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myfile = fopen("assets/file/newfile.txt", "w") or die("Unable to open file!");
$txt = "Qasim Inayat\n";
fwrite($myfile, $txt);
$txt = "Abdul Wahab\n";
fwrite($myfile, $txt);
$txt = "Fahad\n";
fwrite($myfile, $txt);
$txt = "Junaid\n";
fwrite($myfile, $txt);
fclose($myfile);

echo readfile("assets/file/newfile.txt");
?>
</body>
</html>
