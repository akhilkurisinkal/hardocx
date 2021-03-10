function validateForm() 
            {
                
                var x = document.forms["csignup"]["name"].value;
                var y = document.forms["csignup"]["mobile"].value;
                var z = document.forms["csignup"]["username"].value;
                var p = document.forms["csignup"]["password"].value;
                var q = document.forms["csignup"]["cpassword"].value;
                var flag=0;
                if (x == "")
                {
                    document.getElementById("name").className += " er";
                    document.getElementById("name").placeholder= "Enter name";
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
                    document.getElementById("username").className += " er";
                    document.getElementById("username").placeholder= "Enter a username";
                    flag=1;
                }
                if (p == "")
                {
                    document.getElementById("password").className += " er";
                    document.getElementById("password").placeholder= "Enter password";
                    flag=1;
                }
                else
                {
                   var pas= p.toString().length;
                   if(pas<8)
                   {
                        document.getElementById("p").innerHTML="Weak password";
                        flag=1;
                   }
                   else
                   {
                        document.getElementById("p").innerHTML=" ";
                   }
                   
                }
                if (q == "")
                {
                    document.getElementById("cpassword").className += " er";
                    document.getElementById("cpassword").placeholder= "Confirm password";
                    flag=1;
                }
                if(p!=q)
                {
                    document.getElementById("q").innerHTML= "Passwords doesn't match";
                    flag=1;
                    
                }
                if(p==q)
                {
                    document.getElementById("q").innerHTML=" ";
                }
                if(flag==1)
                {
                    return false;
                }
            } 