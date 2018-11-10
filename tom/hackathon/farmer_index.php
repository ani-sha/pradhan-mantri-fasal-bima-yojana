





<?php  
require_once 'config.php';
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST"  )  {
  $sql = "SELECT id,isFarmer FROM farmers WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    session_start();
    if($user['isFarmer']== 0){
    $_SESSION['user_logged_in'] = true ;
   
    $_SESSION['logged_in_user_id'] = $user['id'] ;
    header('Location:reportloss.php');
}else{
  header('Location:farmer_index.php');
}
   
  } else {
    $error = "Username and password does not match!";
  }
  
}
   ?>


   <?php  
require_once 'config.php';
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST"  )  {
  $sql = "SELECT id,isFarmer FROM farmers WHERE username = '" . $_POST['USERNAME'] . "' AND password = '" . $_POST['PASSWORD'] . "' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    session_start();
    if($user['isFarmer']== 0){
    $_SESSION['user_logged_in'] = true ;
   
    $_SESSION['id'] = $user['id'] ;
     header('Location:edit_profile.php?id='.$user['id'] );
}else{
  header('Location:farmer_index.php');
}
   
  } else {
    $error = "Username and password does not match!";
  }
  
}
   ?>


   <?php  
   $SQL = "SELECT * FROM report";
  $results = mysqli_query($conn, $SQL);
  $row = mysqli_fetch_array($results);
require_once 'config.php';
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST"  )  {
  $sql = "SELECT id,isFarmer FROM farmers WHERE username = '" . $_POST['USER'] . "' AND password = '" . $_POST['PASS'] . "' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    session_start();
    if($user['isFarmer']== 0){
    $_SESSION['user_logged_in'] = true ;
   
    $_SESSION['logged_in_user_id'] = $user['id'] ;
    header('Location:application_status.php?id='.$row['id'] );
}else{
  header('Location:farmer_index.php');
}
   
  } else {
    $error = "Username and password does not match!";
  }
  
}
   ?>









   <?php  



   $sq = "SELECT * FROM report";
  $res = mysqli_query($conn, $sq);
  $row = mysqli_fetch_array($res);
require_once 'config.php';
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST"  )  {
  $sql = "SELECT id,isFarmer FROM farmers WHERE username = '" . $_POST['user'] . "' AND password = '" . $_POST['pass'] . "' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    session_start();
    if($user['isFarmer']== 0){
    $_SESSION['user_logged_in'] = true ;
   
    $_SESSION['logged_in_user_id'] = $user['id'] ;
    header('Location:verification_status.php?id='.$row['id'] );
}else{
  header('Location:farmer_index.php');
}
   
  } else {
    $error = "Username and password does not match!";
  }
  
}
   ?>
















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pradhan Mantri Fasal Bima Yojana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/sequence.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="farmer_index.php"><img src="assets/img/head.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="farmer_index.php">Home</a>
                </li>

                <li>
                  <a href="about.php">About Us</a>
                </li>

                <li>
                  <a href="contact.php">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <li>
                    <div class="info animate-in">
                      <h2>register as farmers</h2>
                      <br>
                      <h3>Solve your insurance problems</h3>
                      <p>
                       Now have quicker and secure claim access through face verification and online proof of your claim.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img animate-in" src="assets/img/slides/sequence/img-1.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="well">
            <div class="centered">
              <i class="icon-circled icon-64 icon-leaf active"></i>
              <h4>FARMER CORNER</h4>
              <div class="dotted_line">
              </div>
              <p>
                Welcome. For crop insurance application, register as farmer.
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" data-toggle="modal" data-target="#tommy" type="submit" >Register</button>
                  <!-- Modal -->
  <div class="modal fade" id="tommy" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Farmer Portal</h4>
        </div>
        <div class="modal-body">
          <button type="button" class=" btn btn-success" onclick="location.href='/hackathon/register.php';" >  Register as Farmer</button> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp OR &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
           <button type="button" class=" btn btn-success" data-toggle="modal" data-target="#anu">  Edit Farmer Profile</button> 
            <div class="modal fade" id="anu" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Please Log In to continue!</h4>
                        </div>
                        <div class="modal-body" id="edit">
                          <form method="post">
                            <div class="input-group">
                              <input  type="text" class="form-control" name="USERNAME" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                              <input  type="password" class="form-control" name="PASSWORD" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-color btn-rounded" >Log In</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
                  



                </div>
              </p>
            </div>
          </div>
        </div>
      

        <div class="span4">
          <div class="well">
            <div class="centered">
              <i class="icon-circled icon-64 icon-leaf active"></i>
              <h4>REPORT CROP LOSS</h4>
              <div class="dotted_line">
              </div>
              <p>
                Report crop loss details and claim the insurance.
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" data-toggle="modal" data-target="#myModal" type="submit">Report</button>

                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Please Log In to continue!</h4>
                        </div>
                        <div class="modal-body">
                          <form method="post" id="report">
                            <div class="input-group">
                              <input  type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                              <input  type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-color btn-rounded" >Log In</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <div class="centered">
              <i class="icon-circled icon-64 icon-leaf active"></i>
              <h4>CHECK STATUS</h4>
              <div class="dotted_line">
              </div>
              <p>
                Check the crop loss application status and get your insurance.
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" data-toggle="modal" data-target="#tom"  type="submit">Check</button>
                  <!-- Modal -->
  <div class="modal fade" id="tom" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Check Your Status</h4>
        </div>
        <div class="modal-body">
          <button type="button" class=" btn btn-success" data-toggle="modal" data-target="#verify">  Application Status</button> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp OR &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
           <button type="button" class=" btn btn-success" data-toggle="modal" data-target="#physical">  Physical Verification Status</button> 
           <div class="modal fade" id="physical" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Please Log In to continue!</h4>
                        </div>
                        <div class="modal-body">
                          <form method="post" >
                            <div class="input-group">
                              <input  type="text" class="form-control" name="user" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                              <input  type="password" class="form-control" name="pass" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-color btn-rounded" >Log In</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>



           <div class="modal fade" id="verify" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Please Log In to continue!</h4>
                        </div>
                        <div class="modal-body" id="edit">
                          <form method="post">
                            <div class="input-group">
                              <input  type="text" class="form-control" name="USER" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                              <input  type="password" class="form-control" name="PASS" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-color btn-rounded" >Log In</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
        </div>
        
        
      </div>
      
    </div>
  </div>
  
                  

        </div>
        
        
      </div>
      
    </div>
  </div>
  
</div>

                </div>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Footer
 ================================================== -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="widget">
          <h5>Browse Pages</h5>
          <ul class="regular">
            <li><a href="#">Home</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
            <!-- <li><a href="#"></a></li> -->
          </ul>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5>What's New?</h5>
          <ul class="regular">
            <li>Face ID verification for secure access</li>
            <li>Quicker claim access through the right channels </li>
            <li>Direct credits into bank accounts</li>
          </ul>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5>Developers</h5>
          <ul class="regular">
            <li>Tamanna Nayak</li>
            <li>Anisha Mohanty</li>
            <li>Dikshant Brahma</li>
            <li>Adarsh Brata</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="verybottom">
    <div class="container">
      <div class="row">
        <div class="span">
          <p>
            This website belongs to Department of Agriculture, Cooperation and Farmers Welfare, Ministry of Agriculture and Farmers Welfare, Government of India.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- JavaScript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>
  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
