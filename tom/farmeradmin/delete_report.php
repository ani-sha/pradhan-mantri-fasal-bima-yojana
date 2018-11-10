<?php  
require_once 'config.php';
require_once 'database.php';

$sql = "DELETE FROM report WHERE id = " . $_GET['id'];
if (mysqli_query($conn, $sql)) {
  session_start();
  $_SESSION["message"] = "Report deleted successfully";
  header('Location: lossreports.php');
  exit;
} else {
  echo "Error updating record: " . mysqli_error($conn);
}