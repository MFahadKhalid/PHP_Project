<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-warning">
    <div class="container-fluid">
        <div class="container">
            <div class="m-5 card">
                <div class="card-header">
                    <h1>Open / Read</h1>
                </div>
                <div class="card-body">
                    <?php
                        $myfile = fopen("Document.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("Document.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>