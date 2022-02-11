<?php
if(isset($_POST["update"]))
{
    mysqli_query($con,"update news set name='$_POST[name]' where id=$id");
?>

<script>
window.location="news.php";
</script>

<?php
}
?>