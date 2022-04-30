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
<body class="bg-info">
    <div class="container">
        <div class="mt-5 card">
            <div class="card-header">
                <div class="card-tittle">
                    <h3>Form</h3>
                </div>
            </div>
            <div class="card-body">
                <p>Name:- <?php echo $_POST["Name"] ?></p>
                <p>E-mail:- <?php echo $_POST["E-mail"] ?></p>
                <p>Practise Area:- <?php echo $_POST["practise"] ?></p>
                <p>Message:- <?php echo $_POST["Message"] ?></p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>