<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Law Firm</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        .carousel-inner img{
            width: 100%;
        }
        .line{
            border-right: 4px solid #DE3660;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .img{
            background-image: url(assets/img/dots.png);
            background-repeat: no-repeat;
        }
        .img1{
            background-image: url(assets/img/dots-2.png);
        }
        .img2{
            background-image: url(assets/img/call_action.jpg);
            background-size: 100%;
        }
        .img3{
            background-image: url(assets/img/testimonals.jpg);
            background-size: 100%;
        }
        .line2{
            border-bottom: 2px solid grey;
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div>
        <nav style="background-color: #1A3350;" class="navbar navbar-expand-lg fixed-top">
            <div style="font-size: large; float: left;" class="ml-5 float-left text-light">
                <i class="fa fa-university"> Law Firm</i>
            </div>
            <button class="bg-light text-primary navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-server"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="nav p-2">
                <li class="nav-item ">
                    <a class="nav-link ml-2 text-light" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2 text-light" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2 text-light" href="#PractiseAreas">Practise Areas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2 text-light" href="#Team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2 text-light" href="#Blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2 text-light" href="#Contact">Contact</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light ml-3">Free constuction</button>
                </li>
            </ul>
            </div>
        </nav>
        <div id="Home" class="bg-dark" >
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1" ></li>
                        <li data-target="#demo" data-slide-to="2" ></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/slider-1.jpg" alt="slider-1" width="100%" height="100%">
                        <div class="carousel-caption">
                            <h1 class="text-left">Exprienced Court Performance</h1>
                            <p class="text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quia voluptates, maxime eos asperiores sed praesentium ab, totam consequuntur fuga nulla nesciunt doloremque. Ullam sapiente quo adipisci impedit, commodi earum.</p>
                            <button class="btn" style="background-color: #DE3660; color: white;">Get Started</button>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/slider-2.jpg" alt="slider-2" width="100%" height="100%">
                        <div class="carousel-caption">
                            <h1 class="text-left">Winners for Global Legal Innovation</h1>
                            <p class="text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quia voluptates, maxime eos asperiores sed praesentium ab, totam consequuntur fuga nulla nesciunt doloremque. Ullam sapiente quo adipisci impedit, commodi earum.</p>
                            <button class="btn" style="background-color: #DE3660; color: white;">Get Started</button>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/slider-3.jpg" alt="slider-3" width="100%" height="100%">
                        <div class="carousel-caption">
                            <h3 class="text-left">Toughest Defense Lawyers for Your Case</h3>
                            <p class="text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quia voluptates, maxime eos asperiores sed praesentium ab, totam consequuntur fuga nulla nesciunt doloremque. Ullam sapiente quo adipisci impedit, commodi earum.</p>
                            <button class="btn" style="background-color: #DE3660; color: white;">Get Started</button>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
    </div>
    <div id="About" class="container-fluid mb-5 text-light">
        <div class="container">
            <div class="row mt-5 pt-5 ">
                <div class="col-lg-4 line">
                    <h1 class="ml-3 text-dark">Something About Law Firm</h1>
                </div>
                <div class="col-lg-8 mt-5">
                    <h5 class="ml-3 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolo.</h5>
                    <button class="ml-3 btn" style="background-color: #DE3660; color: white;">Read More</button>
                </div>
            </div>
            <div class="mt-5 pt-5 row">
                <div class="img shadow-lg p-4 mt-5 h-75 col-lg-6">
                    <img src="assets/img/about.jpg" alt="about" width="100%">
                </div>
                <div class="col-lg-6">
                    <h1 class="text-dark mt-5">Why Hire Us?</h1>
                    <h5 class="text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianonumy eirmod tempor invidunt ut labore et dolomagna aliquyam erat, sed diam voluptua.</h5><br>
                    <h4 class="text-dark"><i style="color: #DE3660;" class="fa fa-check"></i> Serving More Than 25 Years</h4>
                    <p class="ml-4 pl-2 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed dianonumy eirmod tempor invidunt.</p>
                    <h4 class="text-dark"><i style="color: #DE3660;" class="fa fa-check"></i> Great Case Portfolios</h4>
                    <p class="ml-4 pl-2 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed dianonumy eirmod tempor invidunt.</p>
                    <h4 class="text-dark"><i style="color: #DE3660;" class="fa fa-check"></i> Experienced Lawyers and Resources</h4>
                    <p class="ml-4 pl-2 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed dianonumy eirmod tempor invidunt.</p>
                    <h4 class="text-dark"><i style="color: #DE3660;" class="fa fa-check"></i> Satisfying Success Rate</h4>
                    <p class="ml-4 pl-2 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed dianonumy eirmod tempor invidunt.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="PractiseAreas" class="img1 mt-5 p-5 container-fluid">
        <div class="container">
            <h1 class="text-dark mt-5">Areas Of Practise</h1>
            <h5 class="text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Enim excepturi dolore provident soluta error <br> tenetur labore laboriosam! Eligendi.</h5>
            <div class="row">
                <div id="div1" class="col-lg-6">
                    <div style="padding: 10px; width: 100px; font-size: 60px; background-color: white;" class="shadow-sm rounded-circle">
                        <i class="ml-2 fa fa-briefcase"></i>
                    </div>
                    <div style="margin-left: 110px; margin-top: -85px;">
                        <h3 class="text-dark">Business Law</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed dianonumy eirmod tempor invidunt ulab dolore magna aliquyam erat.</p>
                    </div>
                </div>
                <div id="div2" class="col-lg-6">
                    <div style="padding: 10px; width: 100px; font-size: 60px; background-color: white;" class="shadow-sm rounded-circle">
                        <i class="ml-2 fa fa-graduation-cap"></i>
                    </div>
                    <div style="margin-left: 110px; margin-top: -85px;">
                        <h3 class="text-dark">Education Law</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed dianonumy eirmod tempor invidunt ulab dolore magna aliquyam erat.</p>
                    </div>
                </div>
                <div id="div3" class="col-lg-6">
                    <div style="padding: 10px; width: 100px; font-size: 60px; background-color: white;" class="shadow-sm rounded-circle">
                        <i class="ml-2 fa fa-trophy"></i>
                    </div>
                    <div style="margin-left: 110px; margin-top: -85px;">
                        <h3 class="text-dark">Employment Law</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed dianonumy eirmod tempor invidunt ulab dolore magna aliquyam erat.</p>
                    </div>
                </div>
                <div id="div4" class="col-lg-6">
                    <div style="padding: 10px; width: 100px; font-size: 60px; background-color: white;" class="shadow-sm rounded-circle">
                        <i class="ml-1 fa fa-users"></i>
                    </div>
                    <div style="margin-left: 110px; margin-top: -85px;">
                        <h3 class="text-dark">Family Law</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed dianonumy eirmod tempor invidunt ulab dolore magna aliquyam erat.</p>
                    </div>
                </div>
                <div id="div5" class="col-lg-6">
                    <div style="padding: 10px; width: 100px; font-size: 60px; background-color: white;" class="shadow-sm rounded-circle">
                        <i class="ml-1 fa fa-tv"></i>
                    </div>
                    <div style="margin-left: 110px; margin-top: -85px;">
                        <h3 class="text-dark">Financial Law</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed dianonumy eirmod tempor invidunt ulab dolore magna aliquyam erat.</p>
                    </div>
                </div>
                <div id="div6" class="col-lg-6">
                    <div style="padding: 10px; width: 100px; font-size: 60px; background-color: white;" class="shadow-sm rounded-circle">
                        <i class="ml-3 fa fa-user-secret"></i>
                    </div>
                    <div style="margin-left: 110px; margin-top: -85px;">
                        <h3 class="text-dark">Criminal Law</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed dianonumy eirmod tempor invidunt ulab dolore magna aliquyam erat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img2 container-fluid p-5">
        <div class="container text-center">
            <h1 class="text-light pt-5 mt-5"><b style="color: #DE3660;">25 </b>Years Of Experience In Various Cases</h1>
            <p class="text-light">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.Stet clita kasd gubergren.</p>
            <button style="background-color: #DE3660; color: white;" class="p-3 mt-5 btn btn-lg">Free Conslation</button>
        </div>
    </div>
    <div id="Team" class="container-fluid p-5">
        <div class="container">
            <h1 class="text-center text-dark">Our Expert Lawyer</h1>
            <p class="text-center text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianonumy eirmod tempor invidunt ut labore et dolore magna</p>
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/lawyer-1.jpg" alt="lawyer-1" class="rounded" width="100%">
                    <h5 class="text-center text-dark mt-3">Robert John</h5>
                    <p class="text-center text-secondary">Criminal Lawyer</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/lawyer-2.jpg" alt="lawyer-2" class="rounded" width="100%">
                    <h5 id="p2" class="text-center text-dark mt-3">John Doe</h5>
                    <p class="text-center text-secondary">Business Lawyer</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/lawyer-3.jpg" alt="lawyer-3" class="rounded" width="100%">
                    <h5 id="p3" class="text-center text-dark mt-3">Chris Dave</h5>
                    <p class="text-center text-secondary">Finance Lawyer</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/lawyer-4.jpg" alt="lawyer-4" class="rounded" width="100%">
                    <h5 id="p4" class="text-center text-dark mt-3">Micheal Jordan</h5>
                    <p class="text-center text-secondary">Family Lawyer</p>
                </div>
            </div>
        </div>
    </div>
    <div class="img3 p-5 container-fluid">
        <div class="container text-light text-center">
            <h1>From Our Clients</h1>
            <img src="assets/img/author.jpg" alt="author" class="rounded p-5">
            <h5><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, consequuntur non eius consequatur reprehenderit cumque odit molestias dignissimos deserunt sequi molestiae exercitationem delectus aliquid excepturi repellendus cum vero iure culpa?</i></h5>
            <h3>Robe Hope</h3>
            <p>Business Owner</p>
        </div>
    </div>
    <div id="Blog" class="container-fluid p-5">
        <div class="text-center container">
            <h1 class="text-dark">From The Blog</h1>
            <p class="text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianonumy eirmod tempor invidunt ut labore et dolore magna</p>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/blog-1.jpg" alt="blog-1" width="100%">
                    <h3 class="text-dark">Lorem ipsum dolor sitcns etetursa pscing elitr sed diannumy.</h3>
                    <p class="text-secondary">Lorem ipsum dolor sitcons etetursa pscing elitr, sed diannumy eirmod tempor iannum eirmod tempor invidunt</p>
                    <b class="text-dark">Read More...</b>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/blog-2.jpg" alt="blog-2" width="100%">
                    <h3 class="text-dark">Lorem ipsum dolor sitcns etetursa pscing elitr sed diannumy.</h3>
                    <p class="text-secondary">Lorem ipsum dolor sitcons etetursa pscing elitr, sed diannumy eirmod tempor iannum eirmod tempor invidunt</p>
                    <b class="text-dark">Read More...</b>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/blog-3.jpg" alt="blog-3" width="100%">
                    <h3 class="text-dark">Lorem ipsum dolor sitcns etetursa pscing elitr sed diannumy.</h3>
                    <p class="text-secondary">Lorem ipsum dolor sitcons etetursa pscing elitr, sed diannumy eirmod tempor iannum eirmod tempor invidunt</p>
                    <b class="text-dark">Read More...</b>
                </div>
            </div>
        </div>
    </div>
    <div id="Contact" class="img1 p-5 container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-dark">Free case Evalution</h1>
                <p class="text-secondary">Lorem ipsum dolor sitcons etetursa pscing elitr, sed diannumy eirmod tempor iannum eirmod tempor invidunt.Lorem ipsum dolor.</p>
                <h3 style="color: #DE3660;">Call us 24/7</h3>
                <h3 class="text-dark">000-2222-5555</h3>
                <p class="text-secondary">Lorem ipsum dolor sitcons etetursa pscing elitr, sed diannumy eirmod tempor iannum.</p>
            </div>
            <div class="col-md-6">
                <form action="Form.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <input type="text" name="Name" class="p-3 text-secondary form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <input type="text" name="E-mail" class="p-3 text-secondary form-control" placeholder="E-mail" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <input type="text" name="practise" class="p-3 text-secondary form-control" placeholder="Practise Area" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <textarea name="Message" cols="30" rows="5" class="p-3 text-secondary form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button style="background-color: #DE3660; color: white;" class="btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="p-5 container-fluid">
        <div class="container">
           <img src="assets/img/img.PNG" alt="img" width="100%">
        </div>
    </div>
    <div class="p-5 bg-dark container-fluid">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="mt-5 col-md-6">
                        <h1 class="text-light">Subscribe Our New Letter</h1>
                    </div>
                    <div class="mt-5 col-md-6">
                        <div class="input-group">
                            <input  type="text" class="bg-dark form-control text-secondary p-3" placeholder="Hello@yourdomains.com">
                            <div class="input-group-append">
                                <button style="background-color: #DE3660; color: white;" class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-5 pt-5">
                        <i style="font-size: xx-large;" class="text-light fa fa-university"> Law Firm</i>
                        <p class="text-light mt-3">Lorem ipsum dolor sit ametcons etur sadipscing elitr, sed nonumy eirmod tempor invidunt ut labore dolore magna aliquyam eirmod tempor invidunt ut labore.</p>
                    </div>
                    <div class="col-md-2 mt-5 pt-5 text-light">
                        <b style="font-size: large;">Recourses</b><br><br>
                        <p>Terms and condition</p>
                        <p>Privacy Policy</p>
                        <p>Cookie Policy</p>
                        <p>Complaints Policy</p>
                    </div>
                    <div class="col-md-2 mt-5 pt-5 text-light">
                        <b style="font-size: large;">Quick Link</b><br><br>
                        <p>Labour and employment</p>
                        <p>About</p>
                        <p>Intelllcult Property</p>
                        <p>Legal IT Services</p>
                    </div>
                    <div class="col-md-2 mt-5 pt-5 text-light">
                        <b style="font-size: large;">Follow US</b><br><br>
                        <p>Facebook</p>
                        <p>Twitter</p>
                        <p>Instagram</p>
                        <p>Linkedin</p>
                    </div>
                    <div class="col-md-12">
                        <div class="line2">
                        </div>
                        <p class="text-center mt-4 text-light">Template and Desigened and Developd by <i style="color: #DE3660;">Uideck</i></p>
                    </div>
                </div>
            </footer>
            <div>
                <a href="#" style="background-color: #DE3660; color: white; width: 50px;" class="mb-3 btn ml-5 back-to-top fixed-bottom" style="display: inline-block;"><i class="fa fa-upload"></i></a>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#div1").on({
                mouseenter: function(){
                $(this).css("color","#DE3660");                
                },
                mouseleave: function(){
                $(this).css("color","black");                
                },
            });
            $("#div2").on({
                mouseenter: function(){
                $(this).css("color","#DE3660");                
                },
                mouseleave: function(){
                $(this).css("color","black");                
                },
            });
            $("#div3").on({
                mouseenter: function(){
                $(this).css("color","#DE3660");                
                },
                mouseleave: function(){
                $(this).css("color","black");                
                },
            });
            $("#div4").on({
                mouseenter: function(){
                $(this).css("color","#DE3660");                
                },
                mouseleave: function(){
                $(this).css("color","black");                
                },
            });
            $("#div5").on({
                mouseenter: function(){
                $(this).css("color","#DE3660");                
                },
                mouseleave: function(){
                $(this).css("color","black");                
                },
            });
            $("#div6").on({
                mouseenter: function(){
                $(this).css("color","#DE3660");                
                },
                mouseleave: function(){
                $(this).css("color","black");                
                },
            });
        })
    </script>
</body>
</html>