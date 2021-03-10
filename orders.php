<?php
    
    include "php/orders.php";
   
    include "header/shopheader.php";   
?>
 <div class="container main" style="padding-bottom:3%;padding-top:3%;">
 <div class="col-md-12 col-sm-12" style="text-align:center;"><span style="font-size:30px;font-family:'Patua One'">Your orders</span></div>
 
 <div class="col-md-6 col-sm-12" style="text-align:center;height:40vh;overflow-y:auto;">
 <p style="font-size:20px;font-family:'Patua One';">New orders</p>
    <?php 
         if (mysqli_num_rows($res) == 0)
         {
             echo "No orders";
         }
         while($row = mysqli_fetch_assoc($res)) 
         {

            echo "<a href='vieworder.php?id=".$row["id"]."' ><div class='col-sm-12 col-md-12' style='border-style:dotted;border-color:blue;margin-bottom:3%;border-radius:10px;'><img src='images/order.ico' style='width:50px;height:50px;'>". $row['id'] ." on ". $row['date'] ."</div></a>";
         }
    ?>
        
            
        </div>  
        <div class="col-md-6 col-sm-12" style="text-align:center;height:40vh;overflow-y:auto;">
        <p style="font-size:20px;font-family:'Patua One'">Pending orders</p>
            
        <?php 
         if (mysqli_num_rows($resp) == 0)
         {
             echo "No orders";
         }
         while($row = mysqli_fetch_assoc($resp)) 
         {

            echo "<a href='vieworder.php?id=".$row["id"]."' ><div class='col-sm-12 col-md-12' style='border-style:dotted;margin-left:2%;border-color:blue;margin-bottom:3%;border-radius:10px;'><img src='images/order.ico' style='width:50px;height:50px;'>". $row['id'] ." on ". $row['date'] ."</div></a>";
         }
    ?>
        

        </div>
           
 </div> 
<?php
    include "footer/footer.php";
?>
