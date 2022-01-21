<?php
        $connection=mysqli_connect('localhost','root','','demo_zoom');
        $sql="truncate table allzoomdata";
        $querya=mysqli_query($connection, $sql);
        
      ?>