<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>
<body>
    <div class="bg-info p-5 container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">PHP FORM</h3>
                    <p class="card-text"></p>
                    <div class="row">
                        <div class="bg-warning pt-3 col-md-6">
                            <p>Name: <?php echo $_POST["Name"]; ?></p>
                        </div>
                        <div class="col-md-6 text-light bg-danger pt-3 ">
                            <p>Sur_Name: <?php echo $_POST["Sur_Name"]; ?></p>
                        </div>
                        <div class="bg-info mt-3 pt-3 col-md-12">
                            <p>Phone_Number: <?php echo $_POST["Phone_Number"]; ?></p>
                        </div>
                        <div class="col-md-12 bg-success pt-3 text-light mt-3">
                            <p>Address_Line_1: <?php echo $_POST["Address_Line_1"]; ?></p>
                        </div>
                        <div class="col-md-12 bg-secondary mt-3 pt-3 text-light">
                            <p>Address_Line_2: <?php echo $_POST["Address_Line_2"]; ?></p>
                        </div>
                        <div class="col-md-12 bg-primary pt-3 mt-3">
                            <p>Post_Code <?php echo $_POST["Post_Code"]; ?></p>
                        </div>
                        <div class="bg-warning pt-3  mt-3 col-md-12">
                            <p>State: <?php echo $_POST["State"]; ?></p>
                        </div>
                        <div class=" text-light bg-danger pt-3 mt-3 col-md-12">
                            <p>Area: <?php echo $_POST["Area"]; ?></p>
                        </div>
                        <div class="bg-info mt-3 pt-3 col-md-12">
                            <p>Email_ID: <?php echo $_POST["Email_ID"]; ?></p>
                        </div>
                        <div class=" bg-success mt-3 pt-3 text-light mt-3col-md-12">
                            <p>Education: <?php echo $_POST["Education"]; ?></p>
                        </div>
                        <div class="col-md-6 bg-secondary mt-3 pt-3 text-light">
                            <p>Country: <?php echo $_POST["Country"]; ?></p>
                        </div>
                        <div class="col-md-6 bg-primary mt-3 pt-3">
                            <p>Currency: <?php echo $_POST["Currency"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>