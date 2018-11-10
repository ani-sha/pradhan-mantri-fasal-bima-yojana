<?php  
require_once 'config.php';
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $sql = "SELECT id,isAdmin FROM admin WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    session_start();
    if($user['isAdmin']== 0){
    $_SESSION['user_logged_in'] = true ;
   
    $_SESSION['logged_in_user_id'] = $user['id'] ;
    header('Location:admin_dashboard.php');
}else{
	header('Location:adminlogin.php');
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
                  <a href="admin_index.php">Back To Home</a>
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
              <h3>LOGIN AS ADMIN</h3>
              <p>Welcome!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><br>

          <form action="" method="post" role="form" class="contactForm" style="margin-left: 300px">
            <div class="row">
              <div class="span8 form-group validate[required]">
                <div class="text-centered">
                  <input type="text" name="username" class="form-control" id="name" placeholder="Userame" data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

              </div>

              <div class="span8 form-group">
                <div class="text-centered">
                  <input type="password" name="password" class="form-control" id="name" placeholder="Password" data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

              </div>

              

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
 