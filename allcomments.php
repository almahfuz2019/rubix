<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src=">https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
  </head>
  <style>
  </style>

  <body>
  <?php include 'navbar.php';?>
  <?php
 
 if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $comment=$_POST['comment'];
   
   if($name && $email && $comment){
   $connections=mysqli_connect('localhost','root','','demo_zoom');
   if(! $connections){
     echo ('not connected'.mysqli_error());
   }
   $querys="INSERT INTO comments(name,email,comment) VALUES ('$name','$email','$comment')";
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
  <!-- Main Body -->
  
  <section >
      
          <div class="row gx-5 my-5">
          <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4 text-light">
                  <form action="index.php" method="post" class='bg-primary p-3 rounded' id="algin-form ">
                      <div class="form-group ">
                          <h4>Leave a comment</h4> 
                          <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" class="form-control"> </div>
                      <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>
                          <label for="message">Message</label> <textarea  id="" msg cols="30" name='comment' rows="5" class="form-control" style="background-color:;"></textarea>
                      </div>
                     
                      
                      <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe" class='my-1'>Subscribe me to the newlettter</label> </div>
                      <div class="form-group mt-3"> <button type="button" name='submit'  class="btn bg-light">Post Comment</button> </div>
                  </form>
              </div>
              <div class="col-sm-5 col-md-6 col-12 pb-4">
                  <h1 class='fw-bold u'>Comments <hr></h1>
                  <?php
    $connection=mysqli_connect('localhost','root','','demo_zoom');
    if(! $connection){
      die('not connected'.mysqli_error($connection));
    }

    $quere="SELECT * FROM comments"; 
 
    $adanprodan=mysqli_query($connection,$quere);
   
    $query="SELECT id FROM comments ORDER BY id";
    $query_run=mysqli_query($connection,$query);
    $row=mysqli_num_rows($query_run);
if($row==''){
echo " <h1 class='text-center  align-items-center text-danger  '>Sorry,<span>Not found.</span></h1> ";
}else{
    echo "  <div class='mt-5'>
    <h1 class='text-center'>  <span class='bg-primary py-1 px-3 mx-2 fw-bold text-light rounded'>Total: {$row}</span></h1>
  </div>";
}


    while($row =mysqli_fetch_assoc($adanprodan)){
  
      echo "
    
      
  <div class='row gx-5 my-2'>
  <div class='comment mt-4 text-justify float-left bg-primary p-2 rounded text-white '> <img src='http://bootdey.com/img/Content/user_1.jpg ' class='rounded-circle img-fluid p-1  img-thumbnail'  width='70'>
    <h4 style='font-weight: 600;'>{$row['name']}</h4> <span>- {$row['time']}</span> <br>
    <p>{$row['comment']}</p>
</div>
  </div>
  ";
      
      
    } 

  
       ?>
                
                  
                  
                 
                 
              </div>
              
          </div>
      </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
