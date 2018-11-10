
<?php
require_once 'config.php';
require_once 'database.php';
$areaaffected ='';
$affectedstate='';
$affecteddistrict='';
$affectedtown='';
$affectedpin='';
$croptype='';
$firstname='';
$lastname='';
$username='';
$password='';
$status='';






  
if($_SERVER["REQUEST_METHOD"]=="POST")
{

if (empty($_POST["firstname"])) {
    $firstnameError = "Firstname is required";
  } else {
    $firstname = $_POST["firstname"];
  }

  if (empty($_POST["lastname"])) {
    $lastnameError = "Lastname is required";
  } else {
    $lastname = $_POST["lastname"];
  }

  if (empty($_POST["username"])) {
    $usernameError = "Username is required";
  } else {
    $username = $_POST["username"];
  }

  if (empty($_POST["password"])) {
    $passwordError = "Password is required";
  } else {
    $password = $_POST["password"];

  }

  if (isset($_POST['croptype'])) {
    $croptype = $_POST['croptype'];
}

if (empty($_POST["areaaffected"])) {
    $areaaffectedError = "Area affected is required";
  } else {
    $areaaffected = $_POST["areaaffected"];
  }
  if (empty($_POST["affectedstate"])) {
    $affectedstateError = "State is required";
  } else {
    $affectedstate = $_POST["affectedstate"];
  }

 if (empty($_POST["affecteddistrict"])) {
    $affecteddistrictError = "District ";
  } else {
    $affecteddistrict = $_POST["affecteddistrict"];
  }



  if (empty($_POST["affectedtown"])) {
    $affectedtownError = "Town/city is required";
  } else {
    $affectedtown = $_POST["affectedtown"];
  }

  if (empty($_POST["affectedpin"])) {
    $mobilenoError = "Pin is required";
  } else {
    $affectedpin = $_POST["affectedpin"];
  }

  


 










if( (!isset($areaaffectedError)) AND (!isset($affectedstateError)) AND (!isset($affecteddistrictError))  AND (!isset($affectedtownError)) AND (!isset($affectedtownError)) AND (!isset($affectedpinError)) AND (!isset($firstnameError)) AND (!isset($lastnameError)) AND (!isset($usernameError)) AND (!isset($passwordError)) )
{
  


   $sql = "INSERT INTO report (firstname,lastname,username,password,croptype, areaaffected,affectedstate,affecteddistrict, affectedtown, affectedpin,status) VALUES ( '" . $firstname . "', '" . $lastname . "', '" . $username . "', '" . $password . "','" . $croptype . "', '" . $areaaffected . "','" . $affectedstate . "','" . $affecteddistrict . "', '" . $affectedtown . "', '" . $affectedpin . "','" . $status . "');";
    

if (mysqli_query($conn, $sql)) {
      echo "Reported successfully";
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
          <a class="brand logo" href="index.html"><img src="assets/img/head.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="index.html">Home</a>
                </li>

                <li>
                  <a href="register.html">Register Complaint</a>
                </li>

                <li>
                  <a href="contact.html">Contact</a>
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
              <h3>REPORT CROP LOSS</h3>
              <p>Claim for Insurance!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<form action="reportloss.php" method="post" role="form" class="contactForm" style="margin-left: 300px">
  <div class="row">

    
     <div class="span4 form-group">
      <input type="text" name="firstname" class="form-control" id="name" placeholder="Firstname" value="<?php echo $firstname?>" />
       <?php
    if(isset($firstnameError)){
      echo  '<span class="text-danger">' .$firstnameError .'</span>';
    }
    ?>
    </div>

    <div class="span4 form-group">
      <input type="text" name="lastname" class="form-control" id="name" placeholder="Lastname" value="<?php echo $lastname?>" />
      <?php
    if(isset($lastnameError)){
      echo  '<span class="text-danger">' .$lastnameError .'</span>';
    }
    ?>
     
    </div>

     <div class="span4 form-group">
      <input type="text" name="username" class="form-control" id="name" placeholder="Username" value="<?php echo $username?>" />
       <?php
    if(isset($usernameError)){
      echo  '<span class="text-danger">' .$usernameError .'</span>';
    }
    ?>
    </div>

    <div class="span4 form-group">
      <input type="password" name="password" class="form-control" id="name" placeholder="Password" value="<?php echo $password?>" />
      <?php
    if(isset($passwordError)){
      echo  '<span class="text-danger">' .$passwordError .'</span>';
    }
    ?>
     
    </div>
    <div class="span4 form-group">
       <select class="form-dropdown validate[required]" name="croptype" style="width:370px" data-component="dropdown" required="">
            <option name=""  value="">Select crop type </option>
            <option  name="" value=" Rabi" > Rabi </option>
            <option  name="" value="Kharif" > Kharif </option>
      </select>
    </div>





    <div class="span4 form-group">
      <input type="text" name="areaaffected" class="form-control" id="name" placeholder="Area Affected" value="<?php echo $areaaffected?>"/>
       <?php
    if(isset($areaaffectedError)){
      echo  '<span class="text-danger">' .$areaaffectedError .'</span>';
    }
    ?>
      
    </div>

    <div class="span4 form-group">
      <input type="text" name="affectedstate" class="form-control" id="name" placeholder="State" value="<?php echo $affectedstate?>" />
       <?php
    if(isset($affectedstateError)){
      echo  '<span class="text-danger">' .$affectedstateError .'</span>';
    }
    ?>
    </div>

    <div class="span4 form-group">
      <input type="text" name="affecteddistrict" class="form-control" id="name" placeholder="District" value="<?php echo $affecteddistrict?>" />
      <?php
    if(isset($affecteddistrictError)){
      echo  '<span class="text-danger">' .$affecteddistrictError .'</span>';
    }
    ?>
     
    </div>

    <div class="span4 form-group">
      <input type="text" name="affectedtown" class="form-control" id="name" placeholder="Town/City" value="<?php echo $affectedtown?>" />
      <?php
    if(isset($affectedtownError)){
      echo  '<span class="text-danger">' .$affectedtownError .'</span>';
    }
    ?>
      
    </div>

    <div class="span4 form-group">
      <input type="text" name="affectedpin" class="form-control" id="name" placeholder="PIN" value="<?php echo $affectedpin?>" />
      <?php
    if(isset($affectedpinError)){
      echo  '<span class="text-danger">' .$affectedpinError .'</span>';
    }
    ?>
    </div>

    
     
    <div class="span4 form-group ">
      <h3 style= "color: #94c045" >SUPPORTING EVIDENCE</h3>
      <input type="file" name="evidence" class="form-control" id="fileupload" placeholder="Upload"  />
      
  </div>

    <div class="span8 form-group">

      <div class="text-center">
        <button class="btn btn-color btn-rounded" type="submit">Submit</button>
      </div>
    </div>
  </div>
</form>


</body>

</html>
