<?php
if (isset($_POST['insert'])){
    if (empty($_POST['name']))
    {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Sorry,</strong>  Your data hasn't inderted successfully. Type Your News.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    else{
 
      if(isset($_POST['insert'])){
        $name=$_POST['name'];
        $sql="insert into `news` (name)
        values ('$name')";
        $result=mysqli_query($con,$sql);
        if($result){
     
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Yes,</strong>  Your data has inderted successfully.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

    }
    }
  }
}
    ?>