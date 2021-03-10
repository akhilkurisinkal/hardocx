<?php
    session_start();
    include "connect.php";
    $username=$_SESSION['username'];
    $query="SELECT id,`date` FROM orders WHERE shop='$username' AND `status`='placed' ORDER BY `date`";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));

    $queryy="SELECT id,`date` FROM orders WHERE shop='$username' AND `status`='confirm' ORDER BY `date`";
    $resp=mysqli_query($con,$queryy) or die(mysqli_error($con));
    
?>