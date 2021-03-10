<?php
    $con=mysqli_connect("localhost","root","","hardocx");
    //check connection
    if(mysqli_connect_error())
    {
        echo "Failed to connect to mysql: " .mysqli_connect_error();
    }
?>