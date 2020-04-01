<?php
    session_start();    
    // ob_start(ob_gzhandler);
    $title = "user";
   // $acc_code = "G02";
   // require "access.php";
   require_once "header.php";
    require_once "sidebar.php";
    require "dbconn.php";
    require "dbfunc.php";
    require "date.php";
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
                                        <h4 class="card-title">Add Payment</h4>
                                    </div>
                                    <div class="card-body">
                                        <form name="form4" action="" method="POST">
                                           <!-- <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Property ID</label>
                                                <input type="text" class="form-control" id="p_id" name="pid" required="" autofocus="">
                                            </div>-->
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Property Name</label>
                                                <input type="text" class="form-control" id="p_name" required="" name="pname">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"> Tenant Name</label>
                                                <input type="text" class="form-control" id="t_name" required="" name="tname">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Rent</label>
                                                <input type="text" class="form-control" id="r_type" required="" name="rtype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Paid Amount</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Due Amount</label>
                                                <input type="text" class="form-control" id="due_amt" required="" name="damt">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Date</label>
                                                <input type="date" class="form-control" id="pdate" required="" name="pdate">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Status</label>
                                                <input type="text" class="form-control" id="pstat" required="" name="pstat">
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-success" name="addripaid" type="submit">Add</button>
                                                    <?php

if (isset($_POST['addripaid'])) {
    $sql = "INSERT INTO ripaid ( prop_name, tent_name, rent, paid_amt, due_amt, paid_date, status) VALUES ('".$_POST["pname"]."','".$_POST["tname"]."','".$_POST["rtype"]."','".$_POST["ptype"]."','".$_POST["damt"]."','".$_POST["pdate"]."','".$_POST["pstat"]."')";
    if (mysqli_query($conn, $sql)) {
        $message = "Record Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";

            } else {
                 $message = "Record Not Added, Duplicate Entry ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
         $sql = "UPDATE `ripaid` SET `rent` = ( SELECT SUM(`rent` + `due_amt`) WHERE `prop_name` = 'Rachana' )";
        $sql = "UPDATE `ripaid` SET `due_amt` = ( SELECT (`rent` - `paid_amt`) WHERE `prop_name` = 'Rachana' )";
          
        
                 $res = mysqli_query($conn, $sql);
        
       // $sql = "UPDATE ripaid (rent) WHERE (SELECT rent+due_amt FROM ripaid WHERE '".$_POST["pname"]."','".$_POST["tname"]."')";
      // $sql = "UPDATE ripaid (due_amt) WHERE '".$_POST["tname"]."','".$_POST["pname"]."'";

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
                                        <h4 class="card-title">Paid Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table table-bordered table-striped table-hover">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 150px">Property Name</th>
                                                        <th>Tenant Name</th>
                                                        <th>Rent</th>
                                                        <th>Paid Amount</th>
                                                        <th>Due Amount</th>
                                                        <th>Paid Date</th>
                                                        <th>Status</th>
                                                   <!-- <th colspan="2" align="center">             action </th>-->
                                                    </tr> 
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $res = getData($conn, "ripaid");
                                                        foreach ($res as $role) {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $role['prop_name']; ?></td>
                                                         <td><?php echo $role['tent_name']; ?></td>
                                                         <td><?php echo $role['rent']; ?></td>
                                                        <td><?php echo $role['paid_amt']; ?></td>
                                                        
                                                         <td><?php echo $role['due_amt']; ?></td>
                                                         <td><?php echo $role['paid_date']; ?></td>
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
                                                            <a rel="tooltip" href="del_ripaid.php?delripaid=<?php echo $role['prop_name']; ?>" class="btn btn-danger btn-link" title="Delete">
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
    ob_end_flush();
?>