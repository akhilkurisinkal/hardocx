<?php
	if(isset($_POST['upload']))
	{
		

		do
		{

			$id=mt_rand(10000,99999);
			$oid="HDX" .$id;
			$oquery="SELECT * FROM orders WHERE id='$oid' ";
			$res_o=mysqli_query($con,$oquery) or die(mysqli_error($con));
			if(mysqli_num_rows($res_o) > 0)
			{
				$flag="false";
			}
			else
			{
				$flag="true";
			}
		}while($flag=="false");

		
		$ext=".pdf";
		$name=$oid.$ext;
		$file= $_FILES["file"];
		move_uploaded_file($file["tmp_name"], "files/" . $name);
		//---------------------------------------------------------------
		$size=$_POST['size'];
		$color=$_POST['color'];
		$side=$_POST['side'];
		$pages=$_POST['pages'];
		$noofpages=$_POST['noofpages'];
		$noofcopies=$_POST['noofcopies'];
		$remarks=$_POST['remarks'];
		$location=$_POST['location'];



		$_SESSION['id']=$oid;
		$_SESSION['size']=$size;
		$_SESSION['color']=$color;
		$_SESSION['side']=$side;
		$_SESSION['pages']=$pages;
		$_SESSION['noofpages']=$noofpages;
		$_SESSION['noofcopies']=$noofcopies;
		$_SESSION['remarks']=$remarks;
		$_SESSION['location']=$location;
		$_SESSION['fname']=$name;
		header( "Location: selectshop.php" );


	}
?>
