<?php
    session_start();
    $username=$_SESSION['username'];
    include "connect.php";
    $query="SELECT id FROM orders WHERE shop='$username' AND status != 'delivered'";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
?>