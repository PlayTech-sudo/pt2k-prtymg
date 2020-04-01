<?php
    session_start();    
    // ob_start(ob_gzhandler);
    $title = "user";
    $acc_code = "G02";
    require "access.php";
   // require_once "./template/header.php";
    //require_once "./template/sidebar.php";
    //require "functions/dbconn.php";
    //require "functions/dbfunc.php";
?>

   <div class="content" style="min-height: calc(100vh - 160px);">
    <div class="container-fluid">
        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">add</i>
                                        </div>
                                        <h4 class="card-title">Add Property</h4>
                                    </div>
                                    <div class="card-body">
                                        <form name="form4" action="" method="POST">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Property ID</label>
                                                <input type="text" class="form-control" id="p_id" name="pid" required="" autofocus="">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Property Name</label>
                                                <input type="text" class="form-control" id="p_name" required="" name="pname">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"> Property Type</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Property size</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                            <div class="form-group bmd-form-group">
                                                <label >Location</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                             <div class="form-group bmd-form-group">
                                                <label >Status</label>
                                                <input type="text" class="form-control" id="p_type" required="" name="ptype">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-success" name="addprod" type="submit">Add</button>
                                                    <?php

if (isset($_POST['addprod'])) {
    $sql = "INSERT INTO project (prop_id, prop_name, prop_type, prop_size, prop_location,prop_status) VALUES ('".$_POST["pid"]."','".$_POST["pname"]."','".$_POST["ptype"]."','".$_POST["psize"]."','".$_POST["ploc"]."','".$_POST["pstat"]."')";
    if (mysqli_query($conn, $sql)) {
        $message = "Record Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                            
                            <div class="col-md-8 col-sm-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">view_list</i>
                                        </div>
                                        <h4 class="card-title">Project Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Project_ID</th>
                                                        <th> Name</th>
                                                        <th> Type</th>
                                                        <th> size</th>
                                                        <th>location</th>
                                                        <th> status</th>
                                                    <th colspan="2" align="center">             action </th>
                                                    </tr> 
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $res = getData($conn, "project");
                                                        foreach ($res as $role) {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $role['prop_id']; ?></td>
                                                        <td><?php echo $role['prop_name']; ?></td>
                                                        <td><?php echo $role['prop_type']; ?></td>
                                                         <td><?php echo $role['prop_size']; ?></td>
                                                        <td><?php echo $role['prop_location']; ?></td>
                                                         <td><?php echo $role['prop_status']; ?></td>
                                                        <td class="text-center td-actions">
                                                            <a rel="tooltip" href="edit_project.php?editproj=<?php echo $role['proj_id']; ?>" class="btn btn-success btn-link" title="Edit">
                                                              <i class="material-icons">edit</i>
                                                            </a>
                                                        </td><td>
                                                           <a rel="tooltip" href="copy_project.php?editproj=<?php echo $role['proj_id']; ?>" class="btn btn-success btn-link" title="Copy">
                                                              <i class="material-icons">file_copy</i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a rel="tooltip" href="del_project.php?delproj=<?php echo $role['proj_id']; ?>" class="btn btn-danger btn-link" title="Delete">
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
                    
    <?php





            /*<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                </div>
            </div>        
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Property Details</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            
                                             <!--    <div class="form-group">
                                                   <label>Company (disabled)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc."> 
                                                </div> -->
                                            

                                           <!-- <div class="col-md-3 px-2">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value=" ">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value=" ">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="Country" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="ABC"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="" alt="...">
                                            <h5 class="title"> USERNAME </h5>
                                        </a>
                                        <p class="description">
                                            PLACE,COUNTRY
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "DESCRIPTION OF USER"
                                        <br> 
                                        <br> 
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--   -->
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
 -->
<!--</body>
<!--   Core JS Files   -->
<!--<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ 
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc 
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! 
<script src="../assets/js/demo.js"></script>

</html>

//</div>
//<!-- MAIN CONTENT ENDS -->*/

    require_once "./template/footer.php";
    ob_end_flush();
?>