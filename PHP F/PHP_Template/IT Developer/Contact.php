<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <?php include ("Nav.php") ?>
    <div class="mt-5  mb-5 shadow-lg bg-light p-5 container">
        <div class="text-center">
            <h1>Contact Form #6</h1>
        </div>
        <div class="row">
            <div class="bg-light p-5 col-md-6">
                <div>
                    <h4>Contact us</h4>
                       <form action="Contact_Form.php" method="POST">
                       <div class="row">
                          <div class="mt-3 col-md-6">
                              <b>Full Name:-</b><input name="name" type="text" class="form-control text-secondary" placeholder="Name" required>
                          </div>
                          <div class="mt-3 col-md-6">
                              <b>E-mail Address:-</b><input name="Address" type="text" class="form-control text-secondary" placeholder="E-mail" required>
                          </div>
                          <div class="mt-3 col-md-12">
                              <b>Subject:-</b><input type="text" name="Subject" class="form-control text-secondary" placeholder="Subject" required>
                          </div>
                          <div class="mt-3 col-md-12">
                               <b>Message:-</b><textarea name="Message" class="form-control text-secondary" placeholder="Message" cols="30" rows="10" required></textarea>
                          </div>
                          <div class="mt-3 col-md-5">
                               <button class="btn btn-primary">Send Message</button>
                          </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 col-md-6">
                    <img src="assets/img/map-pakistan.PNG" alt="map-pakistan" width="100%">
                </div>
            </div>
        </div>
    <?php include ("Footer.php") ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>