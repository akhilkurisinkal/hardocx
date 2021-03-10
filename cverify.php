<?php
    include "php/cverify.php";
    include "header/loginheader.php";
?>
        <!--container 1-->
        <div class="col-md-12 col-sm-12 container verify" >
            
            
                
                <p style="font-size:24px;padding-top:5%;">Verify your mobile number</p>
                <form action="cverify.php" method="POST">
                <button type="submit" class="btn btn-primary" name="sent" style="width:100px;;font-size:16px;font-family: 'Patua One';">Sent OTP</button><br>
                </form><br>
                <?php if(isset($sucess)): ?>
                    <span id="sucess"> <?php echo $sucess; ?> </span>
                <?php endif ?>
                
                <p style="font-size:16px;" >Enter OTP sent to your mobile number</p>
                <form action="cverify.php" method="POST">
                    <input type="text" name="otp" placeholder="Enter OTP" id="otp" style="width:250px;"><br>
                    <span style="font-size:16px;font-family:Arvo;"></span>
                    <button type="submit" class="btn btn-primary" name="verify" style="width:100px;margin-top:1%;font-size:16px;font-family: 'Patua One';">Verify</button><br><br>
                </form>
            
        </div> 
<?php
    include "footer/footer.php";
?>