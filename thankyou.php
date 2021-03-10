<?php
    session_start();
    if(isset($_GET['payment_status']))
    $status =$_GET['payment_status'];
    if($status == 'Failed')
    {
        header("location: failed.php");
    }
    include "header/customerheader.php";
?>
        <!--container 1-->
        <div class="col-md-12 col-sm-12 container verify" style="padding-bottom:5%;">
          
                    <img src="images/tq.png">
                    <h1>Thank You for printing with Hardocx !</h1>
                    <h2>Your order ID is <span style="color:#0275d8;"> <?php echo $_SESSION['id']; ?> </span></h2>
                  
                    


                    
                <?php
                    include 'instamojo/Instamojo.php';
                    $api = new Instamojo\Instamojo('test_cd2400c5cacd5f00e8318223f0a', 'test_567e50fd80c49da827a9a779b2f', 'https://test.instamojo.com/api/1.1/'); 
                    
                    $payid=$_GET['payment_request_id'];
                    try{
                        $response= $api->paymentRequestStatus($payid);
                    
                ?><p>
                Payment ID :<span style="color:green;"> <?php echo $response['payments'][0]['payment_id']; ?> </span>
                </p>
                <p>We have e-mailed you receipt of your payment. Please do check the same.</p>
                <?php
                    $pid=$response['payments'][0]['payment_id'];
                    }
                    catch(Exception $e)
                    {
                        print("Error:" .$e->getMessage());

                    }
                ?>
            <button class="btn btn-primary" style="margin-top:5%;"  name="receipt"  onclick="printDiv('receipt')">Get Receipt</button>

                <div class="receipt" id="receipt" style="display:none;">
                   <h2> E-Receipt</h2>
                    <table class="table table-bordered table-striped" border=1>
                        <tr><td>ORDER ID</td><td><?php echo $_SESSION['id'] ?></td></tr>
                        <tr><td>Payment status</td><td>Paid</td></tr>
                        <tr><td>Payment ID</td><td><?php echo $pid ?></td></tr>
                        <tr><td>Username</td><td><?php echo $_SESSION['username'] ?></td></tr>
                        <tr><td>Shop</td><td><?php echo $_SESSION['shop'] ?></td></tr>
                        <tr><td>Delivery mode</td><td><?php echo $_SESSION['dmode'] ?></td></tr>
                        <tr><td>Delivery address</td><td><?php echo $_SESSION['address'] ?></td></tr>
                    </table>
                </div>


             
        </div> 

        <script type="text/javascript">
    function printDiv(receipt) {
        var printContents = document.getElementById(receipt).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
    </script>
<?php
include "connect.php";
if($status == 'Credit')
{
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
        $date=date('Y-m-d H:i:s');
        $status='placed';

        $place="INSERT INTO orders (id,username,fname,size,color,side,pages,noofpages,noofcopies,remarks,`address`,shop,`date`,dmode,amount,`status`)
        VALUES ('$oid','$user','$fname','$size','$color','$side','$pages',$nop,$noc,'$remarks','$address','$shop','$date','$dmode',$amount,'$status')";
        mysqli_query($con,$place) or  die(mysqli_error($con));
        
}

?>
<?php
    include "footer/footer.php";
?>


