<?php
    
    include "php/selectshop.php";
    include "chklog.php";
    include "header/customerheader.php";   
?>
 <div class="col-md-12 col-sm-12 container verify" style="padding-top: 5%;padding-bottom:8%;text-align: center;padding-left: 20%;padding-right: 20%;">
            
            
                
                <p style="font-size:24px;padding-top:0%;">Select a nearby shop.</p>
                <form action="" method="POST">

                <?php
                	  while($row = mysqli_fetch_array($res)) 
         {
         		
         		echo	"<div class='{$class} radios' style='margin-top:2%;'>" ."<input type='radio' name='rGroup' value='{$row['shop']}' id='{$row['shop']}'  />
<label class='radio' for='{$row['shop']}'><img src='images/shop.png' style='width:60px;height:60px;'></label>";
        		echo "<p>"."<p>" . $row["shop"]."<p> Rs ". $row["$bc"]*$nos*$noc  ."</div>" . "<br>";

        		
        	
    	}
    	?>
    	<button type="submit" class="btn btn-primary" name="continue" style="width:100px;margin-top:7%;font-size:16px;font-family: 'Patua One';">Continue</button>
         </form>     
                
 </div> 
<?php
    include "footer/footer.php";
?>
