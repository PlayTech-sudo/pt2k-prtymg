<?php
    session_start();    
    // ob_start(ob_gzhandler);
    $title = "user";
    //$acc_code = "G02";
    //require "access.php";
   require_once "header.php";
    require_once "sidebar.php";
    require "dbconn.php";
    require "dbfunc.php";
?>

   <div class="content" style="min-height: calc(100vh - 160px);">
    <div class="container-fluid">
        <div class="row">
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
                            
                            
                            <div class="col-md-12">
                                <div class="panel panel-danger">
                                    <div class="panel-heading clearfix">
                                       <!-- <div class="card-icon">
                                            <i class="material-icons">view_list</i>
                                        </div>-->
                                        <a href="property1.php" class="btn btn-info" role="button">PROPERTY</a>
                                        <a href="expense1.php" class="btn btn-info" role="button">EXPENSE</a>
                                        <a href="assets1.php" class="btn btn-info" role="button">ASSETS</a>
                                        <a href="tenants1.php" class="btn btn-info" role="button">TENANTS</a>   
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
    ob_end_flush();
?>