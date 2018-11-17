<?php
define('DATABASE_HOST','localhost');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD','');
define('DATABASE_NAME','demo');
require_once 'database.php';


   $sql = "SELECT * FROM farm";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  

$m=date('m');
$y=date('y');
$d=date('d');

echo '<br>';

$query="SELECT * FROM 'farm' ";
 $GetSidNo= mysqli_query($conn, $query);
$GetSidNo1=mysqli_num_rows($GetSidNo);
$invID= mt_rand(100000, 999999);
echo $sid=$y.$m.$d.$invID;



$sql = "INSERT INTO farm (sid) VALUES ('" . $sid . "');";
    
if (mysqli_query($conn, $sql)) {
      header('Location:viewid.php');
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>





