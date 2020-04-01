<?php
    session_start();    
    // ob_start(ob_gzhandler);
    $title = "user";
    //$acc_code = "G02";
  //  require "access.php";
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
                                        <h4 class="card-title">Expense Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table table-bordered table-striped table-hover">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px">Property_Name</th>
                                                        <th> Tenant_Name</th>
                                                        <th> Expense_Type</th>
                                                        <th> Summary</th>
                                                   <!-- <th colspan="2" align="center">             action </th>-->
                                                    </tr> 
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $res = getData($conn, "expense");
                                                        foreach ($res as $role) {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $role['prop_name']; ?></td>
                                                        <td><?php echo $role['tent_name']; ?></td>
                                                        <td><?php echo $role['exp_type']; ?></td>
                                                         <td><?php echo $role['summary']; ?></td>
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
                                                            <a rel="tooltip" href="exp_del.php?delexp=<?php echo $role['prop_name']; ?>" class="btn btn-danger btn-link" title="Delete">
                                                              <i class="material-icons">delete</i>
                                                            </a>
                                                            <a href="pdf_exp.php" class="btn btn-danger" role="button">print</a>

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
    //ob_end_flush();

?>
