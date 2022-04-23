<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        .img1{
            background-image: url(assets/img/stars.PNG);
            width: 100%;
            background-size: 100%;
        }
        .d1{
            float: right;
        }
        input{
            border-radius: 30px;
            padding: 5px;
            width: 100%;
            border: none;
            padding-left: 15px;
        }
        .animation{
            padding-bottom: 111px;
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
    </style>
</head>
<body>
    <div class="img1 pb-5 container-fluid">
        <nav class=" navbar navbar-expand-md navbar-dark pt-3">
        <div class="container">
            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <b style="font-size: xx-large;" class="text-light">unicore</b>
            <div class="d1">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul  class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Page Builder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Video Tutrioal</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-info text-light">Buy unicore</button>
                </li>
            </div>
            </ul> 
        </div>
         </div>
         </nav>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div style="background-color: black;" class="rounded mt-5 p-4">
                        <form action="FormS.php" method="POST">
                            <h3 class="text-light">Apply Now</h3>
                            <input type="text" class="mt-3 text-secondary bg-dark" name="Fname" placeholder="First Name">
                            <input type="text" class="mt-3 text-secondary bg-dark" name="Lname" placeholder="Last Name">
                            <input type="text" class="mt-3 text-secondary bg-dark" name="E-mail" placeholder="E-mail Address">
                            <input type="text" class="mt-3 text-secondary bg-dark" name="Pnumber" placeholder="Phone No">
                            <input style="border-radius: 20px;" type="submit" class="bg-info text-light mt-3 w-100">
                        </form>    
                    </div>
                 </div>
                 <div class="col-md-6 mt-5 p-5">
                     <h1 class="text-light">Bootstrap Landing Page Template</h1>
                     <p id="learn" class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex voluptas soluta, volupt.</p>
                     <button class="btn btn-info text-light"  onclick="document.getElementById('learn').innerHTML='You are doing a good Work'">Purchase Now</button>
                 </div>
             </div>
         </div>
     </div>
     <form action="Form_Upload.php" enctype="multipart/form-data">
     <div class="animation container-fluid">
         <div class="container">
            <h1 style="padding-top: 150px;" class="text-light text-center">A better way to for great <br> landing pages</h1>
            <p class="text-light text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, molestiae autem. <br> Nostrum voluptatibus, id impedit quibusdam veritatis assumenda explicabo.</p>
            <div class="text-center">
                <input class="btn btn-primary w-25 p-2" type="file" name="fileToUpload" id="fileToUpload">
                <input class="btn btn-outline-primary w-25 p-2" type="submit" value="Upload Image" name="submit">
            </div>
         </div>
     </div>
     </form>
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>