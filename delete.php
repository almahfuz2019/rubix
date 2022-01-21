<?php  ?>
<?php

include('deshboard.php');
error_reporting(0);
$rollno=$_GET['rn'];
$query="DELETE FROM allzoomdata WHERE id='$rollno'";

$result=mysqli_query($connection,$query);
if($result){
    echo "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
     Your data has successfully <strong>Deleted</strong>.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
} 

?>