<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body class="p-5" style="background: linear-gradient(to right, blue, skyblue );" >
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div style="margin-top: 190px; text-align: center;">
                    <i style="font-size: 50px;" class="text-light fa fa-rocket"></i>
                    <h3 class="text-light">Welcome</h3>
                    <p class="text-light">Youn are 30 seconda away from earning yuor own money!</p>
                    <button class="w-50 btn btn-light">Login</button>
                </div>
            </div>
            <div style="margin-top: 130px;" class="col-md-9">
                <div class="card">
                    <div class="p-3 card-header">
                        <h1 class="text-center">Apply As a Employe</h1>
                    </div>
                    <div class="card-body p-5">
                        <form action="Form_upload.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="mt-3 form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mt-3 form-control" placeholder="E-mail">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mt-3 form-control" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mt-3 form-control" placeholder="Your Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="mt-3 form-control" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <select name="select" class="display-block mt-3 text-secondary form-control" id="select">
                                   <option value="1">Please select your security question</option>
                                   <option value="2">Number</option>
                                   <option value="3">E-mail</option>
                                   <option value="4">Securiy-Code</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mt-3 form-control" placeholder="Confirm Passsword">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="mt-3 form-control" placeholder="Enter your Answer">
                            </div>
                            <div class="col-md-12">
                                <input type="radio" class="mt-3">
                                <i>Male</i>
                                <input type="radio" class="mt-3">
                                <i>Female</i>
                            </div>
                            <div style="text-align: right;" class="col-md-12">
                              <!--  <button type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary">Choose image</button>
                                <button type="submit" name="file image" name="submit" class="btn btn-outline-primary">Upload image</button> -->
                                <input class="btn btn-primary p-2" type="file" name="fileToUpload" id="fileToUpload">
                                <input class="btn btn-outline-primary p-2" type="submit" value="Upload Image" name="submit">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>