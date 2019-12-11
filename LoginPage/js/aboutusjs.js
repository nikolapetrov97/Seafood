var status = "less";
function toggleText()
{
    var text="You can find fresh fish in our shop located in the center of Sofia. IF you want your food to be delivered the minimal value is 20lv. Delivery within 1 hour !";
    
    if (status == "less") {
        document.getElementById("textArea").innerHTML=text;
        document.getElementById("toggleButton").innerText = "See Less";
        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea").innerHTML = "";
        document.getElementById("toggleButton").innerText = "See More";
        status = "less"
    }
}