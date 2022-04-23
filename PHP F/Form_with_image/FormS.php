<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Save</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body class="bg-warning">
    <div class="mt-5 container-fluid">
        <div class="container">
            <?php include("Back_Button.php") ?>
            <div class="card">
                <div class="card-header">
                    <h1>Form Save</h1>
                </div>
                <div class="card-body">
                    <p>First Name:- <?php echo $_POST["Fname"] ?></p>
                    <p>Last Name:- <?php echo $_POST["Lname"] ?></p>
                    <p>E-mail Address:- <?php echo $_POST["E-mail"] ?></p>
                    <p>Phone Number:- <?php echo $_POST["Pnumber"] ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>