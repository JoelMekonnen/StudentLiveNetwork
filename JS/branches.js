
document.onload = function()
{
    var valArray = document.getElementsByClassName("item");
    var values = ["America", "Ehiopia", "China", "China", "China", "China", "China", "China", "China", "China", "China", "China"];
    for(var i =0; i < valArray.length; i++)
    {
        valArray[i].innerHTML = values[i];
    }
};