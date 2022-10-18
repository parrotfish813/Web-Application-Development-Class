function simpleHandler(event) {
    var content = document.getElementById("content");
    if (btn.innerHTML == "Hide") {
        btn.innerHTML = "Show";
        content.className = "makeItDisappear";
        // change the display mode after a 1000 millisecond delay
        setTimeout(function(){
            content.style.display = "none";
        },1000);                
    }
    else {
        btn.innerHTML = "Hide";   
        content.style.display = "block";
        setTimeout(function(){
            content.className = "makeItNormal";
        },500); 
    }    
}

var btn = document.getElementById("testButton");
btn.addEventListener("click", simpleHandler); 

var img = document.getElementById("mainImage");

img.addEventListener("mouseover", function (event) {
    img.className = "makeItGray";
});

img.addEventListener("mouseout", function (event) {
    img.className = "makeItNormal";
 });

/* code goes here */
