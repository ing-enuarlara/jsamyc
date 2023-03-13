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
function plusMinus($id,$menu){
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
    plusMinus("plusD","menuDes");
}
document.getElementById("plusDa").onclick=function(){
    plusMinus("plusDa","menuDest");
}
document.getElementById("plusEx").onclick=function(){
    plusMinus("plusEx","menuEX");
}
document.getElementById("plusMj").onclick=function(){
    plusMinus("plusMj","menuMj");
}
document.getElementById("plusC").onclick=function(){
    plusMinus("plusC","menuCat");
}
document.getElementById("plusCad").onclick=function(){
    plusMinus("plusCad","menuCad");
}
document.getElementById("plusAn").onclick=function(){
    plusMinus("plusAn","menuAn");
}
document.getElementById("plusPu").onclick=function(){
    plusMinus("plusPu","menuPu");
}
document.getElementById("plusAr").onclick=function(){
    plusMinus("plusAr","menuAr");
}
document.getElementById("plusBo").onclick=function(){
    plusMinus("plusBo","menuBo");
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
    plusMinus("plusCat","menCat");
}
document.getElementById("Usu").onclick=function(){
    plusMinus("plusUsu","menUsu");
}
document.getElementById("Leg").onclick=function(){
    plusMinus("plusLeg","menLeg");
}