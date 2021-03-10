<?php
    session_start();

   
    include "header/customerheader.php";   
?>
 <div class="col-md-12 col-sm-12 container verify" style="padding-top: 2%;padding-bottom:2%;text-align: center;padding-left: 30%;padding-right: 30%;">

<p class="head" style="font-family:Arvo;">Order details</p>
<table class="table table-bordered table-striped">
<tr> <td>Order ID <td> <?php  echo $_SESSION['id']; ?> </tr>
<tr> <td> File name <td> <?php  echo $_SESSION['fname']; ?>  </tr>
<tr> <td> Size <td> <?php  echo $_SESSION['size']; ?>  </tr>
<tr> <td> Color <td> <?php  echo $_SESSION['color']; ?>  </tr> 
<tr> <td> Pages <td> <?php  echo $_SESSION['pages']; ?>  </tr>
<tr> <td> No of pages <td> <?php  echo $_SESSION['noofpages']; ?>  </tr>
<tr> <td> No of copies <td> <?php  echo $_SESSION['noofcopies']; ?>  </tr>
<tr> <td> Remarks <td> <?php  echo $_SESSION['remarks']; ?>  </tr>
<tr> <td> Delivery Location <td> <?php  echo $_SESSION['location']; ?>  </tr>
<tr> <td> Shop<td> <?php  echo $_SESSION['shop']; ?>  </tr>
<tr> <td> Delivery mode <td> <?php  echo $_SESSION['dmode']; ?>  </tr> 
<tr> <td> Delivery address <td> <?php  echo $_SESSION['address']; ?>  </tr>
<tr> <td> Cost <td> <?php  echo $_SESSION['cost']; ?>  </tr> 
<tr> <td> Delivery charge <td> <?php  echo $_SESSION['dcharge']; ?>  </tr> 
<tr> <td> Total amount <td> <?php  echo $_SESSION['amount']; ?>  </tr>
</table>
<form method="POST" action="php/pay.php">
<button class="btn btn-primary" style="margin-top:5%;" type="submit" name="pay">Pay Rs <?php echo $_SESSION['amount']; ?> </button>
</form>

 </div>
 <?php
 	include "footer/footer.php";
 ?>