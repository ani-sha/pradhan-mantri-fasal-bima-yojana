<?php
session_start();


?>
<?php  
require_once 'config.php';
require_once 'database.php';

$sql = "SELECT * FROM report WHERE id = " . $_GET['id'] ;
$result = mysqli_query($conn , $sql);


if (mysqli_num_rows($result)>0){
  $user = mysqli_fetch_array($result);

  

if(isset($_POST['submit'])){






$update =mysqli_query( $conn,"UPDATE report SET 
  status =  '" . $_POST['status'] . "' ,
  physicalverificationdate =  '" . $_POST['physicalverificationdate'] . "' ,
  verifiername =  '" . $_POST['verifiername'] . "'
  WHERE id = '" . $_GET['id']."'");


   if ($update){

    session_start();
      $_SESSION["message"] = "Report updated successfully";
      header('Location: registered_reports.php');
      exit;
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
}
 



  
  


?>

    
  <h1 style="text-align: center;">UPDATE STATUS</h1><br>
  <h6 class="text-danger" style="margin-left: 500px" >* required field </h6><br>
<form action="" method="POST" id = "registrationForm" style="margin-left: 500px" >
  
  <p>
    <label for= "status" id="rom" style="font-weight: bold">Status</label>
    <input type="text" name="status"  value="<?php echo $user['status']?>" >
   
    
     
    
  </p><br>


  <p>
    <label for= "status" id="rom" style="font-weight: bold">Physical Verification Date</label>
    <input type="text" name="physicalverificationdate"  value="<?php echo $user['physicalverificationdate']?>" >
   
    
     
    
  </p><br>

  <p>
    <label for= "status" id="rom" style="font-weight: bold"> Verifier Name</label>
    <input type="text" name="verifiername"  value="<?php echo $user['verifiername']?>" >
   
    
     
    
  </p><br>
  
  
 
  <input type="submit" name="submit" value="Update">
</form>
<hr>



<?php  }else{
  header("Location: registered_reports.php");
}
?>
</body>





  
