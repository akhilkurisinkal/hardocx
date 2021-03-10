function validateForm()
{
	var x = document.forms["login"]["username"].value;
    var y = document.forms["login"]["password"].value;
    var flag=0;
    if (x == "")
    {
       document.getElementById("username").className += " er";
       document.getElementById("username").placeholder= "Enter username";
       flag=1;
    }
    if (y == "")
    {
        document.getElementById("password").className += " er";
        document.getElementById("password").placeholder= "Enter password";
        flag=1;
    }
    if(flag==1)
    {
        return false;
    }
}