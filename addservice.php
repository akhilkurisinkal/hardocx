<?php
    
    include "connect.php";
    session_start();
?>
<?php
    include "chklog.php";
    include "php/addservice.php";
?>
<?php
    include "header/shopheader.php";
?>
        <!--container 1-->
        <div class="col-md-12 col-sm-12 container verify" style="padding-top:5%;padding-bottom:10%;" >
            <div class="col-md-12 col-sm-12" style="padding-top:3%;"><span class="head" style="font-family: 'Patua One';">Add New Service</span></div>
            <form method="POST" action="addservice.php">
            <div class="col-md-3 col-sm-12" style="padding-top:3%;"><select class="form-control selcls" name="size"><option value="a3">A3</option><option value="a4">A4</option><option value="a5">A5</option></select></div>
            <div class="col-md-3 col-sm-12" style="padding-top:3%;"><select class="form-control selcls" name="color"><option value="black">Black & White</option><option value="color">Color</option></select></div>
             <div class="col-md-3 col-sm-12" style="padding-top:3%;"><select class="form-control selcls" name="side"><option value="single">Single Side</option><option value="double">Double Side</option></select></div>
             <div class="col-md-3 col-sm-12" style="padding-top:3%;"> <input class="form-control" type="text" name="rate" placeholder="Rate in INR" name="rate" style="margin:0;height: 35px;"></div>
             <div class="col-md-12 col-sm-12" style="padding-top:3%;">
              <?php if(isset($error)): ?>
                <span class="error" id="x"><?php  echo $error; ?> </span>
                <?php endif ?>
                 <?php if(isset($sucess)): ?>
                    <span id="sucess"> <?php echo $sucess; ?> </span>
                <?php endif ?>
            </div>
             <div class="col-md-12 col-sm-12" style="padding-top:1%;"><button type="submit" name="addservice" class="btn btn-primary" style="width:130px;margin-top:7%;font-size:16px;">Add Service</button></div>

            </form>
        </div> 
    <!--conatiner 2 footer-->
    <div class="container" style="background-color:white;font-size:15px;font-family:Arvo;">
    <footer>
            <hr/>
            <div class="col-md-6 col-sm-12 copy">
                <a href="#l">Signup|</a><a href="#l"> Login|</a><a href="#l"> Developers|</a><a href="#l"> Careers |</a><a href="#l">Contact|</a><a href="#l"> Privacy| </a><a href="#l">Terms & conditions|</a><a href="#l"> Help</a><br>
                <br>
                Contact: hardocx@gmail.com | +91 9447449545
                <br>
                Address: Kochi, India | ZIP - 682008
            </div>
            <div class="col-md-6 col-sm-12 social">
                    <a href="#fb"><i class="fa fa-facebook-square" style="font-size:30px;"></i></a>
                    <a href="#fb"><i class="fa fa-github" style="font-size:30px;"></i></a>
                    <a href="#fb"><i class="fa fa-instagram" style="font-size:30px;"></i></a>
                    <a href="#fb"><i class="fa fa-linkedin" style="font-size:30px;"></i></a><br><br>
                    <span style="padding-left:15%;">This website is developed by<a href="https://www.facebook.com/akhilkurisinkal"> Akhil K Thomas</a></span>
                    <span style="padding-left:15%;">Hardocx &copy; 2019</span>
            </div>
    </footer>
    </div>
    </body>
</html>
