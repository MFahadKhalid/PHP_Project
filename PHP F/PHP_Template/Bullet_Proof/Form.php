<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Save</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <style>
        body {
          background-color: red;
          position: relative;
          animation: myfirst 5s linear 2s infinite alternate;
        }
        @keyframes myfirst {
          0%   {background-color:red;}
          25%  {background-color:yellow;}
          50%  {background-color:blue;}
          75%  {background-color:green;}
          100% {background-color:red;}
        }
        .d1{
            background: white;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="d1 p-5">
                <h1 class=" text-center">Form</h1>
                <p class="text-success">E-mail:- <?php echo $_POST["E-mail"]; ?></p>
                <p class="text-success">Password:- <?php echo $_POST["Password"]; ?></p>
            </div>
        </div>
    </div>
</body>
</html>