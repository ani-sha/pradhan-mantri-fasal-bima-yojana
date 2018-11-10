<?php

require_once 'config.php';
include_once 'process_register.php';
require_once 'database.php';

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
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="index.html">Home</a>
                </li>

                <li class="active">
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
              <h3>REGISTER AS FARMER</h3>
              <p>Welcome!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<form action="register.php" method="post" id = "registrationForm" role="form" class="contactForm" style="margin-left: 300px" >
        <div class="" style="margin-left: 328px">
        <img src="assets/img/face2.jpg" style="height: 70px "   ><br><br>
        </div>
        <div style="margin-left: 321px">
        <button class="btn btn-color btn-rounded" type="" onclick="location.href='/facerecognition/sample.py';">Face Detect</button><br><br>
      </div>
      
     
            <div class="row">
              <div class="span4 form-group "style="margin-left: 2px">
                <input type="text" name="firstname" class="form-control" id="name" style="height: 40px" placeholder="First Name" value="<?php echo $firstname?>" />
                <?php
    if(isset($firstnameError)){
      echo  '<span class="text-danger">' .$firstnameError .'</span>';
    }
    ?>
              </div>
              
               

              <div class="span4 form-group">
                <input type="text" name="lastname" class="form-control" id="name" style="height: 40px" placeholder="Last Name" value="<?php echo $lastname?>"  />
                <?php
    if(isset($lastnameError)){
      echo  '<span class="text-danger">' .$lastnameError .'</span>';
    }
    ?>
                
              </div>



               <div class="row">
              <div class="span4 form-group ">
                <input type="password" name="password" class="form-control" id="" style="height: 40px" placeholder="Password" value="<?php echo $password?>" />
                 <?php
    if(isset($passwordError)){
      echo  '<span class="text-danger">' .$passwordError .'</span>';
    }
    ?>
                
              </div>
              
               

              <div class="span4 form-group">
                <input type="password" name="confirmpassword" class="form-control" id="" style="height: 40px" placeholder="Confirm Password" value="<?php echo $confirmpassword?>"  />

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
               <select class="form-dropdown validate[required]" id="input_14" name="caste" style="width:356px" data-component="dropdown" required="">
                    <option name="" value="">Caste </option>
                    <option name="" value="General "> General </option>
                    <option name="" value="OBC"> OBC </option>
                    <option name="" value="SC/ST"> SC/ST </option>
              </select>
            
            </div>
             

            <div class="span4 form-group">
             <input type="date" name="dob" class="form-control" id="" placeholder="Date of Birth" style="height: 40px"   value="<?php echo $dob?>" />
             
           </div>
            

             <div class="span4 form-group">
              <input type="number" name="aadharno" class="form-control" id="" style="height: 40px" placeholder="Aadhar Number" value="<?php echo $aadharno?>"/>
               <?php
    if(isset($aadharnoError)){
      echo  '<span class="text-danger">' .$aadharnoError .'</span>';
    }
    ?>

              
            </div>
            
                                                                                                                                                                                                                                 
            
            <div class="span4 form-group">
             <input type="number" name="mobileno" class="form-control" id="" style="height: 40px" placeholder="Mobile No" value="<?php echo $mobileno?>" />
             <?php
    if(isset($mobilenoError)){
      echo  '<span class="text-danger">' .$mobilenoError .'</span>';
    }
    ?>
            
           </div>
           <div class="span4 form-group">
                <input type="text" name="username" class="form-control" id="name" style="height: 40px" placeholder="Username" value="<?php echo $username?>"  />
                <?php
    if(isset($usernameError)){
      echo  '<span class="text-danger">' .$usernameError .'</span>';
    }
    ?>
                
              </div>
            

              <div class="span8 form-group">
                <input type="text" class="form-control" name="addressline1" id="subject" style="height: 40px" placeholder="Address Line 1" value="<?php echo $addressline1?>" />
                <?php
    if(isset($addressline1Error)){
      echo  '<span class="text-danger">' .$addressline1Error .'</span>';
    }
    ?>
                
              </div>
               

               <div class="span8 form-group">
                <input type="text" class="form-control" name="addressline2" id="subject" style="height: 40px" placeholder="Address Line 2" value="<?php echo $addressline2?>" />
               
              </div>

               <div class="span4 form-group">
                <input type="text" name="state" class="form-control" id="name" style="height: 40px" placeholder="State" value="<?php echo $state?>" />
                 <?php
    if(isset($stateError)){
      echo  '<span class="text-danger">' .$stateError .'</span>';
    }
    ?>

                
              </div>
              

              <div class="span4 form-group">
               <input type="text" name="city" class="form-control" style="height: 40px" id="name" placeholder="City" value="<?php echo $city?>" />
               <?php
    if(isset($cityError)){
      echo  '<span class="text-danger">' .$cityError .'</span>';
    }
    ?>

              
              </div>
               
              <div class="span4 form-group">
               <input type="text" name="district" class="form-control" style="height: 40px" id="name" placeholder="District" value="<?php echo $district?>" />
              <?php
    if(isset($districtError)){
      echo  '<span class="text-danger">' .$districtError .'</span>';
    }
    ?>
               
             </div>
              

             <div class="span4 form-group">
              <input type="number" name="pin" class="form-control" id="name" style="height: 40px"  placeholder="PIN" value="<?php echo $pin?>" />
             <?php
    if(isset($pinError)){
      echo  '<span class="text-danger">' .$pinError .'</span>';
    }
    ?>
            </div>
             

              <div class="span4 form-group">
                 <select class="form-dropdown " id="input_14" name="farmertype" style="width:354px" data-component="dropdown" required="">
                      <option name="" value="">Farmer Type </option>
                      <option name="" value="Small "> Small </option>
                      <option name="" value="Marginal"> Marginal </option>
                      <option name="" value="Others"> Others </option>
                </select>
                 
              </div>
              
               <div class="span4 form-group">
                 <select class="form-dropdown " id="input_14" name="farmercategory" style="width:356px" data-component="dropdown" required="">
                  <option name="" value="">Farmer Category </option>
                  <option name="" value="Owner "> Owner </option>
                  <option name="" value="Tenant"> Tenant </option>
                  <option name="" value="Share Cropper"> Share Cropper </option>
                </select>
               
              </div>
               

              <div class="span4 form-group">
               <input type="text" name="bankname" class="form-control" id="name" style="height: 40px"  placeholder="Bank Name" value="<?php echo $bankname?>" />
               <?php
    if(isset($banknameError)){
      echo  '<span class="text-danger">' .$banknameError .'</span>';
    }
    ?>
             </div>
              

             <div class="span4 form-group">
              <input type="text" name="branchname" class="form-control" id="name" style="height: 40px" placeholder="Branch Name" value="<?php echo $branchname?>" />
              <?php
    if(isset($branchnameError)){
      echo  '<span class="text-danger">' .$branchnameError .'</span>';
    }
    ?>
            </div>
             

            <div class="span4 form-group">
             <input type="number" name="ifsc" class="form-control" id="" style="height: 40px" placeholder="IFSC Code" value="<?php echo $ifsc?>" />
             <?php
    if(isset($ifscError)){
      echo  '<span class="text-danger">' .$ifscError .'</span>';
    }
    ?>
            
           </div>
            

           <div class="span4 form-group">
            <input type="number" name="savings" class="form-control"  style="height: 40px" id="" placeholder="Savings A/C No" value="<?php echo $savings?>" />
            
            <?php
    if(isset($savingsError)){
      echo  '<span class="text-danger">' .$savingsError .'</span>';
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
