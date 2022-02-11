<?php
$username="root";
$password="";
$server="localhost";
$db="demo_zoom";
$con=mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "Connection Successful";
?>

<script>
    // alert('Connection Successful');
</script>
<?php
}else{
    // echo "NO connection";
    die("No connection" . mysqli_connect_error());
}
?>
