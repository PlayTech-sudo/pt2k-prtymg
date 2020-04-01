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
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                        </div>
                                        <h4 class="card-title">Add Expense</h4>
                                    </div>
                                    <div class="card-body">
                                        <form name="form4" action="" method="POST">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Property Name</label>
                                                <input type="text" class="form-control" id="p_name" name="pname" required="" autofocus="">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Tenant Name</label>
                                                <input type="text" class="form-control" id="pt_name" required="" name="ptname">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Expense Type </label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                           <div class="form-group bmd-form-group">
                                                <label >Summary </label>
                                                <input type="text" class="form-control" id="p_size" required="" name="psize">
                                            </div>
                                           <!--  <div class="form-group bmd-form-group">
                                                <label >Email</label>
                                                <input type="text" class="form-control" id="pemail" required="" name="pemail">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Property</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Reg date</label>
                                                <input type="date" class="form-control" id="p_rd" required="" name="rdate">
                                            </div>
                                             <div class="form-group bmd-form-group">
                                                <label >Status</label>
                                                <input type="text" class="form-control" id="p_stat" required="" name="pstat">
                                            </div>-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-success" name="addexpense" type="submit">Add</button>
<?php


if (isset($_POST['addexpense']))
 {
    $sql = "INSERT INTO expense (prop_name, tent_name, exp_type, summary) VALUES ('".$_POST["pname"]."','".$_POST["ptname"]."','".$_POST["ptype"]."','".$_POST["psize"]."')";


    
    if (mysqli_query($conn, $sql)) {
        $message = "Record Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";

            }
             else {
                 $message = "Record Not Added, Duplicate Entry ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
?>
                                                    <button class="btn btn-danger" type="reset">Clear</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
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



                    
    <?php

    require_once "footer.php";
    //ob_end_flush();

?>
