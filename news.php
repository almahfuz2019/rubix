<?php
include "connect.php";
?>
<?php
include "insert.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>News Update</title>
  </head>
  <body>

    <div class="container mt-5">
    <a href="deshboard.php"><button action='truncate.php?rn' name="clear" class="btn btn-primary" >Deshboard</button></a>
        <form action="" class="text-center" name="newsform" method="post">

        <div class="">
        <label for="comment" class="mb-2 fs-1 fw-bold">NEWS UPDATE</label>
        <textarea class="form-control" rows="5" id="comment" name="name"></textarea>

        </div>
        <button type="submit" class="btn btn-success mt-3" name="insert">Insert</button>
        </form>
        <?php include "marquee.php"?>
    </div>




    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                <th class="col-1">#</th>
                <th class="col-9">Name</th>
                <th class="col-1 text-center">Edit</th>
                <th class="col-1">Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $result=mysqli_query($con, "select * from news");
                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row["id"]; echo "</td>";
                    echo "<td>"; echo $row["name"]; echo "</td>";
                    echo "<td>"; ?><a href="edit.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-success">Edit</button></a><?php echo "</td>";
                    echo "<td>"; ?><a href="delete.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a><?php echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>