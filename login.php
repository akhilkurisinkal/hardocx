<!DOCTYPE html>
<?php
    include "php/login.php";
?>
<?php
    include "header/loginheader.php";
?>
        <!--container 1-->
        <div class="container logmain ">
            <div class="col-md-6 col-sm-12 moto" style="padding-bottom:0px;">
            <center>
            <img class="log" src="images\login.png" style="margin-top:5%;width:30%;height:30%;">
            <p class="m" style="font-size:24px;text-align:center;">Login to your hardocx account and start printing.</p>
            </center> 
                
            </div>
            <div class="col-md-5 col-sm-12 login" style="margin-top:5%;">
                <span class="head">Login</span>
                <form action="login.php" method="POST" id="login" onsubmit="return validateForm()">
                    <span class="error" id="x"><?php echo $error; ?> </span>
                    <input type="text" name="username" placeholder="Username" id="username"><br>
                    <input type="password" name="password" placeholder="Password" id="password"><br>
                    <span class="error" id="y"></span>
                    <span style="font-size:16px;font-family:Arvo;">Forgot password?<a href="#reset">Reset it here</a><br></span>
                    <button type="submit" class="btn btn-primary" name="login" style="width:100px;margin-top:7%;font-size:16px;font-family: 'Patua One';">Login</button><br><br>
                    <span style="font-size:16px;font-family:Arvo;">New to Hardocx?<a href="index.php"> Create an account</a></span>
                </form>
            </div>
        </div> 
        <?php
            include "footer/footer.php";
        ?>