<?php   
    include "php/sverify.php";
?>
<!DOCTYPE html>
<html lang="en">
    <!--head begins here-->
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Online Printing system">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Akhil K Thomas">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hardocx Home </title>
        <!--downloaded bootstrap-->
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist\css\bootstrap.min.css">
        <!-- bootstrap cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!--custom styles-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Arvo|Fredoka+One|Libre+Caslon+Text|Ma+Shan+Zheng|Merriweather|Patua+One|Paytone+One|Permanent+Marker|Raleway|Red+Hat+Display|Red+Hat+Text|Righteous|Roboto|Roboto+Slab|Saira+Stencil+One&display=swap" rel="stylesheet"> 
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--mapbox api and css-->
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    </head>
    <!--end of head-->
    <!--body begins here-->
    <body>
        <!--nav bar-->
        <div>
            <header>
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php" style="color:#ffffff;">Hardocx</a>
                            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--navbar links and collapse settings-->
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a style="color:#ffffff;" href="#">Services</a></li>
                                <li><a style="color:#ffffff;" href="#">About</a></li>
                                <li><a style="color:#ffffff;" href="#">FAQ</a></li>
                                <li><a style="color:#ffffff;" href="#">Help</a></li>
                                <li><form action="../index.php"><button type="submit" name="submit" class="btn btn-primary" style="width:100px;margin-top:7%;font-size:16px;">Sign Up</button></form></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <!--end of nav bar-->
        <!--container 1-->
        <div class="col-md-6 col-sm-12 container" style="padding-bottom:6%;width:100%;padding-left:20%;padding-right:20%;text-align:center;">
            <div class="col-md-12 col-sm-12">
                <p style="font-size:24px;padding-top:5%;">Verify your mobile number</p><br>
                <form action="sverify.php" method="POST">
                <button type="submit" class="btn btn-primary" name="sent" style="width:100px;margin-top:4%;font-size:16px;font-family: 'Patua One';">Sent OTP</button><br>
                </form>
                <?php if(isset($sucess)): ?>
                    <span id="sucess"> <?php echo $sucess; ?> </span>
                <?php endif ?>
                <p style="font-size:16px;" >Enter OTP sent to your mobile number</p>
                <form action="sverify.php" method="POST">
                    <input type="text" name="otp" placeholder="Enter OTP" id="otp" style="width:250px;"><br>
                    <span style="font-size:16px;font-family:Arvo;"></span>
                    <button type="submit" class="btn btn-primary" name="verify" style="width:100px;margin-top:4%;font-size:16px;font-family: 'Patua One';">Verify</button><br><br>
                </form>
            </div>
        </div> 
        <!--conatiner 2-->
        <div class="container" style="background-color:white;font-size:15px;font-family:Arvo;">
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
        </div>
    </body>
</html>