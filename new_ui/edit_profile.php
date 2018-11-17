<?php
require_once 'config.php';
require_once 'database.php';




$sql = "SELECT * FROM farm WHERE id = " . $_GET['id'] ;
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows($result)>0){
  $user = mysqli_fetch_array($result);






if($_SERVER["REQUEST_METHOD"]=="POST"){



    $update =mysqli_query( $conn,"UPDATE admin SET
  firstname =  '" . $_POST['firstname'] . "' ,
  lastname =  '" . $_POST['lastname'] . "' ,
  password =  '" . $_POST['password'] . "' ,
  confirmpassword =  '" . $_POST['confirmpassword'] . "' ,
  gender =  '" . $_POST['gender'] . "' ,
  aadharno =  '" . $_POST['aadharno'] . "' ,
  mobileno =  '" . $_POST['mobileno'] . "' ,
   username =  '" . $_POST['username'] . "' ,
  addressline1 =  '" . $_POST['addressline1'] . "' ,
  addressline2 =  '" . $_POST['addressline2'] . "' ,

  state =  '" . $_POST['state'] . "' ,
   city =  '" . $_POST['city'] . "' ,
  district =  '" . $_POST['district'] . "' ,
  pin=  '" . $_POST['pin'] . "'

  WHERE id = '" . $_GET['id']."'");


   if ($update){

    session_start();
      $_SESSION["message"] = "User updated successfully";
      header('Location: admin_dashboard.php');
      exit;
    } else {
      echo "Error updating record: " . mysqli_error($conn);
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

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
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
              <h3>EDIT YOUR PROFILE</h3>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <form action="" method="post" id = "registrationForm" role="form" class="contactForm" style="margin-left: 300px" >


            <div class="row">
              <div class="span4 form-group "style="margin-left: 2px">
                <input type="text" name="firstname" class="form-control" id="name" style="height: 40px" placeholder="First Name" value="<?php echo $user['firstname']?>" />
                <?php
    if(isset($firstnameError)){
      echo  '<span class="text-danger">' .$firstnameError .'</span>';
    }
    ?>
              </div>



              <div class="span4 form-group">
                <input type="text" name="lastname" class="form-control" id="name" style="height: 40px" placeholder="Last Name" value="<?php echo $user['lastname']?>"  />
                <?php
    if(isset($lastnameError)){
      echo  '<span class="text-danger">' .$lastnameError .'</span>';
    }
    ?>

              </div>



               <div class="row">
              <div class="span4 form-group ">
                <input type="password" name="password" class="form-control" id="" style="height: 40px" placeholder="Password" value="<?php echo $user['password']?>" />
                 <?php
    if(isset($passwordError)){
      echo  '<span class="text-danger">' .$passwordError .'</span>';
    }
    ?>

              </div>



              <div class="span4 form-group">
                <input type="password" name="confirmpassword" class="form-control" id="" style="height: 40px" placeholder="Confirm Password" value="<?php echo $user['confirmpassword']?>"  />

                 <?php
    if(isset($confirmpasswordError)){
      echo  '<span class="text-danger">' .$confirmpasswordError .'</span>';
    }
    ?>


              </div>




             <div class="span4 form-group">
                <select class="form-dropdown validate[required]" id="input_14" name="gender" style="width:354px" data-component="dropdown" required="">
                     <option name="" value="">Gender </option>
                     <option name="" value="Male "> Male </option>
                     <option name="" value="Female"> Female </option>
                     <option name="" value="Other"> Other </option>
               </select>
             </div>







             <div class="span4 form-group">
              <input type="number" name="aadharno" class="form-control" id="" style="height: 40px" placeholder="Aadhar Number" value="<?php echo $user['aadharno']?>"/>
               <?php
    if(isset($aadharnoError)){
      echo  '<span class="text-danger">' .$aadharnoError .'</span>';
    }
    ?>


            </div>



            <div class="span4 form-group">
             <input type="number" name="mobileno" class="form-control" id="" style="height: 40px" placeholder="Mobile No" value="<?php echo $user['mobileno']?>" />
             <?php
    if(isset($mobilenoError)){
      echo  '<span class="text-danger">' .$mobilenoError .'</span>';
    }
    ?>

           </div>
           <div class="span4 form-group">
                <input type="text" name="username" class="form-control" id="name" style="height: 40px" placeholder="Username" value="<?php echo $user['username']?>"  />
                <?php
    if(isset($usernameError)){
      echo  '<span class="text-danger">' .$usernameError .'</span>';
    }
    ?>

              </div>


              <div class="span8 form-group">
                <input type="text" class="form-control" name="addressline1" id="subject" style="height: 40px" placeholder="Address Line 1" value="<?php echo $user['addressline1']?>" />
                <?php
    if(isset($addressline1Error)){
      echo  '<span class="text-danger">' .$addressline1Error .'</span>';
    }
    ?>

              </div>


               <div class="span8 form-group">
                <input type="text" class="form-control" name="addressline2" id="subject" style="height: 40px" placeholder="Address Line 2" value="<?php echo $user['addressline2']?>" />

              </div>

               <div class="span4 form-group">
                <input type="text" name="state" class="form-control" id="name" style="height: 40px" placeholder="State" value="<?php echo $user['state']?>" />
                 <?php
    if(isset($stateError)){
      echo  '<span class="text-danger">' .$stateError .'</span>';
    }
    ?>


              </div>


              <div class="span4 form-group">
               <input type="text" name="city" class="form-control" style="height: 40px" id="name" placeholder="City" value="<?php echo $user['city']?>" />
               <?php
    if(isset($cityError)){
      echo  '<span class="text-danger">' .$cityError .'</span>';
    }
    ?>


              </div>

              <div class="span4 form-group">
               <input type="text" name="district" class="form-control" style="height: 40px" id="name" placeholder="District" value="<?php echo $user['district']?>" />
              <?php
    if(isset($districtError)){
      echo  '<span class="text-danger">' .$districtError .'</span>';
    }
    ?>

             </div>


             <div class="span4 form-group">
              <input type="number" name="pin" class="form-control" id="name" style="height: 40px"  placeholder="PIN" value="<?php echo $user['pin']?>" />
             <?php
    if(isset($pinError)){
      echo  '<span class="text-danger">' .$pinError .'</span>';
    }
    ?>
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
<?php  }
else{
  header("Location: ");
}
?>
