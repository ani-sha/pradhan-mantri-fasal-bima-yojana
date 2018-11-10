<?php  
require_once 'config.php';
require_once 'database.php';

$sql = "SELECT * FROM farmers";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

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
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html">
              <img src="assets/img/head.png" alt="" />
          </a>

          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="admin_index.php">Home</a>
                </li>

                
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <!-- Subhead
================================================== -->
  <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>ADMIN DASHBOARD</h3>
              <p>
                At your help!
              </p>
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
          <aside>
            <div class="widget">
              <h4>YOUR DASHBOARD</h4>
              <ul class="">
              	<li><a href="admin_dashboard.php">DASHBOARD</a></li>
                <li class=""><a href="registered_users.php">REGISTERED FARMER DATABASE</a></li>
                <li><a href="registered_reports.php">CROPLOSS REPORT DATABASE</a></li>
                <li><a href="/facerecognition/detector.py">OPENCV VERIFICATION</a></li>
               
                <li><a href="logout.php">LOGOUT</a></li>
              </ul>
            </div>
            <div class="widget">
              <h4>Social network</h4>
              <ul class="social-links">
                <li><a href="#" title="Twitter"><i class="icon-rounded icon-32 icon-twitter"></i></a></li>
                <li><a href="#" title="Facebook"><i class="icon-rounded icon-32 icon-facebook"></i></a></li>
                <li><a href="#" title="Google plus"><i class="icon-rounded icon-32 icon-google-plus"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="icon-rounded icon-32 icon-linkedin"></i></a></li>
                <li><a href="#" title="Pinterest"><i class="icon-rounded icon-32 icon-pinterest"></i></a></li>
              </ul>
            </div>
          </aside>
        </div>

        <div class="span8" style="margin: -450px 120px 70px 680px">



        	<?php
  $sql = "SELECT * FROM farmers WHERE id = " .  $_GET['id'];
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo 'Firstname :' . $user['firstname'];?><br><br>
    <?php echo 'Lastname : '. $user['lastname'];?><br><br>
   
    <?php echo 'Username : '. $user['username'];?><br><br>
    <?php echo 'Date of Birth : '. $user['dob'];?><br><br>
    <?php echo 'Gender : '. $user['gender'];?><br><br>
    <?php echo 'Caste : '. $user['caste'];?><br><br>
    <?php echo 'Aadhar Number : '. $user['aadharno'];?><br><br>
    <?php echo 'Mobile Number : '. $user['mobileno'];?><br><br>
    <?php echo 'Address Line 1 : '. $user['addressline1'];?><br><br>
    <?php echo 'Address Line 2 : '. $user['addressline2'];?><br><br>
   
    <?php echo 'State : '. $user['state'];?><br><br>
     <?php echo 'City : '. $user['city'];?><br><br>
    <?php echo 'District : '. $user['district'];?><br><br>
    <?php echo 'Pin: '. $user['pin'];?><br><br>
    <?php echo 'Farmer Type : '. $user['farmertype'];?><br><br>
    <?php echo 'Farmer Category : '. $user['farmercategory'];?><br><br>
    <?php echo 'Bank Name : '. $user['bankname'];?><br><br>
    <?php echo 'Branch Name : '. $user['branchname'];?><br><br>
    <?php echo 'IFSC Code : '. $user['ifsc'];?><br><br>
    <?php echo 'Savings A/C Number : '. $user['savings'];?><br><br>

















<?php
  } else {
    echo "No user found!";
  }
  ?>


        </div>




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

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>


</body>

</html>
