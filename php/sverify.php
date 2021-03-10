<?php
    include "connect.php";
    session_start();
    $otp=8921;
    setcookie('otp',$otp);
    if(isset($_POST['sent']))
    {
        require('textlocal.class.php');

        $textlocal = new Textlocal(false,false,////////////////////////////////////);
        $number=$_SESSION['mobile'];
        $numbers = array($number);
        $sender = 'TXTLCL';
        $otp= mt_rand(10000,99999);
        $message = 'Hello ' . $_SESSION['shopname'] . ' your OTP is ' . $otp;

        try {
            $result = $textlocal->sendSms($numbers, $message, $sender);
            setcookie('otp',$otp);
            $sucess="Sucesfully Sent";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
                $shopname=$_SESSION['shopname'];
                $name=$_SESSION['shopname'];
                $mobile=$_SESSION['mobile'];
                $owner=$_SESSION['owner'];
                $username=$_SESSION['username'];
                $zipcode=$_SESSION['zipcode'];
                $password=$_SESSION['password'];
                $usertype="business";
                if(isset($_POST['verify']))
                {
                    $otp=$_POST['otp'];
                    if($_COOKIE['otp']== $otp)
                    {
                       $query= "INSERT INTO shops (shopname,mobile,`owner`,username,zipcode)
                        VALUES ('$shopname','$mobile','$owner','$username','$zipcode')";
                        $lquery= "INSERT INTO login (username,`password`,usertype)
                                VALUES ('$username','$password','$usertype')";
                        $a3="INSERT INTO a3 (shop) 
                        VALUES ('$username')";
                        $a4="INSERT INTO a4 (shop) 
                        VALUES ('$username')";
                        $a5="INSERT INTO a5 (shop) 
                        VALUES ('$username')";
                        $result= mysqli_query($con,$query) or die(mysqli_error($con));
                        $lresult= mysqli_query($con,$lquery) or die(mysqli_error($con));
                        mysqli_query($con,$a3) or die(mysqli_error($con));
                        mysqli_query($con,$a4) or die(mysqli_error($con));
                        mysqli_query($con,$a5) or die(mysqli_error($con));
                        header( "Location: welcome.php" ); 
                        die;
                        exit();
                    }
                }
?>