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
	$cost=$_SESSION['cost'];
	if(isset($_POST['payment']))
	{
		$dmode=$_POST['dmode'];
		if($dmode=="deliver")
		{
			$dcharge=50;
			$amount=$dcharge+$cost;
			$address=$_POST['address'];
			$_SESSION['address']=$address;
		}
		else
		{
			$dcharge=0;
			$amount=$dcharge+$cost;
			$address="nill";
			$_SESSION['address']=$address;
		}
		$_SESSION['dmode']=$dmode;
		$_SESSION['dcharge']=$dcharge;
		$_SESSION['amount']=$amount;
		header( "Location: pay.php" );
	}