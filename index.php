<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/comment.css">
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,700;1,900&display=swap" rel="stylesheet">
    <!-- awesome link  -->
    <script src="https://kit.fontawesome.com/10ee6dd9dd.js" crossorigin="anonymous"></script>
 <style>
   .join_img:hover{
    box-shadow: rgba(0, 0, 0, 1) -4px 9px 25px -6px;
    
  }
   .view_img:hover{
    box-shadow: rgba(0, 0, 0, 1) -4px 9px 25px -6px;
  }
 </style>
    <!-- link css  -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>APP</title>
  </head>
  <body  class='container-fluid'>
  <?php include 'navbar.php';?>
 <!-- second page start  -->
 <div class="container mt-4 ">
    
      
            <div class="row g-5 mt-5 ">
            <div class="col-md-4 col-6">
            <?php
 
 if(isset($_POST['submited'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   if($email && $password){
   $connections=mysqli_connect('localhost','root','','demo_zoom');
   if(! $connections){
     echo ('not connected'.mysqli_error());
   }
   $querys="INSERT INTO admins(email,password) VALUES ('$email','$password')";
 $result1=mysqli_query($connections,$querys);
 if($result1){    
   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>Mr. ${email} </strong>  ,Your data has submitted successfully.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 </div>";
 }
 
}else{
 echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
   <strong> Sorry </strong>  ,Any field cannot be blank.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 </div>";
}
   }
 ?>
                    <img  src="images/create.png" 
                   data-bs-toggle="modal" data-bs-target="#exampleModal3" class="img-fluid mx-auto d-block view_img  " alt="...">
                  <p class="text-center mt-2">Create</p>
<!-- btn  btn-lg disabled -->
                 <!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><img src="images/logo.png" class="img-fluid " width="100" alt=""></h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="fw-bold">Create</h5>
      </div>
      <form class="container mb-5" action="index.php" method="post">
          <div class="mb-3">
            <label   class="form-label">Email</label>
            <input name="email" placeholder="****@gmail.com"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input name="password" placeholder="163863"  class="form-control" >        
          </div>
          
         
          
        
          
          <button type="submit" name="submited" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
        </form>
     
    </div>
  </div>
</div>

                  <!-- join from end -->
                  
                </div>
                <div  class="col-md-4 col-6">
                
                    <img style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal"  src="images/join.png" 
                  class="img-fluid rounded mx-auto d-block join_img" alt="...">
                  <p class="text-center mt-2">Join</p>
                


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><img src="images/logo.png" class="img-fluid " width="100" alt=""></h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="fw-bold">Join</h5>
      </div>
      <form class="container mb-5" action="dpdf.php" method="post">
          <div class="mb-3">
            <label   class="form-label">Name</label>
            <input name="name" placeholder="Abdullah Al Mahfuz"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label  class="form-label">Roll No</label>
            <input name="roll" placeholder="163863"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label class="form-label">Reg No</label>
            <input  name="reg"  placeholder="1500972414"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label   class="form-label">Technology</label>
            <input name="technology" placeholder="Computer"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label  class="form-label">Semester</label>
            <input name="semester"  placeholder="6th"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label   class="form-label">Shift</label>
            <input name="shift" placeholder="2nd"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label   class="form-label">Session</label>
            <input name="session" placeholder="2018-19"  class="form-control" >        
          </div>
         
          
        
          
          <button type="submit" name="submit" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
        </form>
     
    </div>
  </div>
</div>

                  <!-- join from end -->
            
              </div>
                
                <div class="col-md-4 col-6">
                   <a href="pdf.php"> <img    src="images/view.png" 
                  class="img-fluid mx-auto d-block view_img" alt="..."></a>
                  <p class="text-center mt-2">View</p>
              
                 
                  
                </div>
            </div>            
         
   
    
 </div>

 
 <!-- second page end -->
 <!-- commsnt s -->
 <?php include 'comments.php' ?>
<!-- commsnt e -->
   <!-- footer start -->
 
   <?php include 'footer.php' ?>
   <!-- footer end -->
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>
