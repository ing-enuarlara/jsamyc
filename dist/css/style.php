<?php
    header("Content-Type: text/css; charset: UTF-8");
    include("../../modelo/conexion.php");
?>
:root {
	--blanco:#ffffff;
	--oscuro:#000000;
	--negroClaro:#2b2b2b;
	--gris:#757575;
	--grisclaro:#e9e9e9;
	--verde:#73ff57;

	--encaPrimario:<?=$configuracionColor['gcs_encaPrimario'];?>;
	--encaSecundario:<?=$configuracionColor['gcs_encaSecundario'];?>;
	--encaLetras:<?=$configuracionColor['gcs_encaLetras'];?>;
	--encaBorder:<?=$configuracionColor['gcs_encaBorder'];?>;
	--bodyFondo:<?=$configuracionColor['gcs_bodyFondo'];?>;
	--bodyLetras:<?=$configuracionColor['gcs_bodyLetras'];?>;
	--bodyLineas:<?=$configuracionColor['gcs_bodyLineas'];?>;
	--bodyIconos:<?=$configuracionColor['gcs_bodyIconos'];?>;
	--bottonPrimario:<?=$configuracionColor['gcs_bottonPrimario'];?>;
	--bottonSecundario:<?=$configuracionColor['gcs_bottonSecundario'];?>;
	--suscripcionFondo:<?=$configuracionColor['gcs_suscripcionFondo'];?>;
	--suscripcionLetras:<?=$configuracionColor['gcs_suscripcionLetras'];?>;
	--footerPrimario:<?=$configuracionColor['gcs_footerPrimario'];?>;
	--footerSecundario:<?=$configuracionColor['gcs_footerSecundario'];?>;
	--footerLetras:<?=$configuracionColor['gcs_footerLetras'];?>;
	--paginaFondo:<?=$configuracionColor['gcs_paginaFondo'];?>;
	--paginaLetras:<?=$configuracionColor['gcs_paginaLetras'];?>;

    --fuentePrincipal:'Staatliches', cursive;
    --fuenteHeadinng: 'PT Sans', sans-serif;
    --fuenteParrafos: 'Open Sans', Sans-serif;

    --ft1: Roboto,sans-serif;
    --ft2: Montserrat,sans-serif;
    --ft3: Lato,sans-serif;
    --site_gutter: 15px;
    --grid_gutter: 30px;
    --grid_gutter_sm: 15px;
    --input_height: 38px;
    --input_height_sm: 32px;
    --error: #d20000;
}
html{
    box-sizing: border-box;
    /* font-size: 62.5%; 1rem = 10px */
}
*, *:before, *:after{
    box-sizing: inherit;
}
body{
    font-family: var(--fuenteParrafos) !important;
    font-size: 14px !important;
    line-height: 2 !important;
    background-color: var(--bodyFondo) !important;
}
/***************Globales*****************/
a{
    text-decoration: none !important;
}
a:hover, a:focus {
    outline: 0!important;
}
a:hover {
    color: #f04343;
    opacity: .8;
}
h1, .h1 {
    font-size: 26px;
}
h1, h2, h3, h4, h5, h6 {
    font-family: var(--ft2);
    line-height: 1;
    letter-spacing: .02em;
    overflow-wrap: break-word;
    word-wrap: break-word;
    margin: 0 0 20px;
}
h2{
    font-size: 40px;
}
h3{
    font-size: 32px;
}
h4{
    font-size: 28px;
}
img{
    max-width: 100%;
}
ul{
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}
label {
    display: block;
    margin-bottom: 5px;
}
label[for] {
    cursor: pointer;
}
input[type=text] {
    -webkit-appearance: none;
    -moz-appearance: none;
}
[role=button], a, button, input, label, select, textarea {
    touch-action: manipulation;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
    outline: 0;
}
body, button, input, select, textarea {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Helvetica Neue",sans-serif;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
}
input, textarea, select {
    color: #111;
    font-size: 13px;
    font-family: Roboto;
    margin-bottom: 15px;
    max-width: 100%;
    line-height: 1.2;
    padding: 8px 15px;
    border: 1px solid #dddddd;
    background-color: #fff;
}
table {
    margin-bottom: 7.5px;
}
/***************Utilidades*****************/
.no-margin{
    margin: 0;
}
.no-padding{
    padding: 0;
}
.centrar-texto{
    text-align: center !important;
}
.aling-right{
    text-align: right !important;
}
.aling-left{
    text-align: left !important;
}
.cursor{
    cursor: pointer;
}
.contenedor{
    width: 100%;
    display: block;
}
.pr {
    position: relative;
}
.dbi {
    display: inline-block;
}
.hide {
    display: none!important;
}
.border-top {
    border-top: 1px solid #eeeeee;
}
.border-bottom {
    border-bottom: 1px solid #eeeeee;
}
.fl, .flex {
    display: flex;
}
/***************Header*****************/
.top-header-wrapper{
    background-color: var(--encaPrimario);
    border-bottom: 1px solid var(--encaBorder);
}
.top-header{
    padding: 0 60px;
}
.info{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 10px;
    color: var(--encaLetras);
    justify-content: space-between;
    font-size: 12px;
}
.conten__info{
    padding: 10px 0;
}
.conten__info a{
    color: var(--encaLetras);
}
.conten__info a:hover{
    color: var(--gris);
}
.contact{
    display: flex;
}
.contact a{
    margin-left: 10px;
}
.envios{
    color: var(--encaLetras);
}
.list--inline{
    padding: 0 !important;
    margin: 0 !important;
}
.list--inline li {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
}
.social-icons{
    display: inline-block;
    vertical-align: middle;
    margin: 0 -5px 0 4px;
    line-height: 11px;
}
.social-icons li {
    text-align: center;
}
.social-icons__link svg{
    stroke: var(--encaLetras);
    width: 20px;
    height: 20px;
}
.social-icons__link svg:hover{
    stroke: var(--gris);
}
header {
    /* border-bottom: 0; */
    position: relative;
    z-index: 15;
    background-color: var(--encaPrimario);
    border-bottom: 1px solid var(--encaBorder);
}
header.stickyHeader {
    position: fixed;
    top: 0;
    z-index: 50;
    width: 100%;
    left: 0;
    box-shadow: 0 0 7px #0003;
}
.animated {
    animation-duration: 0.5s;
    animation-fill-mode: both;
}
.fadeInDown {
    animation-name: fadeInDown;
}
@keyframes fadeInDown{
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes fadeIn{
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
.encabezado{
    background-color: var(--encaSecundario);
}
.contenido__encabezado{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 10px;
    align-items: center;
    color: var(--encaLetras);
    padding: 0 60px;
}
/*.conten__enca .imgEnca{
    max-width: 10%;
}*/
.text span{
    font-size: 12px;
}
.text__link svg{
    stroke: var(--encaLetras);
    width: 25px;
    height: 25px;
}
.text__link svg:hover{
    stroke: var(--gris);
}
.text__searchIco, .text__menu{
    display: none;
}
.opciones__link svg{
    stroke: var(--encaLetras);
    width: 25px;
    height: 25px;
}
.opciones__link svg:hover{
    stroke: var(--gris);
}
a.opcion__card {
    position: relative;
    display: inline-block;
    text-align: center;
    padding: 0 9px;
}
#CartCount {
    position: absolute;
    background: #bab86c;
    color: #fff;
    min-width: 16px;
    height: 16px;
    border-radius: 16px;
    line-height: 17px;
    font-size: 11px;
    right: -7px;
    top: -3px;
}
.nav-bg{
    background-color: var(--encaPrimario);
    padding: 0 60px;
}
.nav-bg ul{
    justify-content: center;
    display: flex;
    gap: 10px;
}
.nav_items{
    display: inline-block;
    padding: 10px;
}
.nav_items a{
    color: var(--encaLetras);
}
.nav_items a:hover{
    color: var(--gris);
}
.active{
    color: var(--gris) !important;
}
#siteNav>li {
    display: inline-block;
    text-align: left;
    margin-right: 10px;
}
.megamenu{
    background-repeat: no-repeat;
    background-size: auto 100%;
    left: 50%;
    transform: translate(-50%);
    opacity: 0;
    visibility: hidden;
    padding: 30px 35px 0;
    margin: 0;
    position: absolute;
    top: auto;
    z-index: 999;
    max-height: 600px;
    overflow: auto;
    background-color: #fff;
    box-shadow: 0 0 15px #0000001a;
    /* pointer-events: none; */
    transition: all .3s ease-in;
}
.grid {
    list-style: none !important;
    margin: 0 -15px !important;
    padding: 0 !important;
}
.grid__item{
    float: left;
    padding-left: 15px;
    padding-right: 15px;
    width: 100%;
}
.grid__item-prod{
    margin-bottom: 25px;
    width: 33.33333%;
}
.grid__link{
    font-size: 13px;
    text-transform: uppercase;
    color: #000 !important;
    padding: 0 0 8px;
    font-weight: 600;
    text-decoration: none;
    display: block;
    opacity: 1;
}
.sublink{
    display: grid !important;
    justify-content: left !important;
}
.sublink__2 a{
    color: #000 !important;
}
.sublink__2 a:hover{
    color: #7a7a7a !important;
}
.menusublink{
    display: grid !important;
    grid-template-columns: repeat(1, 1fr);
    justify-content: left !important;
}
.menucate, ul.menucate ul {
    border: 1px solid #eeeeee;
    padding: 15px !important;
    opacity: 0;
    visibility: hidden;
    width: 240px !important;
    position: absolute;
    top: auto;
    /* left: -17px; */
    z-index: 999;
    background-color: #fff;
    box-shadow: 2px 2px 2px #0000004d;
    transition: all .3s ease-in-out;
}
ul.menucate li:first-child {
    border: 0 none;
}
ul.menucate li {
    border-top: 1px solid #eeeeee;
    position: relative;
}
ul.menucate li a {
    font-size: 14px;
    color: #444;
    font-weight: 400;
    padding: 8px 5px;
    /* background-color: #fff; */
}
.submenucate{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 10px;
    justify-content: space-between;
}
.submenucate i{
    padding-top: 5px;
    text-align: right;
}
ul.menucate li ul {
    top: 10px;
    left: 100%;
}
.mobile__nav{
    width: 270px;
    height: 100%;
    position: fixed;
    left: -270px;
    top: 0;
    z-index: 999;
    background-color: #fff;
    box-shadow: 0 0 5px #0000004d;
    opacity: 0;
    visibility: hidden;
    transition: all .3s ease-in-out;
}
.mobile__nav.active{
    left: 0;
    opacity: 1;
    visibility: visible;
}
.closemmn {
    color: #000;
    background-color: #eee;
    position: absolute;
    top: 15px;
    right: -50px;
    cursor: pointer;
    width: 50px;
    height: 50px;
    box-shadow: 0 0 5px #00000080;
    display: flex;
    align-items: center;
    justify-content: center;
}
.mobil__navMnu{
    height: calc(100% - 36px);
    padding-bottom: 10px !important;
    overflow: auto;
}
.mobil__navMnu li {
    border-top: 1px solid #eeeeee;
    position: relative;
}
.mobil__navMnu li a {
    color: #333;
    font-size: 13px;
    text-decoration: none;
    min-height: 50px;
    padding: 5px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    opacity: 1;
    font-weight: 400;
    letter-spacing: .05em;
    text-transform: uppercase;
}
.mobil__navMnu li ul {
    display: none;
    background-color: #f2f2f2;
    padding-left: 20px !important;
}
.block{
    display: block !important;
}
.cart_drawer {
    width: 90%;
    max-width: 320px;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0;
    right: 0;
    z-index: 555;
    transform: translate(400px);
}
#settingsBox, .cart_drawer, #searchPopup {
    color: #222 !important;
    text-align: left;
    background-color: #fff;
    box-shadow: 0 0 15px #2222221a;
    transition: all .3s ease-in-out;
}
.cart_drawer.active {
    transform: translate(0);
}
.cart_drawer .close_cart {
    color: #222;
    font-size: 20px;
    opacity: .6;
    position: absolute;
    right: 10px;
    top: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.cart_drawer>h4 {
    color: #222;
    font-size: 18px;
    text-align: left;
    margin: 10px 15px;
}
.mini-products-list {
    padding: 0 15px !important;
    overflow-x: hidden;
    overflow-y: auto;
}
.mini-products-list li {
    padding: 10px 0 !important;
    line-height: normal;
    border-top: 1px solid #eeeeee;
}
.width{
    width: 25%;
}
.imgFl {
    display: block;
    width: 100%;
    height: auto;
}
.product-details {
    text-align: left;
    padding-left: 15px;
    width: 75%;
}
.cart_drawer .remove {
    color: #222;
    opacity: .5;
}
.mini-products-list .remove {
    float: right;
    padding: 7px;
    margin: -7px 0 0 0;
}
.mini-products-list .pName {
    color: #222;
    white-space: normal;
    text-decoration: none;
    display: block;
    line-height: 1.3;
    margin-right: 20px;
}
.mini-products-list .vropts {
    color: #222;
    opacity: .6;
    padding: 5px 0;
}
.mini-products-list .priceRow {
    align-items: center;
    display: flex;
}
.mini-products-list .qtyField {
    max-width: 75px;
    margin-left: auto;
}
.qtyField {
    display: flex;
    width: 100%;
    border: 1px solid #dddddd;
    border-radius: 0;
}
.mini-products-list .qtyField .qtyBtn {
    width: 25px;
    height: 25px;
    line-height: 25px;
    padding: 0;
}
.qtyField .qtyBtn {
    line-height: 17px;
}
.qtyField .qtyBtn, .qtyField input {
    margin: 0;
    color: #111 !important;
    width: 28px;
    height: 38px;
    line-height: normal !important;
    text-align: center;
    padding: 11px 0 !important;
    background: none;
    border-radius: 0;
}
.minicartTol {
    padding: 15px 15px 25px !important;
    border-top: 1px solid #eeeeee;
}
.minicartTol .cart-subtotal-row {
    padding: 0 0 10px;
    margin-bottom: 0;
}
.cart-subtotal-row {
    display: flex;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: left;
    font-weight: 600;
    padding: 0 0 10px;
    text-transform: uppercase;
    justify-content: space-between;
}
.cart__shipping{
    margin: 0 0 15px;
}
#cart_drawer .btnCard {
    width: 100%;
}
.btnCard{
    font-weight: 700;
    display: inline-block;
    width: auto;
    text-decoration: none;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 2px solid var(--bottonPrimario);
    background-color: var(--bottonPrimario) !important;
    color: #fff !important;
    text-transform: uppercase;
    line-height: 1;
    transition: all .3s ease-in-out;
    font-size: 13px;
    padding: 10px 24px;
    margin-bottom: 15px;
    white-space: nowrap;
    -moz-user-select: none;
    -ms-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
}
.btnCard__primary:hover {
    color: #000 !important;
    background-color: var(--grisclaro) !important;
    border-color: #030505 !important;
    opacity: 1;
}
.btnCard__secondary {
    color: #fff !important;
    background-color: var(--bottonSecundario) !important;
    border-color: var(--bottonSecundario) !important;
}
.btnCard__secondary:hover{
    color: #fff !important;
    background-color: #111 !important;
    border-color: #111 !important;
}
.wa-splmn-chat-btn-offset {
    bottom: 20px;
    right: 20px;
    z-index: 99999 !important;
}

.wa-chat-btn-theme-cta-new-inverted {
    background: #35cb5e;
    color: #fff;
}
.wa-chat-btn-container-size-big {
    font-size: 14px;
    padding: 10px;
}
.wa-chat-btn-base-cta {
    text-decoration: none;
    cursor: pointer;
    -webkit-box-shadow: 0 0 5px 0 #d3d3d3;
    box-shadow: 0 0 5px #d3d3d3;
    display: table;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}
.wa-chat-btn-fixed {
    position: fixed;
    font-family: Lato,Open Sans,sans-serif!important;
}
.wa-chat-btn-fixed img {
    background-color: transparent;
    opacity: 1;
}
.wa-chat-btn-icon-cta-big {
    width: 25px;
    vertical-align: middle;
    margin-right: 4px;
}
.wa-chat-btn-fixed svg{
    stroke: var(--blanco);
    width: 20px;
    height: 20px;
}
.wa-chat-button-cta-text {
    display: inline-block;
    vertical-align: middle;
    color: #fff;
}
#searchPopup.active {
    opacity: 1;
    transform: translateY(0);
}
#searchPopup {
    width: 100%;
    padding: 40px 50px;
    opacity: 0;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    transform: translateY(-100%);
}
#searchPopup .closeSearch {
    color: #222;
    font-size: 24px;
    position: absolute;
    top: 10px;
    right: 20px;
}
#searchPopup h4 {
    color: #222;
}
#searchPopup .input__group {
    border-bottom: 1px solid #eeeeee;
}
.input__group {
    position: relative;
    display: table;
    width: 100%;
    border-collapse: separate;
}
#searchPopup .search__input {
    color: #222;
    padding: 5px 0;
    background: none;
    border: 0 none;
    outline: 0;
    appearance: none;
    -webkit-appearance: none !important;
    -moz-appearance: none;
}
.input-group__field, .input-group__btn .btnSearch {
    height: 40px !important;
}
.input-group__field, .input-group__btn .btnSearch {
    height: 32px;
    padding-top: 0;
    padding-bottom: 0;
}
.input-group__field, .input-group__btn {
    width: 100%;
    display: table-cell;
    vertical-align: middle;
    margin: 0;
}
.input-group__btn {
    white-space: nowrap;
    width: 1%;
}
#searchPopup .btnSearch {
    color: #222 !important;
    opacity: .5;
    padding: 0;
    border: 0 none;
    background: none;
}
.input-group__btn .btnSearch {
    white-space: nowrap;
}
.search__submit svg{
    stroke: var(--oscuro);
    width: 20px;
    height: 20px;
}
.search-results {
    list-style-type: none !important;
    width: 100%;
    max-width: 100%;
    margin: 0 -5px !important;
    padding: 10px 0 0 !important;
}
.search-results li:nth-child(4n+1) {
    clear: both;
}
.search-results li {
    float: left;
    vertical-align: top;
    width: 25%;
    margin: 0;
    padding: 5px;
}
.search-results a {
    color: #222;
    display: table;
    width: 100%;
    text-decoration: none;
}
.search-results .img {
    display: table-cell;
    width: 60px;
    padding: 5px;
    vertical-align: middle;
}
.search-results .img img {
    display: block;
    margin: 0 auto;
}
.search-results .details {
    padding: 5px;
    line-height: 1.2;
    display: table-cell;
    text-align: left;
    vertical-align: middle;
}
.search-results .price {
    display: block;
    font-weight: 700;
    margin-top: 5px;
}
.icon__fallback-text, .visually-hidden {
    position: absolute!important;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
}
#settingsBox.active {
    visibility: visible;
    opacity: 1;
    transform: translateY(0);
}
#settingsBox {
    font-size: 13px;
    visibility: hidden;
    opacity: 0;
    padding: 20px;
    width: 300px;
    position: absolute;
    top: 70%;
    right: 15px;
    z-index: 99;
    transform: translateY(50px);
}
#settingsBox .customer-links {
    text-transform: uppercase;
}
#settingsBox .btnSetting {
    width: 100%;
}
#settingsBox .ctLink {
    color: #222;
    text-decoration: underline !important;
}
#openFilter, #closeFilter, #settingsBox .large-up--hide{
    display: none;
}
.site-footer {
    display: block;
    font-size: 13px;
    color: var(--footerLetras);
    background-color: var(--footerPrimario);
    border-top: 1px solid var(--footerPrimario);
}
.page-width {
    *zoom: 1;
    margin: 0 auto;
    padding-left: 15px;
    padding-right: 15px;
    max-width: 1240px;
}
.page-width:after, .grid:after {
    content: "";
    display: table;
    clear: both;
}
.footer-block {
    display: flex;
    width: 100%;
    -ms-flex-align: stretch;
    align-items: stretch;
    flex-wrap: wrap;
    margin-bottom: -30px;
    /* margin-left: -30px; */
    padding: 50px 0;
}
.footer-block__item {
    flex: 0 0 auto;
    margin-bottom: 30px;
    padding-left: 30px;
    max-width: 100%;
}
.footer-top .h4 {
    color: var(--footerLetras);
    font-family: var(--ft2);
    font-size: 14px;
    letter-spacing: 0;
    margin: 0 0 15px;
}
.footer-top .h4 i{
    display: none;
}
.footer-top .addressFooter+.h4 {
    margin: 25px 0 10px;
}
.footer-links li {
    margin-bottom: 7px;
}
.footer-links a:hover {
    opacity: .7;
    text-decoration: underline !important;
}
.footer-top .addressFooter {
    color: var(--footerLetras);
}
.footer-top .addressFooter li {
    position: relative;
    margin-bottom: 12px;
    clear: left;
}
.footer-top .addressFooter i {
    font-size: 12px;
    padding-right: 12px;
    min-height: 25px;
    float: left;
    margin-top: 4px;
    text-align: center;
}
.footer-top i, .footer-top .icon {
    color: var(--footerLetras);
}
.footer-top a {
    color: var(--footerLetras);
    text-decoration: none;
}
.footer-top .social-icons {
    margin-left: -6px !important;
}
.footer-bottom {
    background: var(--footerSecundario);
    color: var(--footerLetras);
    clear: both;
    padding: 25px 0;
    border-top: 1px dotted var(--footerSecundario);
}
.footer-bottom .flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer-bottom .flex>div {
    flex: 1 !important;
}
.footer-bottom a {
    color: var(--footerLetras);
}
.autoHt {
    height: auto;
}
.contenido__ofertas{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 10px;
}
.spaces{
    padding: 5px;
    margin: 10px 0;
}
.sec-ttl {
    padding-bottom: 20px;
    overflow: hidden;
}
.sec-ttl .h3 {
    color: var(--bodyLetras);
    font-weight: 400;
    margin: 0 auto;
    font-size: 15px;
}
.sec-ttl .h3 strong{
    font-weight: 700;
}
.sec-ttl .dbi:before {
    right: calc(100% + 10px);
}
.sec-ttl .dbi:after {
    left: calc(100% + 10px);
}
.sec-ttl .dbi:before, .sec-ttl .dbi:after {
    content: "";
    display: block;
    width: 100px;
    height: 2px;
    background-color: var(--bodyLineas);
    position: absolute;
    top: 50%;
}
.sec-ttl p {
    color: var(--bodyLetras);
    margin: 5px auto 0;
}
.collection-tabs {
    text-align: center;
    margin-bottom: 30px !important;
}
.collection-tabs li {
    display: inline-block;
    margin: 0 8px;
}
.collection-tabs .style3 a {
    border-radius: 30px;
}
.collection-tabs a:hover, .collection-tabs a:focus, .collection-tabs .active a {
    color: #fff;
    opacity: 1;
    border-color: #0000;
    background-color: #111;
}
.collection-tabs a {
    color: #2d2c2c;
    font-size: 12px;
    display: inline-block;
    position: relative;
    padding: 5px 15px 4px;
    border: 1px solid rgba(0,0,0,0);
    background-color: #f5f5f5;
}
.acor-ttl {
    font-size: 14px;
    font-weight: 700;
    margin: 0 0 5px;
}
.acor-ttl a {
    border: 0;
    color: #111;
    display: flex;
    padding: 15px;
    text-decoration: none;
    background-color: #eee;
    justify-content: space-between;
}
.tab-container .tab-content {
    display: none;
}
.grid-products {
    margin: 0 -7.5px;
}
.slick-slider {
    position: relative;
    display: block;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}
.slick-slider .slick-track, .slick-slider .slick-list {
    transform: translateZ(0);
}
.slick-list {
    position: relative;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0;
}
.slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block;
}
.slick-track:before, .slick-track:after {
    content: "";
    display: table;
}
.grid-products{
    padding-left: 7.5px;
    padding-right: 7.5px;
}
.slick-initialized .slick-slide {
    display: block;
}
.slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none;
}
.carousel .grid-view-item {
    margin-bottom: 0;
}
.grid-view-item {
    margin-bottom: 30px;
    text-align: center;
    position: relative;
    z-index: 0;
    border: 1px solid rgba(0,0,0,0);
    transition: all .3s ease-out;
}
.grid-view_image {
    width: 100%;
    overflow: hidden;
    position: relative;
    z-index: 1;
}
a.grid-view-item__link {
    opacity: 1;
    display: block;
}
.grid-view-item__image {
    display: block;
    position: relative;
    padding-bottom: 130%;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    transition: opacity ease-out .4s;
}
.slick-slide img {
    display: block;
    margin: 0 auto;
}
.grid-view_image .hover, .grid-view_image .variantImg {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
}
.grid-view-item__image {
    display: block;
    position: relative;
    padding-bottom: 130%;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    transition: opacity ease-out .4s;
}
.grid-view-item .button-set {
    width: 100%;
    display: block;
    font-size: 0px;
    position: absolute;
    bottom: -30px;
    left: 0;
    z-index: 444;
    opacity: 0;
    visibility: hidden;
    transition: all .3s ease-out;
}
.grid-view-item .button-set .btn {
    display: inline-block;
    border: 0;
    background-color: #444;
    position: relative;
    font-size: 18px;
    padding: 0;
    margin: 2px;
    line-height: 35px;
    width: 100%;
    height: 36px;
    width: 38px;
    text-align: center;
    border-radius: 4px;
}
.tooltip-label {
    font-size: 11px;
    text-transform: none;
    line-height: 18px;
    transition: all .2s ease-in-out;
    visibility: hidden;
    opacity: 0;
    background-color: #000;
    color: #fff;
    border-radius: 0;
    padding: 0 5px;
    white-space: nowrap;
    position: absolute;
    bottom: calc(100% + 20px);
    left: 50%;
    transform: translate(-50%);
}
.tooltip-label:before {
    content: "";
    border: 5px solid transparent;
    border-top-color: #000;
    position: absolute;
    bottom: -9px;
    left: 50%;
    margin-left: -5px;
}
.grid-view-item .details {
    padding: 15px 10px 10px;
}
.grid-view-item__title {
    color: var(--bodyLetras);
    font-size: 14px;
    text-transform: none;
    font-weight: 400;
}
.grid-view-item__title:hover {
    color: var(--bodyLetras);
    opacity: .8;
}
.grid-view-item__meta {
    margin: 5px 0 10px;
}
.icon__fallback-text, .visually-hidden {
    position: absolute!important;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
}
.grid-view-item .product-price__price {
    font-size: 18px;
    font-weight: 400;
    display: inline-block;
}
.product-price__price {
    color: var(--bodyLetras);
}
.gridSwatches {
    margin-top: 10px;
    font-size: 0px;
}
.button-set {
    width: 100%;
    display: block;
    font-size: 0px;
    position: absolute;
    bottom: -30px;
    left: 0;
    z-index: 444;
    opacity: 0;
    visibility: hidden;
    transition: all .3s ease-out;
}
.grid-view-item:hover .button-set {
    bottom: 10px;
    opacity: 1;
    visibility: visible;
}
.button-set .btn {
    border: 0;
    color: var(--blanco);
    padding: 5px 8px;
    margin: 0 3px;
    border-radius: 3px;
    background-color: var(--negroClaro);
}
.button-set svg{
    stroke: var(--blanco);
    width: 20px;
    height: 20px;
}
.button-set .btn_tienda:hover{
    background-color: var(--gris);
}
.shopWrapper {
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .3s ease-in-out;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: #fff;
    box-shadow: 0 0 15px #0003;
    display: flex;
    align-items: center;
    justify-content: center;
}
.link_instagram {
    color: #111;
    text-decoration: none;
    outline: none;
}
.link_instagram:hover {
    color: #f04343;
    opacity: .8;
}
.home-instagram .followus {
    text-align: center;
    padding: 20px 0;
}
.home-instagram .followus .btnCard {
    position: relative;
    z-index: 555;
}
.store-info {
    display: flex;
    justify-content: space-between;
    margin: 0 -20px;
}
.store-info li {
    text-align: center;
    flex: 1;
    padding: 10px 20px;
}
.store-info li + li {
    border-left: 1px dotted #444444;
}
.store-info * {
    color: var(--bodyLetras);
}
.store-info li i {
    color: var(--bodyIconos);
    font-size: 40px;
    width: 50px;
    display: inline-block;
    margin-bottom: 20px;
}
.store-info h5 {
    font-size: 16px;
    margin-bottom: 5px;
    letter-spacing: .03em;
}
.section-cover {
    padding: 25px 10px;
    background-color: var(--suscripcionFondo);
}
.newsletter-section .sec-ttl * {
    color: var(--suscripcionLetras);
}
.newsletter-section .newsletter__input-group {
    max-width: 500px;
    margin: 0 auto;
}
.newsletter__input-group {
    position: relative;
    display: table;
    width: 100%;
    border-collapse: separate;
}
.newsletter__input {
    border: 0;
    background-color: #ffffff;
    color: #000000;
}
.newsletter__submit {
    font-size: 13px;
    letter-spacing: 0.5px;
    border: 0;
    background-color: #000000;
    color: #ffffff;
}
.input-group__btn .btnCard {
    white-space: nowrap;
}
.input-group__field, .input-group__btn .btnCard {
    height: 32px;
    padding-top: 0;
    padding-bottom: 0;
}
.contenido__anuncio{
    display: grid;
    grid-template-columns: repeat(1,1fr);
    margin-bottom: 30px !important;
    justify-content: center;
}
.bredcrumbWrap {
    background: var(--paginaFondo);
    margin: 0 0 30px;
}
.breadcrumbs {
    padding-top: 8px;
    padding-bottom: 8px;
}
.breadcrumbs a:first-child, .breadcrumbs span:first-child {
    padding-left: 0;
}
.breadcrumbs a, .breadcrumbs span {
    text-transform: none;
    color: var(--paginaLetras);
    display: inline-block;
    padding: 0 3px 0 0;
    margin-right: 3px;
    font-size: 12px;
}
.contenido__store{
    display: flex;
    width: 100%;
    gap: 5px;
}
.filtros{
    width: 20%;
}
.contenido__store--tienta{
    width: 80%;
}
.title-bold {
    font-weight: 700;
}
.sidebar {
    width: 300px;
    transition: all .3s ease-in-out;
    order: -1;
    padding: 0 30px 0 15px;
}
.closeFilter {
    z-index: 333;
    color: #444;
    font-size: 17px;
    line-height: 34px;
    height: 35px;
    width: 35px;
    text-align: center;
    cursor: pointer;
    position: absolute;
    top: 5px;
    right: 5px;
}
.flForm .sidebar_widget ul li{
    padding-left: 20px;
}
.sidebar .sidebar_widget {
    margin-bottom: 30px;
}
.sidebar .widget-title {
    color: #111;
    font-size: 15px;
    margin-bottom: 10px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: .2px;
    position: relative;
}
.count-bubble {
    display: none;
}
.slider-container-price {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.slider-container-price input{
    margin: 0 10px;
    padding-left: 10px;
    border-radius: 10px;
    border: 1px solid rgb(107, 108, 109);
    outline: none;
}
.flForm .sidebar_widget ul li a{
    color: #000;
}
ul.sidebar_cate .grid__item {
    float: none;
    width: 100%;
    margin: 0;
}
ul.sidebar_cate li {
    padding: 4px 0;
}
ul.sidebar_cate a {
    color: #000;
}
ul.sidebar_cate ul {
    margin: 0 0 0 15px !important;
}
.collection-title {
    color: #111111;
    margin-bottom: 10px!important;
    font-size: 20px !important;
    text-transform: uppercase;
    font-weight: 700;
}
.filters-toolbar {
    margin-bottom: 20px;
    align-items: center;
    justify-content: space-between;
    display: flex;
}
.btnCard-filter {
    border-radius: 3px;
    text-transform: uppercase;
    padding: 2px 12px;
    line-height: normal;
    height: auto;
    font-size: 12px;
    letter-spacing: 0;
    margin: 0 15px 0 0;
}
.filters-toolbar .change-view {
    font-size: 18px;
    line-height: 1;
    background: none;
    border: 0;
    padding: 0 3px;
}
.filters-toolbar .change-view svg {
    stroke: #6b6969;
}
.filters-toolbar .change-view svg:active{
    stroke: #000000 !important;
}
.filters-toolbar .change-view svg:hover {
    stroke: #000000;
}
.flbarCount {
    font-size: 12px;
    margin: 0 auto;
}
.label--hidden {
    position: absolute;
    height: 0;
    width: 0;
    margin-bottom: 0;
    overflow: hidden;
    clip: rect(1px,1px,1px,1px);
}
.filters-toolbar select {
    font-size: 12px;
    height: auto;
    max-width: 100%;
    min-width: inherit;
    margin: 0;
    padding: 5px 25px 5px 5px;
    border: 0 none;
}
select {
    background: #ffffff url(../img/arrow-select.webp) no-repeat right 10px center;
    cursor: pointer;
    padding-right: 30px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
option {
    color: #111;
    background-color: #fff;
}
.crFilters {
    margin-bottom: 20px;
    flex-wrap: wrap;
    display: flex;
}
.crFilters .actFilter:only-child {
    display: none;
}
.crFilters .actFilter {
    cursor: pointer;
    display: inline-block;
    margin: 0 3px 0 0;
    padding: 3px 6px;
    background: #000;
    color: #fff;
    font-size: 11px;
}
.contenedor_producto_tienda{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: .5rem;
    place-items: center;
}
.contenedor_producto{
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: .5rem;
    place-items: center;
}
/*****************************CONTACTO*******************************/
h1.page-title {
    letter-spacing: normal;
    font-weight: 400;
    font-size: 18px !important;
    position: relative;
    margin: 0 0 30px;
    text-align: center;
    width: 100%;
}
.contenido_formulario {
    max-width: 1000px;
    margin: 0 auto;
}
.form-vertical input, .form-vertical select, .form-vertical textarea {
    display: block;
    width: 100%;
    margin-bottom: 15px;
}
.contenido_formulario p {
    margin-bottom: 25px;
}
.form-vertical [type=checkbox], .form-vertical [type=radio] {
    display: inline-block;
    width: auto;
    margin-right: 5px;
}
input.custCheck {
    color: #fff !important;
    background-color: #444 !important;
}
.contenido_formulario .custCheck {
    display: inline-block;
    width: 16px;
    height: 16px;
    margin: auto;
    border: 1px solid rgba(68,68,68,.3) !important;
    background: #fff;
    vertical-align: middle;
    font-size: 11px !important;
    font-weight: 400;
    line-height: 16px !important;
}
.form-vertical .btnCard, .form-vertical [type=submit] {
    display: inline-block;
    width: auto;
}
/****************************DESEOS***********************************/
.wishlist-product {
    margin: 20px 0 0;
}
.wishlist-product li {
    border-top: 1px solid #e5e5e5;
    position: relative;
    list-style: none;
    padding: 15px 0;
    display: table;
    font-size: 12px;
    width: 100%;
    margin: 0;
}
.wishlist-product li:first-child {
    color: #000;
    font-weight: 700;
    padding: 10px 0;
    background-color: #f9f9f9;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
}
.wishlist-product li {
    border-top: 1px solid #e5e5e5;
    position: relative;
    list-style: none;
    padding: 15px 0;
    display: table;
    font-size: 12px;
    width: 100%;
    margin: 0;
}
.wishlist-product .product_img {
    width: 100px;
    padding: 0;
}
.wishlist-product .product_name {
    text-align: left;
    padding-left: 20px;
}
.wishlist-product a.product-title {
    color: #000;
}
.wishlist-product .product_price {
    width: 14%;
    text-align: center;
}
p:last-child {
    margin-bottom: 0;
}
.wishlist-product .product_stock {
    min-width: 110px;
    width: 15%;
}
.instock {
    color: #76bd1c;
}
.wishlist-product .product_add {
    width: 170px;
    text-align: center;
}
.wishlist-product .product_remove {
    width: 40px;
    text-align: center;
}
.wishlist-product .btnCard-remove-wishlist {
    padding: 9px;
    line-height: 1;
}
.wishlist-product li>div {
    display: table-cell;
    vertical-align: middle;
}
/***************************CARRITO DE COMPRAS***********************************/
table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}
.cart table, .cart .edit-shop, .currencymsg {
    margin-bottom: 25px;
}
.cart th {
    background: #f5f5f5;
    text-transform: uppercase;
}
.cart th, .cart td {
    border: 0;
    text-align: center;
}
.cart .delete {
    width: 30px;
    padding: 0;
}
.cart .remove {
    opacity: 1;
    height: 22px;
    width: 22px;
    border-radius: 50%;
    padding: 5px;
    line-height: 12px;
    border: 0;
}
.cart .remove .fa {
    font-size: 12px;
}
.cart__image-wrapper {
    width: 110px;
}
.cart__meta-text {
    padding: 5px 0;
    font-size: 11px;
    font-style: italic;
}
.cart .removeMb {
    text-decoration: underline;
    display: inline-block;
    margin-top: 15px;
    opacity: .7;
}
.cart .qtyField {
    width: 80px;
    margin: 0 auto;
}
.qtyField .qty {
    border: 0 none !important;
}
.qtyField .qtyBtn .ad {
    font-size: 10px;
}
.edit-shop {
    justify-content: space-between;
}
.btn--link {
    color: #139ddd;
    background-color: transparent;
    border: 0;
    margin: 0;
    outline: none!important;
    box-shadow: none!important;
}
.cart__footer {
    justify-content: flex-end;
    flex-wrap: wrap;
}
.cart__footer .grid__item {
    float: none;
    flex: 1;
    display: flex;
    margin-bottom: 20px;
}
.cart .bdr-box {
    width: 100%;
    border: 0;
    padding: 25px;
    background: #f5f5f5;
}
.cart-options-ttl {
    text-transform: uppercase;
    font-size: 13px;
    margin-bottom: 12px;
    font-weight: 600;
    display: block;
}
.cart textarea {
    resize: none;
    width: 100%;
    min-height: 100px;
}
.cartSummery, .shipCalc {
    max-width: 33.33%;
}
.cart-subtotal-row {
    margin-bottom: 10px;
    font-size: 14px;
    text-align: left;
    font-weight: 600;
    padding: 0 0 10px;
    text-transform: uppercase;
    justify-content: space-between;
}
.cart .bdr-box .btnCard {
    width: 100%;
}
.bdr-box .additional-checkout-button, .bdr-box .checkout {
    min-height: 44px;
    width: 100%!important;
    margin: 0 0 10px!important;
}
/***************************Detalles de productos***********************************/
.product-single__photos {
    margin-bottom: 45px;
}
.prod-large-img {
    position: relative;
    z-index: 1;
}
.prod-large-img .slick-prev {
    left: 0 !important;
    background: none;
}
.page-width .slick-prev {
    left: -40px;
}
.slick-slider .slick-arrow {
    opacity: 0;
}
.slick-prev {
    left: 0;
}
.slick-arrow {
    font-size: 0;
    color: #000;
    opacity: .75;
    position: absolute;
    top: 50%;
    z-index: 9;
    height: 35px;
    line-height: 34px;
    width: 35px;
    text-align: center;
    padding: 0;
    background: #fff;
    border: none;
    border-radius: 0;
    outline: 0 none;
    cursor: pointer;
    transform: translateY(-50%);
    transition: all .3s ease-out;
}
.slick-arrow.slick-disabled:before {
    opacity: .25;
}
.slick-prev:before {
    content: "\ea8b";
}
.slick-arrow:before {
    font-family: adorn-icons;
    font-size: 20px;
}
.product-single__photo {
    min-height: 1px;
    position: relative;
    overflow: hidden;
}.prod-large-img .slick-next {
    right: 0;
    background: none;
}
.page-width .slick-next {
    right: -40px;
}
.slick-next {
    right: 0;
}
.imgWrapper {
    display: block;
    margin: auto;
}
.product-labels {
    position: absolute;
    left: 5px;
    top: 5px;
    z-index: 11;
}
.slick-track:after {
    clear: both;
}
.primgSlider .product-single__photo:not(.slick-active):not(:first-child) .imgFl {
    opacity: 0;
    visibility: hidden;
}
.product-btn {
    position: absolute;
    right: 10px;
    bottom: 10px;
}
.product-btn .btn {
    width: 40px;
    height: 35px;
    line-height: 30px;
    padding: 0;
    position: relative;
    margin-right: 3px;
}
.dslider .slick-track {
    transform: translateZ(0)!important;
}
.thumbnails-wrapper .slick-current {
    opacity: .5;
}
.thumbnails-wrapper .prThumb {
    position: relative;
    display: inline-block;
    width: 16.66%;
    padding: 0 5px;
    vertical-align: top;
}
.product-single__thumbnail {
    display: block;
    padding-bottom: 130%;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}
.product-single .social-sharing {
    padding-top: 20px;
    text-align: center;
}
.social-sharing {
    clear: both;
}
.btn--share {
    color: #111;
    font-weight: 400;
    margin: 5px;
    display: inline-block;
    letter-spacing: 0;
    text-transform: capitalize;
}
.product-single .social-sharing .share-title {
    display: none;
}
.share-title {
    display: inline-block;
    vertical-align: middle;
}
.btn--share .ad {
    font-size: 13px;
    min-width: 14px;
    min-height: 14px;
    vertical-align: middle;
    margin-right: 1px;
}
.product-single__meta {
    margin-bottom: 45px;
    position: relative;
}
h1.product-single__title {
    color: #111;
    font-family: var(--ft2);
    text-transform: none;
    font-weight: 600;
    font-size: 24px;
    margin-bottom: 15px;
}
.product-info {
    color: #777;
    margin-bottom: 20px;
}
.product-info>div {
    display: inline-block;
    margin: 0 25px 0 0;
}
.product-info a {
    color: #444444b3;
}
.product-single__price {
    line-height: 1.4;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 20px;
}
.product-single__price>* {
    margin-right: 10px;
}
.product-single__price .product-price__price {
    color: #000;
    font-size: 24px;
    font-weight: 600;
}
.product-single__price s.product-price__price {
    color: #e95144;
    font-size: 20px;
    font-weight: 400;
    margin-right: 10px;
}
s.product-price__price {
    opacity: .6;
    margin-right: 4px;
    font-weight: 400;
}
.discount-badge .off {
    color: #e95144;
}
.price__unit {
    color: #444;
    font-size: 12px;
    font-weight: 400;
    opacity: .7;
    margin: -20px 0 23px;
    display: block;
}
#quantity_message {
    color: #fff;
    padding: 1px 12px;
    margin-bottom: 20px;
    display: inline-block;
    background: #ff656c;
}
.product-form {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -5px 10px;
}
.infolinks a.inLink {
    display: inline-block;
    vertical-align: top;
    margin: 0 15px 15px 0;
    color: #444;
}
.product-action {
    width: 100%;
    position: relative;
    margin-bottom: 15px;
    flex-wrap: wrap;
}
.product-action .qtyField {
    width: 90px;
    margin: 0 10px 0 0;
}
.product-action button {
    max-width: 500px;
    flex: 1;
    height: 40px;
    margin-bottom: 0;
    border: 1px solid #111;
    background-color: #111;
    color: #fff;
}
.btnzoom {
    animation: btnzoom 5s infinite linear;
}
@keyframes btnzoom{
    0% {
        transform: scale(1);
    }
    
    45% {
        transform: scale(1);
    }
    47% {
        transform: scale(1.05);
    }
    49% {
        transform: scale(1);
    }
    51% {
        transform: scale(1.05);
    }
    53% {
        transform: scale(1);
    }
    55% {
        transform: scale(1.05);
    }
    57% {
        transform: scale(1);
    }
    100% {
        transform: scale(1);
    }
}
.ing-store-payment-button {
    margin-bottom: 30px;
    max-width: 600px;
}
.ing-store-cleanslate .R9tDu8JrE_i1ctOEo0v_ {
    position: absolute !important;
    top: 0 !important;
    clip: rect(1px, 1px, 1px, 1px) !important;
    overflow: hidden !important;
    height: 1px !important;
    width: 1px !important;
    padding: 0 !important;
    border: 0 !important;
}
.ing-store-payment-button .ing-store-payment-button__button {
    background: #e95144!important;
    color: #fff!important;
    text-transform: uppercase;
    letter-spacing: .02em;
    border-radius: 0;
}
.BUz42FHpSPncCPJ4Pr_f {
    -webkit-animation: wsgbk6XdVclpkaXZKFPJ 300ms cubic-bezier(0.1, 0.79, 1, 1);
    animation: wsgbk6XdVclpkaXZKFPJ 300ms cubic-bezier(0.1, 0.79, 1, 1);
}
@keyframes wsgbk6XdVclpkaXZKFPJ{
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
.ing-store-payment-button__button--unbranded {
    background-color: #1990c6;
    padding: 1em 2em;
}
.ing-store-payment-button__button {
    border-radius: 4px;
    border: none;
    box-shadow: 0 0 0 0 transparent;
    color: white;
    cursor: pointer;
    display: block;
    font-size: 1em;
    font-weight: 500;
    line-height: 1;
    text-align: center;
    width: 100%;
    transition: background 0.2s ease-in-out;
}
.ing-store-payment-button .ing-store-payment-button__button--hidden {
    display: none;
}
.shippingMsg, .freeShipMsg, .userViewMsg {
    margin-bottom: 12px;
}
.product-info.other {
    margin-top: 15px;
}
p.product-type {
    margin-bottom: 10px;
}
.product-info>p {
    margin: 0 0 5px;
    display: block;
}
.template-product .tab-container {
    margin-bottom: 50px;
}
.prTabs .acor-ttl.active a {
    color: #eee;
    background-color: #000;
    border: 1px solid #000;
}
.prTabs .acor-ttl a {
    color: #000;
    font-size: 14px;
    background-color: #eee;
    border: 1px solid #ddd;
}
.acor-ttl.active a {
    color: #fff;
    background-color: #131313;
}
.template-product .tab-content {
    padding: 15px;
}
.shopify-policy__container {
    max-width: 1000px;
}
.shopify-policy__container {
    /* max-width: 560px;
    max-width: 65ch; */
    margin: 0 auto;
    padding-left: 20px !important;
    padding-right: 20px !important;
}
.shopify-policy__container {
    padding: 30px 0;
}
.shopify-policy__title {
    text-align: center;
}
.shopify-policy__title h1 {
    font-size: 36px !important;
    font-weight: 900 !important;
    text-transform: uppercase;
    color: black;
    text-align: left !important;
}
.shopify-policy__title h1, .page-title {
    letter-spacing: normal;
    font-weight: 400;
    font-size: 18px;
    position: relative;
    margin: 0 0 30px;
    text-align: center;
}
.rte:last-child {
    margin-bottom: 0;
}
.rte p, .rte {
    margin-bottom: 20px;
}
.rte ul {
    list-style: disc outside;
}
.rte ol, .rte ul {
    margin: 20px 0 30px 30px;
}
.rte li {
    margin-bottom: 4px;
    list-style: inherit;
}