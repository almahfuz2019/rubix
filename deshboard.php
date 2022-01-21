<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"> <img class='img-fluid' src='images/logo.png'></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <form action='' method='POST' class="d-flex ms-auto">
              <input name='search' class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    


  


      <div class="container-fluid">
      <table class='table text-center fw-normal'>
      <thead>
        <tr class='bg-primary text-white'>
          <th scope='col'>Serial</th>
          <th scope='col'>Name</th>
          <th scope='col'>Roll</th>
          <th scope='col'>Reg</th>
          <th scope='col'>Technology</th>
          <th scope='col'>Semester</th>
          <th scope='col'>Shift</th>
          <th scope='col'>Session</th>
          <th scope='col'>Action</th>
         
        </tr>
      </thead>
 
      <?php
    $connection=mysqli_connect('localhost','root','','demo_zoom');
    
    $quere="SELECT * FROM allzoomdata";
    
     
 
    $adanprodan=mysqli_query($connection,$quere);
   
    $query="SELECT id FROM allzoomdata ORDER BY id";
    $query_run=mysqli_query($connection,$query);
    $row=mysqli_num_rows($query_run);
if($row==''){
  echo " <div class='mt-5'>
  <h1 class='text-center'>  <span class='bg-primary py-1 px-3 mx-2 fw-bold text-light rounded'>Total: 0</span></h1>
</div>";
}else{
    echo "  <div class='mt-5'>
    <h1 class='text-center'>  <span class='bg-primary py-1 px-3 mx-2 fw-bold text-light rounded'>Total: {$row}</span></h1>
  </div>";
}

    // if(isset($_POST['search'])){
    //   $searchKey=$_POST['search'];
    //   $quere="SELECT * FROM allzoomdata WHERE name LIKE '%$searchKey%'";
    // }else{
      
    //   echo "no";
    // }

    if(! $connection){
      die('not connected'.mysqli_error($connection));
    }

    $quere="SELECT * FROM allzoomdata";
    
     
 
    $adanprodan=mysqli_query($connection,$quere);
    
    while($row =mysqli_fetch_assoc($adanprodan)){
      
    
      echo " 
      <tbody class='fw-normal '>
        <tr>
          <th class=' text-white bg-dark h4 fw-bold'  scope='row'>{$row['id']}</th>
          <th scope='row'>{$row['name']}</th>
          <th scope='row'>{$row['roll']}</th>
          <th scope='row'>{$row['reg']}</th>
          <th scope='row'>{$row['technology']}</th>
          <th scope='row'>{$row['semester']}</th>
          <th scope='row'>{$row['shift']}</th>
          <th scope='row'>{$row['session']}</th>
          <th scope='row'> <p class='text-center dawnload'><a href='delete.php?rn={$row['id']}'><i class='fas fa-trash  text-danger'></i></a></p></th>
          
        
        </tr>
      
      </tbody>
    ";
      
      
    } 
       ?>
  
  </table>
      </div>
    <!-- navbar end -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
