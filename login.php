<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="assets/css/loginstyle.css">


 
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo1.png"/>

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="login.php" style="color:#fff;">LOGIN</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="dashboard.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-key fa-x"></i>Admin </a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user fa-x"></i>    Register User </a> 
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-users fa-x"></i>  See Users</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gear fa-x"></i>Settings</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-bell-o fa-x"></i>Notifications </a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-envelope-o fa-x"></i>Mail </a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-comments-o fa-x"></i>Support</a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     
                    
                    <!-- <h2>ADMIN DASHBOARD</h2>  --> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                            <!-- <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.-->  
                            
                        </div>
                    </div>
                    </div>
                  

   





<html>

<body>

<h2></h2>

<form class="form" action="index.html" method="post">
  <div class="imgcontainer">
    <img src="assets/img/.jpg" alt="profile" class="">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>





<?php
if (isset ($_POST['submit']))
{
    $user=$_POST['username'];
    $pwd=$_POST['password'];
  echo "hhhhh".$user;
  echo "password".$pwd;
  $con = mysqli_connect("localhost:3307","root","","progress");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $query="SELECT * FROM admin where username='$user' && password='$pwd'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows ($data);

    echo $total;
    if($total==1)
    {
       $_SESSION['user_name']=$user;
       header('location:index.php');

   }
  else{
      echo "login failed";
   }
}
?>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
