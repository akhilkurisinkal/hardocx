<?php
    $username=$_SESSION['username'];
    if(isset($_POST['addservice']))
    {
        $size=$_POST['size'];
        $color=$_POST['color'];
        $side=$_POST['side'];
        $rate=$_POST['rate'];
        if($size=='a3')
        {
            if($color=='black')
            {
                if($side=='single')
                {
                    $checkbs="SELECT blacksingle FROM a3 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['blacksingle']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a3 SET blacksingle=$rate WHERE shop='$username'";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
                if($side=='double')
                {
                    $checkbs="SELECT blackdouble FROM a3 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs) or die(mysqli_error($con));
                    $row = $res_bs->fetch_assoc();
                    if($row['blackdouble']!=NULL)   
                    {                 
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a3 SET blackdouble=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
            }
            if($color=='color')
            {
                if($side=='single')
                {
                    $checkbs="SELECT colorsingle FROM a3 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['colorsingle']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a3 SET colorsingle=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
                if($side=='double')
                {
                    $checkbs="SELECT colordouble FROM a3 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['colordouble']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a3 SET colordouble=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
            }
        }
        if($size=='a4')
        {
            if($color=='black')
            {
                if($side=='single')
                {
                    $checkbs="SELECT blacksingle FROM a4 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['blacksingle']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a4 SET blacksingle=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
                if($side=='double')
                {
                    $checkbs="SELECT blackdouble FROM a4 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['blackdouble']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a4 SET blackdouble=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
            }
            if($color=='color')
            {
                if($side=='single')
                {
                    $checkbs="SELECT colorsingle FROM a4 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['colorsingle']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a4 SET colorsingle=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
                if($side=='double')
                {
                    $checkbs="SELECT colordouble FROM a4 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['colordouble']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a4 SET colordouble=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
            }
        }
        if($size=='a5')
        {
            if($color=='black')
            {
                if($side=='single')
                {
                    $checkbs="SELECT blacksingle FROM a5 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['blacksingle']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a5 SET blacksingle=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
                if($side=='double')
                {
                    $checkbs="SELECT blackdouble FROM a5 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['blackdouble']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a5 SET blackdouble=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
            }
            if($color=='color')
            {
                if($side=='single')
                {
                    $checkbs="SELECT colorsingle FROM a5 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['colorsingle']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a5 SET colorsingle=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
                if($side=='double')
                {
                    $checkbs="SELECT colordouble FROM a5 WHERE shop='$username'";
                    $res_bs=mysqli_query($con,$checkbs);
                    $row = $res_bs->fetch_assoc();
                    if($row['colordouble']!=NULL)
                    {
                        $error="Service Exists";
                        
                    }
                    else
                    {
                        $bs="UPDATE a5 SET colordouble=$rate WHERE shop='$username' ";
                        mysqli_query($con,$bs) or die(mysqli_error($con));
                        $sucess="Service Added";
                    }
                }
            }

        }


    }
?>