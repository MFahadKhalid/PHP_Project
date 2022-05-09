<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body class="bg-primary">
    <div class="container-fluid">
        <div class="bg-light p-5 mt-5 container">
            <h1 class=text-center>Contact_Form</h1>
            <p>Full Name:- <?php echo $_POST["name"]; ?></p>
            <p>E-mail Address:- <?php echo $_POST["Address"]; ?></p>
            <p>Subject:- <?php echo $_POST["Subject"]; ?></p>
            <p>Message:- <?php echo $_POST["Message"]; ?></p>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>