<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src=">https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- awesome link  -->
      <script src="https://kit.fontawesome.com/10ee6dd9dd.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body onload="makePDF()">
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
 
}else{
 echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
   <strong> Sorry </strong>  ,Any field cannot be blank.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 </div>";
}
   }
 ?>
 <?php
   
    if(! $connection){
      die('not connected'.mysqli_error($connection));
    }
    $quere="SELECT * FROM allzoomdata";
    $adanprodan=mysqli_query($connection,$quere);  
    $query="SELECT id FROM allzoomdata ORDER BY id DESC LIMIT 1";
    $query_run=mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)>0){
      foreach($query_run as $row){
      //  echo $row['id'];
       
      echo "
      <p style='page-break-before: always;'>&nbsp;</p>
      <div id='capture' class='container border my-5' >
      <div class='m-3'>
         
          <div class='row align-items-center'>
              <div class='col-6'><img width='180' class='img-fluid' src='images/logo.png'></div>
              
              
              <hr class='my-4'>
          </div>
          <div  class='row'>
           <div class='col-6'><h3 class='fw-bold mb-2'>Information</h3>
        </div>
         
           <div class='col-6'><h1  class='fw-bold mb-2 text-end'><span style='background-color: #0d6efd  !important;' class=' py-1 px-3 text-light rounded'>{$row['id']}</span></h1>
        </div>
       </div>
       <hr>
       
        <p class='text-desebolt bg-light my-1 ps-2'>Name: <span>$name</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Roll NO: <span>$roll</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Reg NO: <span>$reg</span></p>
        
        <p class='text-desebolt bg-light my-1 ps-2'>Technology:<span> $technology</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Semester NO:<span> $semester</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Shift NO:<span> $shift</span></p>
        <p class='text-desebolt bg-light my-1 ps-2'>Session:<span> $session</span></p>
        <hr>
        <p class='text-desebolt bg-light my-1 ps-2'>Time:<span></span></p>
        <hr>
        <p class='text-center mt-2 nav-link disabled'>Show the document in MPI</p><p class='text-end'><i class='fas fa-file-download dawnload' onclick='makePDF()' style='cursor: pointer;'></i></p>
 
      </div>
  </div>
  
 
  ";
      }
    }
    $row=mysqli_num_rows($query_run);
    
       ?>

       ?>
<!-- png s-->
<script>
      window.html2canvas=html2canvas;
      window.jsPDF=window.jspdf.jsPDF;
      function makePDF(){
        var doc=new jsPDF();
        

html2canvas(document.querySelector("#capture"),{
  allowTaint:true,
  useCORS:true,
  scale:1
}).then(canvas => {
  
    var img=canvas.toDataURL("image/png");
    var doc=new jsPDF();
    doc.setFontSize(1);
    doc.addImage(img, 'PNG',7,13,195,105);
   
    doc.save("rubix");
});

      }
    </script>
<!-- png e -->


          <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>