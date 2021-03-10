<?php 
    session_start();
    
    $name=$_SESSION['name'];
    $username=$_SESSION['username'];

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
        <title>Thankyou for signing up on Hardocx</title>
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
        <!--font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--javascript-->
        <script type="text/javascript" src="js\csignupvalidation.js">
        </script> 
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
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <!--end of nav bar-->
        <!--container 1-->
        <div class="col-md-12 col-sm-12 container welcome" >
                <center>
                <img class="log" src="images\Welcome.png" style="margin-top:5%;width:10%;height:10%;">
               
                <p style="font-size:30px;padding-top:1%;font-family:Righteous;">Welcome</p> 
                 <p style="font-size:18px;padding-top:0%;font-family:Righteous;color:#428bca;"> <?php if(isset($name)){ echo $name; } ?></p>
                </center>
                <p style="font-size:20px;padding-top:1%;font-family:Arvo;">Thanks for creating a Hardocx account. <br>Use it to print your photos,documents,business cards and so on.</p>
                <p style="font-size:20px;padding-top:0%;font-family:Arvo;">Your username is <span style="font-size:18px;font-family:Righteous;color:#428bca;";><?php if(isset($username)){ echo $username; } ?></span></p>
                <form action="clogin.php"><button  class="btn btn-primary" name="submit" style="width:100px;margin-top:5%;font-size:16px;font-family: 'Patua One';">Login</button></form>
            
            
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
