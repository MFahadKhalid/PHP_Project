<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP From</title>
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
                    <form action="FormS.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                Name: <input type="text" class="form-control" name="Name" required>
                            </div>
                            <div class="col-md-6">
                                Sur_Name: <input type="text" class="form-control" name="Sur_Name" required>
                            </div>
                            <div class="col-md-12">
                                Mobile_Number: <input type="text" class="form-control" name="Phone_Number" required>
                            </div>
                            <div class="col-md-12">
                                Address_Line_1: <input type="text" class="form-control" name="Address_Line_1" required>
                            </div>
                            <div class="col-md-12">
                                Address_Line_2: <input type="text" class="form-control" name="Address_Line_2" required>
                            </div>
                            <div class="col-md-12">
                                Post_Code: <input type="text" class="form-control" name="Post_Code" required>
                            </div>
                            <div class="col-md-12">
                                State: <input type="text" class="form-control" name="State" required>
                            </div>
                            <div class="col-md-12">
                                Area: <input type="text" class="form-control" name="Area" required>
                            </div>
                            <div class="col-md-12">
                                Email_ID: <input type="text" class="form-control" name="Email_ID" required>
                            </div>
                            <div class="col-md-12">
                                Education: <input type="text" class="form-control" name="Education" required>
                            </div>
                            <div class="col-md-6">
                                Country: <select name="Country" id="select" class="form-control" required>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="India">India</option>
                                    <option value="China">China</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                Currency: <select name="Currency" id="select" class="form-control" required>
                                    <option value="Rupees">Rupees</option>
                                    <option value="Dollar">Dollar</option>
                                    <option value="Usd">Usd</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="form-control bg-warning text-light mt-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>