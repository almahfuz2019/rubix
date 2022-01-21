<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <?php
 
    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $reg=$_POST['reg'];
      $technology=$_POST['technology'];
      $semester=$_POST['semester'];
      $shift=$_POST['shift'];
      $session=$_POST['session'];
      if($name && $roll && $reg && $technology && $semester && $shift && $session){
      $connection=mysqli_connect('localhost','root','','demo_zoom');
      if(! $connection){
        echo ('not connected'.mysqli_error());
      }
      $query="INSERT INTO allzoomdata(name,roll,reg,technology,semester, shift,session) VALUES ('$name','$roll','$reg','$technology','$semester','$shift','$session')";
    $result=mysqli_query($connection,$query);
    if($result){    
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Mr. ${name} </strong>  ,Your data has submitted successfully.
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
    <title>APP</title>
  </head>
  <body  class='container-fluid'>
 <!-- first page start  -->
 <div class="full_first_page ">
     <div class="container-fluid bg-light">
         <!-- navbar start  -->
         <nav class="navbar navbar-expand-lg navbar-light text-center">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"> <img src="images/logo.png" alt=""  width="150" class="d-inline-block align-text-top img-fluid"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home nav-link"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active nav-link" href="doc.html"><i class="fas fa-book-reader nav-link" ></i> Doc</a>
                 
                  </li>
               


                  <li class="nav-item">
                    <a class="nav-link active" href=""><i class="fas fa-mobile-alt nav-link"></i> App</a>
                  
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="#"><i class="fas fa-envelope-open-text nav-link"></i> Contact</a>
                  </li>
              
                 
                </ul>
                <ul class="navbar-nav text-center d-block">
                  
                      <li class="nav-item">
                        <a class="nav-link active " href="index.html"><h2 class=""><i class="fas fa-user-circle nav-link "></i></h2></a>
                      </li>
                </ul>
               
              </div>
            </div>
          </nav>
         <!-- navbar end -->
         <!-- Modal -->

     
     </div>
 </div>
 <!-- first page end -->
 <!-- second page start  -->
 <div class="container mt-4 ">
    <!-- <div class="row row-cols-1 row-cols-md-1 g-5 d-flex align-items-center ">
      <div class="col ">
        <div class="card h-100 bg-light shadow-lg border-0">
         
       
        <div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/country/bd">Bangladesh</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FDhaka" width="100%" height="115" frameborder="0" seamless></iframe> </div>

        </div>
      </div>


      </div> -->
    
      
            <div class="row g-5 mt-5 ">
            <div class="col-md-4 col-6">
                    <img  src="images/create.png" 
                   data-bs-toggle="modal" data-bs-target="#exampleModal3" class="img-fluid mx-auto d-block view_img" alt="...">
                  <p class="text-center mt-2">Create</p>
              
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
            <input name="" placeholder="****@gmail.com"  class="form-control" >        
          </div>
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input name="" placeholder="163863"  class="form-control" >        
          </div>
          
         
          
        
          
          <button type="submit" name="" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
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
                  <!-- <button data-bs-toggle="modal" data-bs-target="#exampleModal"  type="button" class="btn btn-success">Success</button> -->
                  <!-- join from start -->
                  <!-- Button trigger modal -->


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
      <form class="container mb-5" action="index.php" method="post">
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
   <!-- footer start -->
<!-- <div class="container-fluid " >
  <div class="fixed-bottom text-center">
    
     <div class="row align-self-end  bg-light mb-1 p-3">
     <hr class='mx-5 '>
       <div class="col-6"> <h4><a class="navbar-brand" href="index.php"> <img src="images/logo.png" alt=""  width="150" class="d-inline-block align-text-top img-fluid"></a>@2020 comadlfkja.com</h4></div>
       <div class="col-6">
       <h4><i class="fas fa-phone-square me-2"></i><i class="fab fa-youtube me-2"></i></i><i class="fab fa-facebook me-2"></i></h4>
       </div>
     </div>
    
  
  </div>
  </div> -->
   <!-- footer end -->
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>
