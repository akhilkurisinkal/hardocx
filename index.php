<?php
    include "php/index.php";
?>
<?php
    include "header/signupheader.php";
?>
        <!--container 1-->
        <div class="container main" style="padding-bottom:3%;">
            <div class="col-md-7 col-sm-12 moto" id="ak">
                <p class="m">Print your documents <br> on the go.</p>
                <p class="mn" style="font-size:24px;">Create an account and start printing today.</p><br>
            
                    <p style="font-size:16px;" >Own a print shop? <a href="sreg.php">Register your business here</a></p>
                    
            </div>
            <!-- signup form-->
            <div class="col-md-5 col-sm-12 login">
                <span class="head">Create an account</span><br>
                <span class="sub">It's free and always will be.</span>
                <form action="index.php" method="POST" id="csignup" onsubmit="return validateForm()">
                    <input class="" type="text" name="name" placeholder="Full name" id="name" value="<?php echo $name; ?>" ><br>
                    <span class="error" id="x"></span>
                    <input class="" type="text" name="mobile" placeholder="Mobile number" id="mobile" value="<?php echo $mobile; ?>"><br>
                    <?php if(isset($mobile_error)): ?>
                    <span class="error"> <?php echo $mobile_error; ?> </span>
                    <?php endif ?>
                    <span class="error" id="y"></span>
                    <input class="" type="text" name="username" placeholder="Username" id="username" value="<?php echo $username; ?>"><br>
                    <?php if(isset($name_error)): ?>
                    <span class="error"> <?php echo $name_error; ?> </span>
                    <?php endif ?>
                    <span class="error" id="z"></span>
                    <input class="" type="password" name="password" placeholder="Password" id="password"><br>
                    <span class="error" id="p"></span>
                    <input class="" type="password" name="cpassword" placeholder="Confirm password" id="cpassword"><br>
                    <p class="error" id="q"></p>
                    <button type="submit" class="btn btn-primary" name="signup" id="signup" style="width:100px;margin-top:5%;font-size:16px;font-family: 'Patua One';">Signup</button><br><br>
                    <span style="font-size:16px;font-family:Arvo;">Already have an account?<a href="login.php">Login here</a></span>
                </form>
            </div>
            <!--end of signup form-->
        </div> 
       <?php
            include "footer/footer.php";
        ?>