<?php
    
    include "php/vieworder.php";
   
    include "header/shopheader.php";   
?>
 <div class="container main" style="padding-bottom:3%;padding-top:3%;">
 <div class="col-md-12 col-sm-12" style="text-align:center;"><span style="font-size:30px;font-family:'Patua One'"> Order Details</span></div>
 
 <table class="table table-bordered table-striped">
<tr> <td>Order ID <td> <?php  echo $row['id']; ?> </tr>
<tr> <td> File name <td> <a href="files/<?php echo $row['fname']; ?>"><?php  echo $row['fname']; ?>  </tr>
<tr> <td> Size <td> <?php  echo $row['size']; ?>  </tr> 
<tr> <td> Color <td> <?php  echo $row['color']; ?>  </tr> 
<tr> <td> Pages <td> <?php  echo $row['pages']; ?>  </tr>
<tr> <td> No of pages <td> <?php  echo $row['noofpages']; ?>  </tr>
<tr> <td> No of copies <td> <?php  echo $row['noofcopies']; ?>  </tr>
<tr> <td> Remarks <td> <?php  echo $row['remarks']; ?>  </tr>
<tr> <td> Delivery Location <td> <?php  echo $row['address']; ?>  </tr>
<tr> <td> Shop<td> <?php  echo $row['shop']; ?>  </tr>
<tr> <td> Delivery mode <td> <?php  echo $row['dmode']; ?>  </tr> 
<tr> <td> Delivery address <td> <?php  echo $row['address']; ?>  </tr>
<tr> <td> Total amount <td> <?php  echo $row['amount']; ?>  </tr>
<tr style="visibility: <?php echo $show; ?>" id="but"> <td style="text-align:center;"> <form action="" method="POST"><button type="submit" class="btn btn-primary" name="decline" style="width:100px;margin-top:5%;font-size:16px;font-family: 'Patua One';border-color:red;">Decline</button><td style="text-align:center;"> <button type="submit" class="btn btn-primary" name="confirm" style="width:100px;margin-top:5%;font-size:16px;font-family: 'Patua One';border-color:green;" >Confirm</button> </form></tr>
</table>
      




 </div> 

 
<?php
    include "footer/footer.php";
?>
