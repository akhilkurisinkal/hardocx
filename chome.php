<?php
    
    include "php/chome.php";
    include "chklog.php";
    include "php/upload.php";
    include "header/customerheader.php";   
?>

        <!--container 1-->
        <div class="col-md-12 col-sm-12 container verify" style="padding-top: 5%;text-align: center;">
            
            <div class="col-md-6 col-sm-12" > 
                
                <img src="images/upload.ico" width="150px" height="150px" >
                <p style="font-family: 'Patua One';font-size: 24px;">Upload File</p>
                <form method="POST" action="chome.php" enctype="multipart/form-data" onsubmit="return filevalidation()" >
                <center><input style="width:200px;" type="file"  name="file" id="file" />
                <p class="error" id="x" style="padding-top:2%;"></p>
                
                </center>
               
            </div>
             <div class="col-md-6 col-sm-12" > 
                <p class="head" style="font-size: 24px;font-family:'Patua One'; ">Printing Properties</p>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">Size</div>
                <div class="col-md-6 col-sm-12" ><select class="form-control selcls" name="size"><option value="a3">A3</option><option value="a4">A4</option><option value="a5">A5</option></select></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">Color</div>
                <div class="col-md-6 col-sm-12" ><select class="form-control selcls" name="color"><option value="black">Black & White</option><option value="color">Color</option></select></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">Side</div>
                <div class="col-md-6 col-sm-12" ><select class="form-control selcls" name="side"><option value="single">Single Side</option><option value="double">Double Side</option></select></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">Pages</div>
                <div class="col-md-6 col-sm-12" ><input class="form-control" name="pages" type="text" style="height: 35px;" placeholder="eg: 1-10 or 1,5,7 or All"></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">No of pages</div>
                <div class="col-md-6 col-sm-12" ><input class="form-control" name="noofpages" type="text" style="height: 35px;" placeholder="eg: 39"></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">No of copies</div>
                <div class="col-md-6 col-sm-12" ><input class="form-control" name="noofcopies" type="text" style="height: 35px;" placeholder="eg: 39"></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">Remarks</div>
                <div class="col-md-6 col-sm-12" ><textarea class="form-control" name="remarks" ></textarea></div>
                <div class="col-md-6 col-sm-12" style="font-size: 20px;">Delivery location</div>
                <div class="col-md-6 col-sm-12" ><input class="form-control" name="location" type="text" style="height: 35px;" placeholder="eg: 682008"></div>
            </div>
            <div class="col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary" name="upload" style="width:100px;margin-top:2%;font-size:16px;font-family: 'Patua One';">Upload</button>
            </div>
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