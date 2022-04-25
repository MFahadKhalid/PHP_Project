<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>
<body class="container-fluid bg-info">
    <div class="container">
        <h1 class="text-danger">PHP Data and time</h1>
        <div class="row">
            <div class="mt-5 col-md-6">
                 <div class="card">
                     <div class="card-head">
                         <div class="card-title">
                             <h3>Date and Day</h3>
                         </div>
                     </div>
                         <div class="card-body">
                             <?php
                             echo "Today Date is" .date(" d-D"). "";
                             ?>
                     </div>
                 </div>
            </div>
            <div class="mt-5 col-md-6">
                <div class="card">
                     <div class="card-head">
                         <div class="card-title">
                             <h3>Year</h3>
                         </div>
                     </div>
                         <div class="card-body">
                             <?php
                             echo "Today Date is" .date(" Y"). "";
                             ?>
                     </div>
                 </div>
            </div>
                 <div class="mt-5 col-md-6">
                <div class="card">
                     <div class="card-head">
                         <div class="card-title">
                             <h3>Month</h3>
                         </div>
                     </div>
                         <div class="card-body">
                             <?php
                             echo "Today Month is" .date(" m-M"). "";
                             ?>
                     </div>
                 </div>
            </div>
            <div class="mt-5 col-md-6">
                <div class="card">
                    <div class="card-head">
                        <div class="card-title">
                            <h3>Time</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        echo "Today Time is" .date(" h:i:s  a"). "";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>