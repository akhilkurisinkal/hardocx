<?php
	session_start();
	include "connect.php";
	$error="";
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$_SESSION['username']=$username;
		$u=" SELECT * FROM `login` WHERE username= '$username'" ;
		$res_u= mysqli_query($con,$u) or die(mysqli_error($con));
		if(mysqli_num_rows($res_u) === 0)
		{
			$error="Invalid credintials";
		}
        else if (mysqli_num_rows($res_u) > 0) 
        {
	    	$row = mysqli_fetch_assoc($res_u);
	    	if($row["password"]== $password)
	    	{

	    		if($row["usertype"] == "customer")
	    		{
	    				header( "Location: chome.php" ); 
	    		}
	    		else if($row["usertype"] == "business")
	    		{
	    				header( "Location: shome.php" ); 
	    		}
	    	}
	    	else
	    	{
	    		$error="Invalid credintials";
	    	}
    	}

	}
?>