<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-success">
    <h1 class="m-5 text-light">File Open () with Fruits name.</h1>
    <?php
        $myfile = fopen("Document.txt", "a") or die("Unable to open file!");
        $txt = "Apple\n";
        fwrite($myfile, $txt);
        $txt = "Mango\n";
        fwrite($myfile, $txt);
        $txt = "Stawberry\n";
        fwrite($myfile, $txt);
        $txt = "Water mellon\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
</body>
</html>