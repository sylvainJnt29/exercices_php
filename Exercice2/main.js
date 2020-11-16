var button = document.querySelector(".changeColor");

var backgroundcolorP = document.querySelector(".background-colorP");
var backgroundcolorP2 = document.querySelector(".background-colorP2");



button.addEventListener("click", function(){
    backgroundcolorP.classList.replace("background-colorP", "background-colorP2");
    backgroundcolorP2.classList.replace("background-colorP2","background-colorP");
});

