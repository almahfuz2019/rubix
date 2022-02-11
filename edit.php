<?php
include "connect.php";

$id=$_GET["id"];

$name="";

$result=mysqli_query($con, "select * from news where id=$id");
while($row=mysqli_fetch_array($result))
{
$name=$row["name"];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container mt-5">
    <a href="deshboard.php"><button action='truncate.php?rn' name="clear" class="btn btn-primary">Deshboard</button></a>
    <a href="news.php" class="m-2"><button action="" name="news" class="btn btn-success" >Back</button></a>

        <form action="" class="text-center" name="newsform" method="post">
        <div class="">
        <label for="comment" class="mb-2 fs-1 fw-bold">NEWS UPDATE</label>
        <input class="form-control" rows="5" id="comment" name="name" value="<?php echo $name; ?>">

        </div>
        <button type="submit" class="btn btn-primary mt-3" name="update">Update</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  <?php
  include "update.php";
  ?>
</html>