<?php
    session_start();    
    // ob_start(ob_gzhandler);
    $title = "user";
   // $acc_code = "G02";
    //require "access.php";
    require_once "header.php";
    require_once "sidebar.php";
    require "dbconn.php";
    require "dbfunc.php";
?>





            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!DOCTYPE html>
        <html>
         <head>
            <style>
                body  {
                  background-image: url('../assets/img/db1.jpg');
                  background-color: #cccccc;
                      }
            </style>
        </head>
        <body>
        </body>
        </html>
         
         <a href="ri_paid.php" class="btn btn-lg" role="button">PAID</a>
                           <!--  <div class="card">
                               <div class="card-header">
                                    <h4 class="card-title">Light Bootstrap Table Heading</h4>
                                    <p class="card-category">Created using Montserrat Font Family</p>
                                </div>
                                <div class="card-body">
                                    <div class="typography-line">
                                        <h1>
                                            <span>Header 1</span>The Life of LB Dashboard </h1>
                                    </div>
                                    <div class="typography-line">
                                        <h2>
                                            <span>Header 2</span>The Life of Light Bootstrap Dashboard </h2>
                                    </div>
                                    <div class="typography-line">
                                        <h3>
                                            <span>Header 3</span>The Life of Light Bootstrap Dashboard </h3>
                                    </div>
                                    <div class="typography-line">
                                        <h4>
                                            <span>Header 4</span>The Life of Light Bootstrap Dashboard </h4>
                                    </div>
                                    <div class="typography-line">
                                        <h5>
                                            <span>Header 5</span>The Life of Light Bootstrap Dashboard </h5>
                                    </div>
                                    <div class="typography-line">
                                        <h6>
                                            <span>Header 6</span>The Life of Light Bootstrap Dashboard </h6>
                                    </div>
                                    <div class="typography-line">
                                        <p>
                                            <span>Paragraph</span>
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                        </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Quote</span>
                                        <blockquote>
                                            <p class="blockquote blockquote-primary">
                                                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                                <br>
                                                <br>
                                                <small>
                                                    - Noaa
                                                </small>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="typography-line">
                                        <span>Muted Text</span>
                                        <p class="text-muted">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                        </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Primary Text</span>
                                        <p class="text-primary">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Info Text</span>
                                        <p class="text-info">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Success Text</span>
                                        <p class="text-success">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Warning Text</span>
                                        <p class="text-warning">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                        </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Danger Text</span>
                                        <p class="text-danger">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="typography-line">
                                        <h2>
                                            <span>Small Tag</span>
                                            Header with small subtitle
                                            <br>
                                            <small>Use "small" tag for the headers</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>



    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>

</body>-->
<!--   Core JS Files   -->

<?php
/*
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>*/

require_once "footer.php";
   // ob_end_flush();
?>