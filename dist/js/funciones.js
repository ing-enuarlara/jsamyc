window.onscroll = function() {myFunction()};
var header = document.getElementById("header");
var img = document.getElementById("imgEnca");
var sticky = header.offsetTop;
function myFunction() {

  if(window.pageYOffset > sticky){
    header.classList.add("stickyHeader");
    header.classList.add("fadeInDown");
    img.classList.add("imgEnca");
  }else{
    header.classList.remove("stickyHeader");
    header.classList.remove("fadeInDown");
    img.classList.remove("imgEnca");
  }

}

function mostrar($id){
    document.getElementById($id).style.opacity=1;
    document.getElementById($id).style.visibility='visible';
};
function ocultar($id){
    document.getElementById($id).style.opacity=0;
    document.getElementById($id).style.visibility='hidden';
};
function activar($id){
    document.getElementById($id).classList.toggle("active");
}
function plus($id,$menu){
    document.getElementById($id).classList.toggle("fa-plus");
    document.getElementById($id).classList.toggle("fa-minus");
    document.getElementById($menu).classList.toggle("block");
}
document.getElementById("menuNav").onclick=function(){
    activar("mobile__nav");
}
document.getElementById("closemmn").onclick=function(){
    activar("mobile__nav");
}
document.getElementById("plusD").onclick=function(){
    plus("plusD","menuDes");
}
document.getElementById("plusDa").onclick=function(){
    plus("plusDa","menuDest");
}
document.getElementById("plusEx").onclick=function(){
    plus("plusEx","menuEX");
}
document.getElementById("plusMj").onclick=function(){
    plus("plusMj","menuMj");
}
document.getElementById("plusCategoria").onclick=function(){
    plus("plusCategoria","menuCategoria");
}
document.getElementById("navCar").onclick=function(){
    activar("cart_drawer");
}
document.getElementById("close_cart").onclick=function(){
    activar("cart_drawer");
}
document.getElementById("viewSearch").onclick=function(){
    activar("searchPopup");
}
document.getElementById("viewSearch2").onclick=function(){
    activar("searchPopup");
}
document.getElementById("closeSearch").onclick=function(){
    activar("searchPopup");
}
document.getElementById("setting").onclick=function(){
    activar("settingsBox");
}
document.getElementById("Cat").onclick=function(){
    plus("plusCat","menCat");
}
document.getElementById("Usu").onclick=function(){
    plus("plusUsu","menUsu");
}
document.getElementById("Leg").onclick=function(){
    plus("plusLeg","menLeg");
}
document.getElementById("openFilter").onclick=function(){
    activar("filterbar");
}
document.getElementById("closeFilter").onclick=function(){
    activar("filterbar");
}