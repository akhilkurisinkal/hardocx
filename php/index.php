<?php
    //establish database connection
    include "connect.php";
    session_start();
    //initializing variables
    $name="";
    $mobile="";
    $username="";
    if(isset($_POST['signup']))
    {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $usertype="customer";

        $_SESSION['name'] = $name;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        $sql_u= "SELECT * FROM customers WHERE username='$username'";
        $sql_m= "SELECT * FROM customers WHERE mobile= '$mobile'";
        $res_u= mysqli_query($con,$sql_u) or die(mysqli_error($con));
        $res_m= mysqli_query($con,$sql_m) or die(mysqli_error($con));
        $mobile_error= " ";
        $name_error= " ";
        if(mysqli_num_rows($res_m) > 0)
        {
            $mobile_error= "Mobile number already registered";
        }
        if(mysqli_num_rows($res_u) > 0)
        {
            $name_error= "Username already taken";
        }
        else
        {
            header( "Location: cverify.php" ); die;
        }
    }
?>