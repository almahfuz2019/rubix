<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awsum -->
    <script src="https://kit.fontawesome.com/10ee6dd9dd.js" crossorigin="anonymous"></script>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body class=" ">
<?php include 'navbar.php';?>
<?php
$connections=mysqli_connect('localhost','root','','demo_zoom');
if(! $connections){
  echo ('not connected'.mysqli_error());
}

// $mysql_select_db($bd);
if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from admins where email='".$uname."'AND password='".$password."' limit 1";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo "done";
  
    }else{
        echo "not done";
  
    }
}



?>
     <!-- navbar end -->
    <div class=" col-md-4  border p-3 shadow-lg text-center align-items-center mx-auto   rounded" style="margin-top: 10vh;">
        <div class="my-5">
            <h1 class="fw-bold">Login form</h1>
            <br>
<form action="" method="POST">
            <input name='username' id="user-email" type="text " class="form-control forms text-center text-primary bg-white" placeholder="Enter Your Email " aria-label="Username " aria-describedby="addon-wrapping ">
            <br>
            <input name='password' id="user-password" type="text " class="form-control forms text-center bg-white text-primary" placeholder="Enter Your Password " aria-label="Username" aria-describedby="addon-wrapping ">
            <button name='submit' type="button" id="login-submit" class="btn btn-primary">Login</button> </form>
            <br>

        </div>

        
     
    </div>
    <?php include 'footer.php';?>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src=""></script>

</body>

</html>