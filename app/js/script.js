console.log("Ready To START !");

document.getElementById("Traduire_mes_documents").onclick = function () {
    location.href = "page5.html";};

    
    document.getElementById("myButton").onclick = function () {
        location.href = "page5.html";};
 

    document.getElementById("Traduire_ma_voix").onclick = function () {
        location.href = "page5.html";

};


window.onload = function()
{
    "use strict";
    //$("#nav").load("nav.html");
    $.get("navbar.html",function(data)
          {
        document.getElementById("nav").innerHTML=data;

    });
};