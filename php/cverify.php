<?php
    include "connect.php";
    session_start();
    $otp=8921;
    setcookie('otp',$otp);
    if(isset($_POST['sent']))
    {
        require('textlocal.class.php');

        $textlocal = new Textlocal(false,false,////////////////////////////);
        $number=$_SESSION['mobile'];
        $numbers = array($number);
        $sender = 'TXTLCL';
        $otp= mt_rand(10000,99999);
        $message = 'Hello' . $_SESSION['name'] . 'your OTP is' . $otp;

        try {
            $result = $textlocal->sendSms($numbers, $message, $sender);
            setcookie('otp',$otp);
            $sucess="Sucesfully Sent";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
            
                $name=$_SESSION['name'];
                $mobile=$_SESSION['mobile'];
                $username=$_SESSION['username'];
                $password=$_SESSION['password'];
                $usertype="customer";
                if(isset($_POST['verify']))
                {
                    $otp=$_POST['otp'];
                    if($_COOKIE['otp']== $otp)
                    {
                       $query= "INSERT INTO customers (`name`,mobile,username,`password`)
                        VALUES ('$name','$mobile','$username','$password')";
                        $lquery= "INSERT INTO login (username,`password`,usertype)
                                VALUES ('$username','$password','$usertype')";
                        $result= mysqli_query($con,$query) or die(mysqli_error($con));
                        $lresult= mysqli_query($con,$lquery) or die(mysqli_error($con));
                        header( "Location: welcome.php" ); 
                        die;
                        exit();
                    }
                    else{
                        echo "<span class='error'>";
                        echo "Invalid OTP";
                        echo "</span>"; 
                    }
                }
?>