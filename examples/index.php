<?php
    session_start();
    //ob_start(ob_gzhandler);
    $title = "Dashboard";
   // $acc_code = "INDEX";
    //require "access.php";
    require_once "header.php";
    //require_once "sidebar.php";
?>
<!-- MAIN CONTENT START -->
<?php
   include("dbconn.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['name']);
      $password=mysqli_real_escape_string($conn,$_POST['password']); 
    
      $sql = "SELECT id FROM users WHERE username = '$myusername' and pass = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         session_start("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: dashboard.php");
       }
        elseif(isset($_SESSION['name']) && $_SESSION['name'] == 'admin') {
        session_start("myusername");
         $_SESSION['login_user'] == "admin";
         
         header("location: dashboard.php");
       }
      else {
          echo "<script>alert('invalid username/password');
      window.location.href= 'index.php';</script>";
      }
    }
?>
<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    
  </nav>
   <html>
         <head>
            <style>
                body  {
                  background-image: url('../assets/img/dbb5.jpg');
                  background-color: grey;
                      }
            </style>
        </head>
        <body>
        </body>
        </html>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-4 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
              </div><br>
                <p class="description text-center"></p>
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="USERNAME">
                  </div><br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="PASSWORD">
                  </div><br>
                </div>
             
             <div class="text-center">
              <button type="submit" name="login" class="btn btn-primary btn-labeled">Sign in<span class="btn-label btn-label-right"></span></button>
              <button type="reset" name="cancel" class="btn btn-primary ">cancel<span class="btn-label btn-label-right"></span></button></div>
              <br>
              <br>
             
            </form>
          </div>  
        </div>
      </div>
    </div>
</div>
</body>
