<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <style>
    .error{
        color: grey;
    }
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Student Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>
<div class="bg-light container-fluid">
    <div class="container">
        <h2>PHP Validation Form</h2>
        <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row">
            <div class="col-md-6">
                Name: <input type="text"  class="form-control" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
            </div>
            <div class="col-md-6">
                E-mail: <input type="text"  class="form-control" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
            </div>
            <div class="col-md-12">
                Website: <input type="text"  class="form-control" name="website">
                <span class="error"><?php echo $websiteErr;?></span>
                <br><br>
            </div>
            <div class="col-md-12">
                Comment: <textarea name="comment" rows="5" class="form-control" cols="40"></textarea>
                <br><br>
            </div>
            <div class="col-md-6">
            <h4>Gender:</h4>
                <input type="radio" name="gender" value="female">Female <br>
                <input type="radio" name="gender" value="male">Male <br>
                <input type="radio" name="gender" value="other"> Other <br>
                <span class="error">* <?php echo $genderErr;?></span>
                <br><br>
            </div>
            <input type="submit" class="bg-dark text-light form-control" name="submit" value="Submit">
        </div>
    </form>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
    </div>
</div>
</body>
</html>
