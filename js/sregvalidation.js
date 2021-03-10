function svalidateForm() 
            {
                
                var x = document.forms["ssignup"]["shopname"].value;
                var y = document.forms["ssignup"]["mobile"].value;
                var z = document.forms["ssignup"]["owner"].value;
                var p = document.forms["ssignup"]["username"].value;
                var q = document.forms["ssignup"]["zipcode"].value;
                var r = document.getElementById("password").value;
                var s = document.forms["ssignup"]["cpassword"].value;
                var flag=0;
                if (x == "")
                {
                    document.getElementById("shopname").className += " er";
                    document.getElementById("shopname").placeholder= "Enter name";
                    flag=1;
                }
                if (y == "")
                {
                    document.getElementById("mobile").className += " er";
                    document.getElementById("mobile").placeholder= "Enter mobile number";
                    flag=1;
                }
                if(isNaN(y)==true)
                {
                    document.getElementById("y").innerHTML="Please Enter a valid mobile number";
                    flag=1;
                }
                if(flag!=1)
                {
                   var len= y.toString().length;
                   if(len!=10)
                   {
                        document.getElementById("y").innerHTML="Enter a valid 10 digit mobile number";
                        flag=1;
                   }
                   
                }
                if (z == "")
                {
                    document.getElementById("owner").className += " er";
                    document.getElementById("owner").placeholder= "Enter owner name";
                    flag=1;
                }
                if (p == "")
                {
                    document.getElementById("username").className += " er";
                    document.getElementById("username").placeholder= "Choose shop ID";
                    flag=1;
                }
                if (q == "")
                {
                    document.getElementById("zipcode").className += " er";
                    document.getElementById("zipcode").placeholder= "Enter ZIPCODE";
                    flag=1;
                }
                if (r == "")
                {
                    document.getElementById("password").className += " er";
                    document.getElementById("password").placeholder= "Enter password";
                    flag=1;
                }
                else
                {
                   var pas= r.toString().length;
                   if(pas<8)
                   {
                        document.getElementById("r").innerHTML="Weak password";
                        flag=1;
                   }
                   else
                   {
                    document.getElementById("r").innerHTML=" ";
                   }
                   
                }
                if (s == "")
                {
                    document.getElementById("cpassword").className += " er";
                    document.getElementById("cpassword").placeholder= "Confirm password";
                    flag=1;
                }
                if(r!=s)
                {
                    document.getElementById("s").innerHTML= "Passwords doesn't match";
                    flag=1;
                }
                if(r==s)
                {
                    document.getElementById("s").innerHTML= " ";
                }
                if(flag==1)
                {
                    return false;
                }
            } 