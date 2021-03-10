<?php
    include "php/sreg.php";
?>
<?php
    include "header/signupheader.php";
?>
        <!--container 1-->
        <div class="container sreg" style="padding-bottom:1%;">
            <div class="col-md-5 col-sm-12 col-sm-12 moto" style="padding-top:12%;text-align:center;;">
            <center>
            <img class="log" src="images\bus.png" style="">
            <p class="moto" style="font-size:30px;text-align:center;"> Register your business on hardocx and earn more. </p>
            </center> 
            </div>
            <div class="col-md-5 col-sm-12 login">
                <span class="head">Register your business</span><br>
                <span class="sub">It's free and always will be.</span>
                <form action="sreg.php" method="POST" id="ssignup" onsubmit="return svalidateForm()">
                    <input type="text" name="shopname" placeholder="Shop name" id="shopname" value="<?php echo $shopname; ?>"><br>
                    <span class="error" id="x"></span>
                    <input type="text" name="mobile" placeholder="Mobile number" id="mobile" value="<?php echo $mobile; ?>"><br>
                    <?php if(isset($mobile_error)): ?>
                        <span class="error"> <?php echo $mobile_error; ?> </span>
                    <?php endif ?>
                    <span class="error" id="y"></span>
                    <input type="text" name="owner" placeholder="Owner name" id="owner" value="<?php echo $owner; ?>"><br>
                    <span class="error" id="z"></span>
                    <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $username; ?>"><br>
                    <?php if(isset($name_error)): ?>
                        <span class="error"> <?php echo $name_error; ?> </span>
                    <?php endif ?>
                    <span class="error" id="p"></span>
                    <input type="text" name="zipcode" placeholder="ZIP code" id="zipcode" value="<?php echo $zipcode; ?>"><br>
                    <span class="error" id="q"></span>
                    <input type="password" name="password" placeholder="Password" id="password"><br>
                    <span class="error" id="r"></span>
                    <input type="password" name="password" placeholder="Confirm password" id="cpassword"><br>
                    <span class="error" id="s"></span>
                    <span class="error" id="t"></span>
    
                    <button type="submit" class="btn btn-primary" name="register" style="width:100px;margin-top:7%;font-size:16px;font-family: 'Patua One';">Signup</button><br>
                    <span style="font-size:16px;font-family:Arvo;">Already have an account?<a href="clogin.php">Login here</a></span>
                </form>
            </div>
        </div> 
        <?php
            include "footer/footer.php";
        ?>