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
         <script type="text/javascript" src="js\filevalidation.js">
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
                                <li><a style="color:#ffffff;" href="chome.php">Print</a></li>
                                <li><a style="color:#ffffff;" href="#">My Orders</a></li>
                                <li><a style="color:#ffffff;" href="#">Payments</a></li>
                                <li><a style="color:#ffffff;" href="#">Settings</a></li>
                                <li><a style="color:#ffffff;" href="#">Help</a></li>
                                <li><form action="logout.php"><button type="submit" name="submit" class="btn btn-primary" style="width:100px;margin-top:7%;font-size:16px;">Logout</button></form></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <!--end of nav bar-->