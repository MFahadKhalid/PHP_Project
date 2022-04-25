<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <div class="container-fluid">
        <div class="container">
        <div class="m-5 card">
        <div class="card-header">
            <h1>Read File()</h1>
        </div>
            <div class="card-body">
                <?php
                    echo readfile("Document.txt");
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>