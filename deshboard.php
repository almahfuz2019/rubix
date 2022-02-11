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
    <?php include 'navbarWithSearchbar.php';?>

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
      
    

      <a href="truncate.php" ><button action="index.php"  name="clear" class="btn btn-primary" >Clear</button></a>
      <a href="news.php" class='ms-2'><button action='' name="" class="btn btn-primary " >News update</button></a>




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
          <th scope='row'> <p class='text-center dawnload'><a href='delete_db.php?rn={$row['id']}'><i class='fas fa-trash  text-danger'></i></a></p></th>
          
        
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
