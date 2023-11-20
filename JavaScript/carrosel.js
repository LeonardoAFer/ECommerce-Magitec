const carrosel = document.querySelector(".carrosel"),
firstImg = carrosel.querySelectorAll("img")[0];
arrowIcons = document.querySelectorAll(".wrapper button");
arrowIcons = document.querySelectorAll("section button");



const showHideIcons = () =>{

let scrollWidth = carrosel.scrollWidth - carrosel.clientWidth
arrowIcons[0].style.display = carrosel.scrollLeft == 0 ? "none" : "block";
arrowIcons[1].style.display = carrosel.scrollLeft == scrollWidth ? "none" : "block";

}


arrowIcons.forEach(icon => {

icon.addEventListener("click", () => {
let firstImgWidth = firstImg.clientWidth + 35    
carrosel.scrollLeft += icon .id == "direita" ? - firstImgWidth : firstImgWidth;


console.log(icon);



});

});


