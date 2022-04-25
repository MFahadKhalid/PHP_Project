<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        .img{
            background-image: url(assets/img/bg_image.png);
            background-size: 100%;
            opacity: 1;
        }
    </style>
</head>
<body>
<div class="Home">
    <?php  include ("Home.php"); ?>
</div>
<div class="Recuirments">
    <?php  include ("Recuirments.php"); ?>
</div>
<div class="Building">
    <?php  include ("Building.php"); ?>
</div>
<div class="FAQ">
    <?php  include ("FAQ.php"); ?>
</div>
<div class="Contact">
    <?php  include ("Contact.php"); ?>
</div>
<div class="container-fluid p-5 text-center bg-dark">
    <div class="container text-light">
        <p>Sample text. Click to select the text box. Click again or double <br> click to start editing the text.</p>
        <br><br>
        <p><i class="text-warning"> Website Templates </i> created with Website <i class="text-warning">Builder Software.</i> </p>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#link1").on({
                mouseenter: function(){
                $(this).css("color","darkcyan");                
                },
                mouseleave: function(){
                $(this).css("color","pink");                
                },
            });
        });
    </script>
</body>
</html>