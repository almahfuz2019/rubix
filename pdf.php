<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pdf.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- fontawesome  -->
    <script src="https://kit.fontawesome.com/10ee6dd9dd.js" crossorigin="anonymous"></script>
<style>
  .dawnload{
    cursor: pointer;
    transition: 0.3s;
  }
</style>
    <title>Hello, world!</title>

  </head>
  <body>
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
               
                <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      
       
      </form>
    
              </div>
            </div>
          </nav>
         <!-- navbar end -->
 

    <hr style=" height: 3px;" class="text-primary">
    <div class="bg-primary text-white">
    <marquee   direction="100">***Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil*** </marquee>

    </div>
  

    <?php
    $connection=mysqli_connect('localhost','root','','demo_zoom');
    // if(isset($_POST['search'])){
    //   $searchKey=$_POST['search'];
    //   $quere="SELECT * FROM allzoomdata WHERE roll";
    // }else{
      
    //   echo "no";
    // }
    if(! $connection){
      die('not connected'.mysqli_error($connection));
    }

    $quere="SELECT * FROM allzoomdata";
    
     
 
    $adanprodan=mysqli_query($connection,$quere);
   
    $query="SELECT id FROM allzoomdata ORDER BY id";
    $query_run=mysqli_query($connection,$query);
    $row=mysqli_num_rows($query_run);
if($row==''){
echo " <h1 class='text-center my-auto text-danger  '>Sorry,<span>Not found.</span></h1> ";
}else{
    echo "  <div class='mt-5'>
    <h1 class='text-center'>  <span class='bg-primary py-1 px-3 mx-2 fw-bold text-light rounded'>Total: {$row}</span></h1>
  </div>";
}


    while($row =mysqli_fetch_assoc($adanprodan)){
  
      echo " <div class='container border my-5'>
      <div class='m-3'>
         
          <div class='row align-items-center'>
              <div class='col-6'><img width='180' class='img-fluid' src='images/logo.png'></div>
              
              
              <hr class='my-4'>
          </div>
          <div  class='row'>
           <div class='col-6'><h3 class='fw-bold mb-2'>Information</h3>
        </div>
         
           <div class='col-6'><h1  class='fw-bold mb-2 text-end'><span class='bg-primary py-1 px-5 text-light rounded'>{$row['id']}</span></h1>
        </div>
       </div>
       <hr>
      
       
       
      
        <p class='text-desebolt bg-light my-1 ps-2'>Name: <span>{$row['name']}</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Roll NO: <span>{$row['roll']}</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Reg NO: <span>{$row['reg']}</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Technology:<span> {$row['technology']}</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Semester NO:<span> {$row['semester']}</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Shift NO:<span> {$row['shift']}</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Session:<span> {$row['session']}</span></p>
        <hr>
        <p class='text-desebolt bg-light my-1 ps-2'>Time:<span> {$row['time']}</span></p>
        <hr>
        <p class='text-center mt-2 nav-link disabled'>Show the document in MPI</p><p class='text-end'><i class='fas fa-file-download dawnload'></i></p>
    
        
      
       
      </div>
  </div>

  ";
      
      
    } 
       ?>
  

<!-- 
  <script type="text/javascript">

    $(document).ready(function () {
        window.print();
    });
    
    </script> -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>
