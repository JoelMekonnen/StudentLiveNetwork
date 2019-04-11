
function myshowCaseDiv(caller)
{
    // lets create a loop now that populates the data
    var Header = document.getElementById("dynamicHeader");
    var docContainer = document.getElementById("leftContent"); 
    var Img = document.getElementById("imgDiv");
    var manager = document.getElementById("manager");
    var tele = document.getElementById("telephone");
    var fb = document.getElementById("fb");
    var Email = document.getElementById("email");
    docContainer.style.display = "block";
    // next we are going to create the list by which this values are going to be populated
    var my_manager = ["Lisa Adams", "Felicity Jones", "Rick Sanchez", "Elina Torez"];
    var my_tele = ["2519232090", "12330200", "12342445", "909023424", "234223433"];
    var my_fb = ["@LisaAD", "@Jones.Felicity.2343", "@Bubla322.43", "@MissTorez.Elina"];
    var my_Email = ["Lisa23@gmial.com", "JonesFelicity@gmail.com", "rickTheSanchez@yahoo.com", "TorezElina@outlook.com"];
    var callerList = ["admin", "library", "student", "security"];
    var displayer = 0;
    if(caller === "admin")
    {
        Header.innerHTML = "Adminstration and student services";
        docContainer.style.backgroundColor = "rgba(41, 109, 128, 0.6)";
        Img.innerHTML = '<img src = "Image/Director.jpg" width="20%" height="20" class = "img-fluid">';
    }
    else if(caller === "library")
    {
        Header.innerHTML = "Library and Documentation";
        Img.innerHTML = '<img src = "Image/library.jpg" width="20%" height="20%" class = "img-fluid">';
        docContainer.style.display = "block";
        docContainer.style.backgroundColor = "rgba(8, 137, 173, 0.6)";
    }
    else if(caller === "student")
    {

        Header.innerHTML = "Student Council and Leadership";
        docContainer.style.display = "block";
        Img.innerHTML = '<img src = "Image/Director.jpg" width="20%" height="20%" class = "img-fluid rounded-circle">';
        docContainer.style.backgroundColor = "rgba(17, 113, 169, 0.6)";
    }
    else if(caller === "security")
    {
        Header.innerHTML = "Security and other services";
        docContainer.style.display = "block";
        Img.innerHTML = '<img src = "Image/Director.jpg" width="20%" height="20%" class = "img-fluid rounded-circle">';
        docContainer.style.backgroundColor = "rgb(50, 175, 210, 0.6)";
    }
    for(var i = 0; i <= callerList.length; i++)
    {
        if(callerList[i] === caller)
        {
           displayer = i;
        }
    }
    manager.innerHTML = my_manager[displayer];
    tele.innerHTML = my_tele[displayer];
    fb.innerHTML = my_fb[displayer];
    Email.innerHTML = my_Email[displayer];
   
}
