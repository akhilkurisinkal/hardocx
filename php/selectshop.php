<?php
	include "connect.php";
    session_start();
    $username=$_SESSION['username'];

	$size=$_SESSION['size'];
	$color=$_SESSION['color'];
	$side=$_SESSION['side'];
	$pages=$_SESSION['pages'];
	$noofpages=$_SESSION['noofpages'];
	$noofcopies=$_SESSION['noofcopies'];
	$remarks=$_SESSION['remarks'];
	$location=$_SESSION['location'];

		if($size=='a3')
        {
            if($color=='black')
            {
                if($side=='single')
                {
                    $property="a3blacksingle";
                    
                }
                if($side=='double')
                {
                    $property="a3blackdouble";
                }
            }
            if($color=='color')
            {
                if($side=='single')
                {
                    $property="a3colorsingle";
                    
                }
                if($side=='double')
                {
                    $property="a3colordouble";
                }
            }
                
        }
        if($size=='a4')
        {
            if($color=='black')
            {
                if($side=='single')
                {
                    $property="a4blacksingle";
                    
                }
                if($side=='double')
                {
                    $property="a4blackdouble";
                }
            }
            if($color=='color')
            {
                if($side=='single')
                {
                    $property="a4colorsingle";
                    
                }
                if($side=='double')
                {
                    $property="a4colordouble";
                }
            }
                
        }
        if($size=='a5')
        {
            if($color=='black')
            {
                if($side=='single')
                {
                    $property="a5blacksingle";
                    
                }
                if($side=='double')
                {
                    $property="a5blackdouble";
                }
            }
            if($color=='color')
            {
                if($side=='single')
                {
                    $property="a5colorsingle";
                    
                }
                if($side=='double')
                {
                    $property="a5colordouble";
                }
            }
                
        }

        //----------------------------------------------------------------------

        if($property=="a3blacksingle")
        {
        	$bc='blacksingle';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT blacksingle,shop,zipcode FROM a3,shops where (blacksingle!= 'NULL') and (zipcode=$location) and a3.shop=shops.username ORDER BY blacksingle asc limit 3";
        }
        if($property=="a3blackdouble")
        {
        	$bc='blackdouble';
        	$nos=$noofpages/2;
        	$noc=$noofcopies;
        	$squery="SELECT blackdouble,shop,zipcode FROM a3,shops where (blackdouble!= 'NULL') and (zipcode=$location) and a3.shop=shops.username ORDER BY blackdouble asc limit 3";
        }
        if($property=="a3colorsingle")
        {
        	$bc='colorsingle';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT colorsingle,shop,zipcode FROM a3,shops where (colorsingle!= 'NULL') and (zipcode=$location) and a3.shop=shops.username ORDER BY colorsingle asc limit 3";
        }
        if($property=="a3colordouble")
        {
        	$bc='colordouble';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT colordouble,shop,zipcode FROM a3,shops where (colordouble!= 'NULL') and (zipcode=$location) and a3.shop=shops.username ORDER BY colordouble asc limit 3";
        }
        //----------------------------------------------------------------------------------------





        if($property=="a4blacksingle")
        {
        	$bc='blacksingle';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT blacksingle,shop,zipcode FROM a4,shops where (blacksingle!= 'NULL') and (zipcode=$location) and a4.shop=shops.username ORDER BY blacksingle asc limit 3";
        }
        if($property=="a4blackdouble")
        {
        	$bc='blackdouble';
        	$nos=$noofpages/2;
        	$noc=$noofcopies;
        	$squery="SELECT blackdouble,shop,zipcode FROM a4,shops where (blackdouble!= 'NULL') and (zipcode=$location) and a4.shop=shops.username ORDER BY blackdouble asc limit 3";
        }
        if($property=="a4colorsingle")
        {
        	$bc='colorsingle';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT colorsingle,shop,zipcode FROM a4,shops where (colorsingle!= 'NULL') and (zipcode=$location) and a4.shop=shops.username ORDER BY colorsingle asc limit 3";
        }
        if($property=="a4colordouble")
        {
        	$bc='colordouble';
        	$nos=$noofpages/2;
        	$noc=$noofcopies;
        	$squery="SELECT colordouble,shop,zipcode FROM a4,shops where (colordouble!= 'NULL') and (zipcode=$location) and a4.shop=shops.username ORDER BY colordouble asc limit 3";
        }
        //------------------------------------------------------------------------------------------------------------------------------



        if($property=="a5blacksingle")
        {
        	$bc='blacksingle';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT blacksingle,shop,zipcode FROM a5,shops where (blacksingle!= 'NULL') and (zipcode=$location) and a5.shop=shops.username ORDER BY blacksingle asc limit 3";
        }
        if($property=="a5blackdouble")
        {
        	$bc='blackdouble';
        	$nos=$noofpages/2;
        	$noc=$noofcopies;
        	$squery="SELECT blackdouble,shop,zipcode FROM a5,shops where (blackdouble!= 'NULL') and (zipcode=$location) and a5.shop=shops.username ORDER BY blackdouble asc limit 3";
        }
        if($property=="a5colorsingle")
        {
        	$bc='colorsingle';
        	$nos=$noofpages;
        	$noc=$noofcopies;
        	$squery="SELECT colorsingle,shop,zipcode FROM a5,shops where (colorsingle!= 'NULL') and (zipcode=$location) and a5.shop=shops.username ORDER BY colorsingle asc limit 3";
        }
        if($property=="a5colordouble")
        {
        	$bc='colordouble';
        	$nos=$noofpages/2;
        	$noc=$noofcopies;
        	$squery="SELECT colordouble,shop,zipcode FROM a5,shops where (colordouble!= 'NULL') and (zipcode=$location) and a5.shop=shops.username ORDER BY colordouble asc limit 3";
        }
        //---------------------------------------------------------------------------------

        $res=mysqli_query($con,$squery) or die(mysqli_error($con));
        
     
    	if(mysqli_num_rows($res) ==1)
    	{
    		$class="col-md-12 col-sm-12";
    	}
    	else if(mysqli_num_rows($res) ==2)
    	{
    		$class="col-md-6 col-sm-12";
    	}
    	else if(mysqli_num_rows($res) ==3)
    	{
    		$class="col-md-4 col-sm-12";
    	}

    	if(isset($_POST['continue']))
    	{
    		$shop=$_POST['rGroup'];
    		$query="SELECT ". $bc ." FROM ".$size." WHERE shop='$shop'";
    		$ress=mysqli_query($con,$query) or die(mysqli_error($con));
    		$row = mysqli_fetch_assoc($ress);
    		$rate=$row["$bc"];
    		$cost=$rate*$nos*$noc;
            $_SESSION['shop']=$shop;
    		$_SESSION['cost']=$cost;
			header( "Location: dmode.php" );
    	}

















 ?>