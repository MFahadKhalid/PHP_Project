<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <div class="container-fluid">
        <div class="container">
            <div class="mt-5 card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="text-danger">Agent Information</h3>
                    </div>
                </div>
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-12">
                           <p class="text-warning">Name:- <?php echo $_POST["Name"] ?> </p>
                       </div>
                       <div class="col-md-12">
                           <p class="text-info">E-mail:- <?php echo $_POST["E-mail"] ?> </p>
                       </div>
                       <div class="col-md-12">
                           <p  class="text-primary">Message <?php echo $_POST["Message"] ?> </p>
                       </div>
                   </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>