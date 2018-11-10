<?php
require_once 'database.php';
require_once 'config.php';
$firstname ='';
$lastname='';
$gender='';

$aadharno='';
$mobileno='';
$addressline1='';
$addressline2='';
$state='';
$city='';
$district='';
$pin='';

$password='';
$confirmpassword='';
$username='';







if($_SERVER["REQUEST_METHOD"]=="POST")
{

$firstname =trim($_POST['firstname']);
if (empty($firstname)) {
	$firstnameError = "First name is required";
	
}else{
	if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
		$firstnameError= "only letters and white spaces allowed" ;
	}
}
if (empty($_POST["lastname"])) {
    $lastnameError = "Last Name is required";
  } else {
    $lastname = $_POST["lastname"];
  }

  if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}

  if (empty($_POST["password"])) {
    $passwordError = "Password is required";
  } else {
    $password = $_POST["password"];
  }

 if (empty($_POST["confirmpassword"])) {
    $confirmpasswordError = "Confirm your Password ";
  } else {
    $confirmpassword = $_POST["confirmpassword"];
  }



  if (empty($_POST["aadharno"])) {
    $aadharnoError = "Aadhar Number is required";
  } else {
    $aadharno = $_POST["aadharno"];
  }

  if (empty($_POST["mobileno"])) {
    $mobilenoError = "Mobile Number is required";
  } else {
    $mobileno = $_POST["mobileno"];
  }

   if (empty($_POST["username"])) {
    $usernameError = "Username is required";
  } else {
    $username = $_POST["username"];
  }

  if (empty($_POST["addressline1"])) {
    $addressline1Error = "Address is required";
  } else {
    $addressline1 = $_POST["addressline1"];
  }

  if (empty($_POST["state"])) {
    $stateError = "State is required";
  } else {
    $state = $_POST["state"];
  }


if (empty($_POST["city"])) {
    $cityError = "City is required";
  } else {
    $city = $_POST["city"];
  }

  if (empty($_POST["district"])) {
    $districtError = "District is required";
  } else {
    $district = $_POST["district"];
  }

  if (empty($_POST["pin"])) {
    $pinError = "Pin is required";
  } else {
    $pin = $_POST["pin"];
  }



  

 




if( (!isset($firstnameError)) AND (!isset($lastnameError)) AND (!isset($passwordError)) AND (!isset($confirmpasswordError))  AND (!isset($aadharnoError)) AND (!isset($mobilenoError)) AND (!isset($usernameError)) AND (!isset($addressline1Error))  AND  (!isset($stateError)) AND  (!isset($cityError)) AND  (!isset($districtError))   )
{
	
$sql = "INSERT INTO admin (firstname, lastname,password,confirmpassword, gender , aadharno, mobileno, username,addressline1, addressline2,state,city,district,pin) VALUES ('" . $firstname . "', '" . $lastname . "','" . $password . "','" . $confirmpassword . "',  '" . $gender . "',  '" . $aadharno . "','" . $mobileno . "', '" . $username . "','" . $addressline1 . "', '" . $addressline2 . "','" . $state . "','" . $city . "','" . $district . "','" . $pin . "');";
    

if (mysqli_query($conn, $sql)) {
      echo "Farmer added successfully";
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}

?>





