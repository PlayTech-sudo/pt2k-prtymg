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
                                       <div class="panel-heading">
         
                  </div>
                  </div>        
                  

        <!-- <div class="card-icon">
                                            <i class="material-icons">view_list</i>
                                        </div>-->
                                        <h4 class="card-title">Tenant Details</h4>
                                    
                                    <div class="panel-body">
                                        <div class="table table-bordered table-striped table-hover">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px">Tenant_ID</th>
                                                        <th> Name</th>
                                                        <th> Gender</th>
                                                        <th> Phone</th>
                                                        <th>Email</th>
                                                        <th>Property</th>
                                                        <th>Reg date</th>
                                                        <th> status</th>
                                                   <!-- <th colspan="2" align="center">             action </th>-->
                                                    </tr> 
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $res = getData($conn, "tentants");
                                                        foreach ($res as $role) {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $role['tent_id']; ?></td>
                                                        <td><?php echo $role['name']; ?></td>
                                                        <td><?php echo $role['gender']; ?></td>
                                                         <td><?php echo $role['phone']; ?></td>
                                                        <td><?php echo $role['email']; ?></td>
                                                         <td><?php echo $role['property']; ?></td>
                                                          <td><?php echo $role['reg_date']; ?></td>
                                                         <td><?php echo $role['status']; ?></td>
                                                        <!--<td class="text-center td-actions">
                                                            <a rel="tooltip" href="edit_project.php?editproj=<?php echo $role['proj_id']; ?>" class="btn btn-success btn-link" title="Edit">
                                                              <i class="material-icons">edit</i>
                                                            </a>
                                                        </td><td>
                                                           <a rel="tooltip" href="copy_project.php?editproj=<?php echo $role['proj_id']; ?>" class="btn btn-success btn-link" title="Copy">
                                                              <i class="material-icons">file_copy</i>
                                                            </a>
                                                        </td>-->

                                                        <td>
                                                            <a rel="tooltip" href="tent_del.php?deltent=<?php echo $role['tent_id']; ?>" class="btn btn-danger btn-link" title="Delete">
                                                              <i class="material-icons">delete</i>
                                                            </a>
                                                            <a href="pdff.php" class="btn btn-danger" role="button">print</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }

                                                    ?>
                                                </tbody>
                                            </table>
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
   ob_end_flush();
?>