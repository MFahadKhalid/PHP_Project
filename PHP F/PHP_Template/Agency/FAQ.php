<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<div class="container-fluid">
<div class="container p-5">

        <b><h1 class="display-1">FAQ</h1></b>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a id="link1" class="text-dark card-link" data-toggle="collapse" href="#collapseOne"></i> <b> What include in the daily qouted ray>? </b></a>
            </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus? A, nobis? Vel nesciunt magnam vero. At repellat, necessitatibus reprehenderit, incidunt eum voluptate nihil similique ut veritatis, dignissimos iusto rem?</p>
                    </div>
                </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a id="link2" class="text-dark collapsed card-link" data-toggle="collapse" href="#collapseTwo"></i> <b>What is the rental's maligne plan?</b></a>
            </div>
                <div id="collapseTwo"  class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus? A, nobis? Vel nesciunt magnam vero. At repellat, necessitatibus reprehenderit, incidunt eum voluptate nihil similique ut veritatis, dignissimos iusto rem?</p>
                    </div>
                </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a id="link3" class="text-dark collapsed card-link" data-toggle="collapse" href="#collapseThree"></i> <b> What are your Extra insurance options?</b></a>
            </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus? A, nobis? Vel nesciunt magnam vero. At repellat, necessitatibus reprehenderit, incidunt eum voluptate nihil similique ut veritatis, dignissimos iusto rem?</p>
                    </div>
                </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a id="link4" class="text-dark collapsed card-link" data-toggle="collapse" href="#collapseFour"><b> Do I need to return the rentall with a full tank?</b></a>
            </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus? A, nobis? Vel nesciunt magnam vero. At repellat, necessitatibus reprehenderit, incidunt eum voluptate nihil similique ut veritatis, dignissimos iusto rem?</p>
                    </div>
                </div>
        </div>
        </div>
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