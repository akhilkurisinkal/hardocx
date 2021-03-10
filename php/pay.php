<?php
	
	session_start();

		$oid=$_SESSION['id'];
		$size=$_SESSION['size'];
		$color=$_SESSION['color'];
		$side=$_SESSION['side'];
		$pages=$_SESSION['pages'];
		$nop=$_SESSION['noofpages'];
		$noc=$_SESSION['noofcopies'];
		$remarks=$_SESSION['remarks'];
		$location=$_SESSION['location'];
		$fname=$_SESSION['fname'];
		$shop=$_SESSION['shop'];
		$amount=$_SESSION['amount'];
		$dmode=$_SESSION['dmode'];
		$address=$_SESSION['address'];
		$user=$_SESSION['username'];
		$phone='9746029812';


		//

		include '../instamojo/Instamojo.php';
		$api = new Instamojo\Instamojo('////////////////////////////////////////////////////////////////////////); 

		//

		try {
			$response = $api->paymentRequestCreate(array(
				"purpose" => $oid,
				"amount" => $amount,
				"send_email" => false,
				"buyer_name" => 'Akhil',
				"phone" => $phone,
				"send_sms" => true,
				"email" => "akhilkthomas99@gmail.com",
				"allow_repeated_payments" => false,
				"redirect_url" => "http://localhost/hardocx/thankyou.php"
				//"webhook"
				));
			//print_r($response);

			$pay_url=$response['longurl'];
			header("location:$pay_url");
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}





	
?>