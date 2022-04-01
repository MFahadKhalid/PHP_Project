<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container">
<div class="card m-5">
  <div class="card-header">
    Form
  </div>
  <div class="card-body">
    <form action="store.php" method="POST">
        <div class="row">
            <div class="col-md-12">
                <label for="">Name</label>
                <input type="text" class="form-control" name="full_name" required>
            </div>
            <div class="col-md-12">
                <label for="">email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-12 mt-2 text-right">
                <button type="submit" class="btn btn-success" >SUBMIT</button>
            </div>
        </div>
    </form>
  </div>
</div>
</div>

</body>
</html>
