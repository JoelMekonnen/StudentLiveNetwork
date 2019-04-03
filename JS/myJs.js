function myshowCaseDiv(caller)
{
    var myContain = document.getElementById("showCaseDiv");
    if(caller === "admin")
    {
        myContain.innerHTML = "<h3>Welcome to admin section</h3>";
        myContain.style.backgroundImage = "url('..//Images//company.jpg')";
        myContain.style.backgroundPosition = "center";
        myContain.style.backgroundSize = "cover";
        myContain.style.bacckgroundRepeat = "no-repeat";
    }
    else if(caller == "student")
    {
        myContain.innerHTML = "<h3>  Welcome to student section  </h3>";
        
    }
   

}