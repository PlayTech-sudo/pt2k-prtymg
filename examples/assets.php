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
                                        <h4 class="card-title">Add Assets</h4>
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
                                                <label class="bmd-label-floating"> Property Type</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Asset Type</label>
                                                <input type="text" class="form-control" id="a_type" required="" name="atype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Location</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ploc">
                                            </div>
                                             <div class="form-group bmd-form-group">
                                                <label >Summary</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="pstat">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-success" name="addassets" type="submit">Add</button>
                                                    <?php

if (isset($_POST['addassets'])) {
    $sql = "INSERT INTO assets ( prop_name, prop_type, ass_type, location, summary) VALUES ('".$_POST["pname"]."','".$_POST["ptype"]."','".$_POST["atype"]."','".$_POST["ploc"]."','".$_POST["pstat"]."')";
    if (mysqli_query($conn, $sql)) {
        $message = "Record Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";

            } else {
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
                                        <h4 class="card-title">Assets Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table table-bordered table-striped table-hover">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px">Property Name</th>
                                                        <th>  Property Type</th>
                                                        <th>Asset Type</th>
                                                       
                                                        <th>Location</th>
                                                        <th> Summary</th>
                                                   <!-- <th colspan="2" align="center">             action </th>-->
                                                    </tr> 
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $res = getData($conn, "assets");
                                                        foreach ($res as $role) {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $role['prop_name']; ?></td>
                                                         <td><?php echo $role['prop_type']; ?></td>
                                                        <td><?php echo $role['ass_type']; ?></td>
                                                         <td><?php echo $role['location']; ?></td>
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
                                                            <a rel="tooltip" href="assets_del.php?delassets=<?php echo $role['prop_name']; ?>" class="btn btn-danger btn-link" title="Delete">
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