function validate()
{
    if(   document.getElementById("username").value == "admin"
       && document.getElementById("password").value == "4321" )
    {
        location.href="mainTrainer.html";
    }
    else
    {
        if(   document.getElementById("username").value == "client"
       && document.getElementById("password").value == "1234" )
    {
        location.href="main.html";
    }
    else{
        alert( "Wrong Username Or Password!" );
        location.href="sign-in.html";
    }
    }
}
