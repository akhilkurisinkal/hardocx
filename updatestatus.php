<?php
    
    include "php/updatestatus.php";
   
    include "header/shopheader.php";   
?>
 <div class="container main" style="padding-bottom:3%;padding-top:3%;text-align:center;">
 <img src="images/update.ico" width="60px" height="60px">
 <div class="col-md-12 col-sm-12" style="text-align:center;"><span style="font-size:30px;font-family:'Patua One'">Update order status</span></div>
 <p style="font-size:20px;font-family:'Patua One'"> Order ID &nbsp; </p> 
 <div class="col-md-12 col-sm-12 " style=" display: flex;justify-content: center;">

 <select class="form-control selcls" style="width:60%;margin-bottom:2%;">
 <option disabled selected value="0"> -- select an option -- </option>
 <?php
     while($row = mysqli_fetch_assoc($res)) 
     {
        echo "<option value="<?php $row['id']; ?>">". $row['id']; "</option>";
     }

 ?>  
 </select>  
 </div>
 <p style="font-size:20px;font-family:'Patua One'">Status &nbsp; </p> 
 <div class="col-md-12 col-sm-12 " style=" display: flex;justify-content: center;">
 
 
 <select class="form-control selcls" style="width:60%;margin-bottom:2%;">
     <option disabled selected value="0"> -- select an option -- </option>
     <option value="queued"> Queued</option>
     <option> Printing</option>
     <option> Printed </option>
     <option> Ready for Pick up</option>
     <option> Out for delivery</option>
     <option> Delivered</option>
</select>
    </div>
    <form action="" method="POST"><button type="submit" class="btn btn-primary" name="update" style="width:100px;margin-top:1%;font-size:16px;font-family: 'Patua One';">Update</button></form>
 </div> 
<?php
    include "footer/footer.php";
?>
