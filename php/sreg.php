<?php
    //establish database connection
    include "connect.php";
    //initializing variables
    session_start();
    $shopname="";
    $mobile="";
    $owner="";
    $username="";
    $zipcode="";
    $password="";
    if(isset($_POST['register']))
    {
        $shopname=$_POST['shopname'];
        $mobile=$_POST['mobile'];
        $owner=$_POST['owner'];
        $username=$_POST['username'];
        $zipcode=$_POST['zipcode'];
        $password=$_POST['password'];

        $_SESSION['shopname'] = $shopname;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['owner'] = $owner;
        $_SESSION['username'] = $username;
        $_SESSION['zipcode'] = $zipcode;
        $_SESSION['password'] = $password;
        

        $sql_u= "SELECT * FROM shops WHERE username='$username'";
        $sql_m= "SELECT * FROM shops WHERE mobile= '$mobile'";
        $res_u= mysqli_query($con,$sql_u) or die(mysqli_error($con));
        $res_m= mysqli_query($con,$sql_m) or die(mysqli_error($con));
        $mobile_error=" ";
        $name_error=" ";
        if(mysqli_num_rows($res_m) > 0)
        {
            $mobile_error= "Mobile number already registered";
        }
        else if(mysqli_num_rows($res_u) > 0)
        {
            $name_error= "Username already taken";
        }
        else
        {
            header( "Location: sverify.php" ); die;
        }
    }
?>