<div class="bg-primary text-white sticky-top p-1">
    <marquee class="fs-3"  direction="100">

<?php
include "connect.php";
$sql="Select * from `news`";
$result=mysqli_query($con,$sql);
if($result){
  $row=mysqli_fetch_assoc($result);
  echo $row["name"];
}
?>

</marquee>

    </div>