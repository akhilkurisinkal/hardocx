<?php
    session_start();
    include "connect.php";
    $oid= $_GET['id'];
    $query="SELECT * FROM  orders WHERE id='$oid'";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($res);
if($row['status']!='placed')
{
    $show='hidden';
}
else
{
    $show='block';
}


if(isset($_POST['confirm']))
{
    $confirm="UPDATE orders SET status='confirm' WHERE id='$oid'";
    mysqli_query($con,$confirm) or die(mysqli_error($con));
    header("location: orders.php");
}

if(isset($_POST['decline']))
{
    $confirm="UPDATE orders SET status='decline' WHERE id='$oid'";
    mysqli_query($con,$confirm) or die(mysqli_error($con));
    header("location: orders.php");
}


?>