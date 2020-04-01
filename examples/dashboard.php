<?php
    session_start();
    // ob_start(ob_gzhandler);
    $title = "Dashboard";
    //$acc_code = "G02";
    //require "access.php";
    require_once "header.php";
    require_once "sidebar.php";
    require "dbconn.php";
    require "dbfunc.php";
    require "general.php";
    require "date.php";     
?>
<!-- MAIN CONTENT START -->
       <!-- /.row -->
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

       
       <div class="content" style="min-height: calc(100vh - 160px);">
                     <div class="container-fluid">
                          <div class="row"> 
                             <div class="col-md-12">
        
          <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                     <div class="home-block">

                                    <div class="col-md-9 col-sm-12 home-block1">
                                        <div class="col-md-6 col-sm-6 home-block-main">
                                           
                                  <!--  <i class="fa fa-building fa-5x"></i>-->
                              
                               
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div><h3>Property</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              </div>

                       
                            <div class="panel-footer">
                                <a href="property.php" class="btn btn-info" role="button">View Details</a>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <!--<i class="fa fa-users fa-5x"></i>-->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div><h3>Tenants</h3></div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                               <a href="tenants.php" class="btn btn-info" role="button">View Details</a>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <!--<i class="fa fa-credit-card fa-5x"></i>-->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div><h3>Rent Invoices</h3></div>
                                </div>
                            </div>
                        </div>
                        <a href="rent.php">
                            <div class="panel-footer">
                                <a href="rent.php" class="btn btn-info" role="button">View Details</a>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <!-- <i class="fa fa-money fa-5x"></i>-->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div><h3>Expense</h3></div>
                                </div>
                            </div>
                        </div>
                        <a href="expense.php">
                            <div class="panel-footer">
                                <a href="expense.php" class="btn btn-info" role="button">View Details</a>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <!-- <i class="fa fa-money fa-5x"></i>-->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div><h3>Assets</h3></div>
                                </div>
                            </div>
                        </div>
                        <a href="expense.php">
                            <div class="panel-footer">
                                <a href="assets.php" class="btn btn-info" role="button">View Details</a>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <!-- <i class="fa fa-briefcase fa-5x"></i>-->
                                </div>
                               <!-- <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div><strong>Rent Collected (Ksh)</strong></div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>
<br>


<?php
               


    require_once "footer.php";
   // ob_end_flush();
?>