<?php
    
    include "php/dmode.php";
   
    include "header/customerheader.php";   
?>
 <div class="col-md-12 col-sm-12 container verify" style="padding-top: 5%;padding-bottom:8%;text-align: center;padding-left: 0%;padding-right: 0%;">
            
            
        <script type="text/javascript">
        function ad() 
        {
            document.getElementById('ad').style.visibility = "visible";
            return true;
        }
         function adn() 
        {
            document.getElementById('ad').style.visibility = "hidden";
            return true;
        }
        function validate() 
            {
                if(document.getElementById('ad').style.visibility == "visible")
                {
                    var x = document.getElementById('add').value;
                    if(x=="")
                    {
                        
                        document.getElementById('er').innerHTML="Enter an address to deliver";
                        return false;
                    }
                    else
                    {
                        return true;
                    }
                }
             }

        </script>
                <p class="head" style="font-size:30px;padding-top:0%;">Delivery mode.</p>
                <img src="images/del.ico">
                <form method="POST" action="" style="font-size: 20px;" id="del" onsubmit="return validate();">
                <div class="col-md-12 col-sm-12 " >Pick up from shop<input class="form-control" value="pickup" name="dmode" id="pickup" type="radio" onclick="return adn();" checked></div>
                <div class="col-md-12 col-sm-12" >Deliver to my address<input class="form-control" name="dmode" id="deliver" type="radio" value="deliver" onclick="return ad();" ></div>
                <div class="col-md-12 col-sm-12 address" style="padding-right: 40%;padding-left: 40%;visibility:hidden;" id="ad">
                    <input type="text" class="form-control ad" name="address" id="add" style="height:70px;" placeholder="Address" >
                    <p id="er" class="error"></p>
                </div>
                <button class="btn btn-primary" style="margin-top:2%;" type="submit" name="payment">Proceed to payment</button>
                </form>
           
 </div> 
<?php
    include "footer/footer.php";
?>
