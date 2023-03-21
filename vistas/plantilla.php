<?php
    const REDIRECT_ROUTE = 'http://localhost/ing-enuarlara.co/tienda/';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Tienda || Descripción</title>

    <!-- NORMALIZE -->
    <link rel="stylesheet" type="text/css" href="<?=REDIRECT_ROUTE?>dist/css/normalize.css">

    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="<?=REDIRECT_ROUTE?>dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=REDIRECT_ROUTE?>dist/css/responsive.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/e84fa1cf78.js" crossorigin="anonymous"></script>
    
    <!-- SLIDER -->
    <link rel="stylesheet" href="<?=REDIRECT_ROUTE?>dist/css/my-slider.css"/>
    <script src="<?=REDIRECT_ROUTE?>dist/js/ism-2.2.min.js"></script>
    
    <?php 
        include("includes/funciones-js.php");
    ?>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="top-header-wrapper">
        <div class="top-header">
            <div class="info">
                <div class="conten__info info__hiden aling-left contact">
                    <a href="tel:+57XXXXXXXXXX"><i class="fa-sharp fa-solid fa-phone"></i> +57 XXX XXX XXXX</a>
                    <a href="mailto:prueba-usuario@prueba.com"><i class="fa-sharp fa-solid fa-envelope"></i>prueba-usuario@prueba.com</a>
                </div>
                <div class="conten__info centrar-texto envios"><i class="fa-sharp fa-solid fa-truck"></i> ENVÍOS A TODO
                    EL MUNDO</div>
                <div class="conten__info info__hiden aling-right social">
                    Siguenos:
                    <ul class="list--inline social-icons">
                        <li><a href="#" class="social-icons__link">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24"
                                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                </svg>
                            </a></li>
                        <li><a href="#" class="social-icons__link">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24"
                                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="16" rx="4" />
                                    <circle cx="12" cy="12" r="3" />
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                </svg>
                            </a></li>
                        <li><a href="#" class="social-icons__link">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-tiktok" viewBox="0 0 24 24"
                                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 12a4 4 0 1 0 4 4v-12a5 5 0 0 0 5 5" />
                                </svg>
                            </a></li>
                        <li><a href="#" class="social-icons__link">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24"
                                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                    <path
                                        d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="animated">
        <div class="encabezado">
            <div class="contenido__encabezado">
                <div class="conten__enca aling-left text">
                    <span>SOLO <b>ORO 18K</b> GARANTIZADO</span>
                    <a href="#" class="text__link text__menu" id="menuNav">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="4" y1="12" x2="20" y2="12" />
                            <line x1="4" y1="18" x2="20" y2="18" />
                        </svg>
                    </a>
                    <a href="#" class="text__link text__searchIco" id="viewSearch">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </a>
                </div>
                <div class="conten__enca centrar-texto envios"><a href="<?=REDIRECT_ROUTE?>"><img id="imgEnca" src="https://via.placeholder.com/130x109" /></a></div>
                <div class="conten__enca aling-right opciones">
                    <a href="#" class="opciones__link opcion__searchIco" id="viewSearch2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </a>
                    <a href="#" class="opciones__link opcion__account" id="setting">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                    </a>
                    <div id="settingsBox">
                        <div class="customer-links">
                            <p>
                                <a href="acceso" class="btnSetting btnCard">ACCESO</a>
                            </p>
                            <p class="centrar-texto">
                                ¿Nuevo usuario?
                                <a href="#" class="ctLink">Regístrate ahora</a>
                            </p>
                            <p class="centrar-texto large-up--hide">
                                <a href="deseos" class="ctLink" title="Lista de deseos">Lista de deseos</a>
                            </p>
                        </div>
                    </div>
                    <a href="deseos" class="opciones__link opcion__wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                        </svg>
                    </a>
                    <a href="#" class="opciones__link opcion__card" id="navCar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="6" cy="19" r="2" />
                            <circle cx="17" cy="19" r="2" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                        <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-bg centrar-texto">
            <ul id="siteNav">
                <li class="nav_items">
                    <a href="<?=REDIRECT_ROUTE?>">INICIO</a>
                </li>
                <li class="nav_items">
                    <a href="<?=REDIRECT_ROUTE?>tienda">TIENDA</a>
                </li>
                <li class="nav_items" onmousemove="mostrar('megame')" onmouseout="ocultar('megame')">
                    <a href="#">
                        DESTACADO
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div id="megame" class="megamenu" style="width:1000px;background-image:url(https://via.placeholder.com/524x400);background-position:top right;">
                        <ul class="grid" style="padding-right:30% !important;">
                            <li class="grid__item">
                                <a href="#" class="grid__link"><b>DESTACADAS</b></a>
                                <ul class="sublink">
                                    <li class="sublink__2">
                                        <a href="<?=REDIRECT_ROUTE?>tienda/cadenas">Cadenas</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Anillos</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Pulseras</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Aretes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="grid__item">
                                <a href="#" class="grid__link"><b>EXCLUSIVAS</b></a>
                                <ul class="sublink">
                                    <li class="sublink__2">
                                        <a href="#">Pulseras Bebé</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Anillos 15 Años</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Anillos de Compromiso</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Argollas de Matrimonio</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="grid__item">
                                <a href="#" class="grid__link"><b>MÁS JOYAS</b></a>
                                <ul class="sublink">
                                    <li class="sublink__2">
                                        <a href="#">Pulsos</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Aros</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Anillos Mujer</a>
                                    </li>
                                    <li class="sublink__2">
                                        <a href="#">Anillos Hombres</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav_items" onmousemove="mostrar('menucate1')" onmouseout="ocultar('menucate1')">
                    <a href="#">
                        CATEGORÍAS
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="menucate menusublink" id="menucate1">
                        <li class="" onmousemove="mostrar('menucate2')" onmouseout="ocultar('menucate2')">
                            <a href="#" class="submenucate">
                                Cadenas
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <ul class="menucate menusublink" id="menucate2">
                                <li class="">
                                    <a href="#">Cadenas 40cm</a>
                                </li>
                                <li class="">
                                    <a href="#">Cadenas 45cm</a>
                                </li>
                                <li class="">
                                    <a href="#">Cadenas 50cm</a>
                                </li>
                                <li class="">
                                    <a href="#">Cadenas 55cm</a>
                                </li>
                                <li class="">
                                    <a href="#">Cadenas 60cm</a>
                                </li>
                                <li class="">
                                    <a href="#">Cadenas 65cm</a>
                                </li>
                                <li class="">
                                    <a href="#">Cadenas 70cm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Dijes</a>
                        </li>
                        <li class="">
                            <a href="#">Rosarios</a>
                        </li>
                        <li class="">
                            <a href="#">Gargantillas</a>
                        </li>
                        <li class="" onmousemove="mostrar('menucate3')" onmouseout="ocultar('menucate3')">
                            <a href="#" class="submenucate">
                                Anillos
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <ul class="menucate menusublink" id="menucate3">
                                <li class="">
                                    <a href="#">Anillos 15 Años</a>
                                </li>
                                <li class="">
                                    <a href="#">Anillos de Compromiso</a>
                                </li>
                                <li class="">
                                    <a href="#">Argollas de Matrimonio</a>
                                </li>
                                <li class="">
                                    <a href="#">Anillos Mujer</a>
                                </li>
                                <li class="">
                                    <a href="#">Anillos Hombre</a>
                                </li>
                            </ul>
                        </li>
                        <li class="" onmousemove="mostrar('menucate4')" onmouseout="ocultar('menucate4')">
                            <a href="#" class="submenucate">
                                Pulseras
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <ul class="menucate menusublink" id="menucate4">
                                <li class="">
                                    <a href="#">Pulsos</a>
                                </li>
                                <li class="">
                                    <a href="#">Pulseras Tejidas</a>
                                </li>
                                <li class="">
                                    <a href="#">Pulseras Bebé</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Aros</a>
                        </li>
                        <li class="" onmousemove="mostrar('menucate5')" onmouseout="ocultar('menucate5')">
                            <a href="#" class="submenucate">
                                Aretes
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <ul class="menucate menusublink" id="menucate5">
                                <li class="">
                                    <a href="#">Candongas</a>
                                </li>
                                <li class="">
                                    <a href="#">Topos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Tobilleras</a>
                        </li>
                        <li class="">
                            <a href="#">Herrajes</a>
                        </li>
                        <li class="" onmousemove="mostrar('menucate6')" onmouseout="ocultar('menucate6')">
                            <a href="#" class="submenucate">
                                Bolas
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <ul class="menucate menusublink" id="menucate6">
                                <li class="">
                                    <a href="#">Diamantadas</a>
                                </li>
                                <li class="">
                                    <a href="#">Lisas</a>
                                </li>
                                <li class="">
                                    <a href="#">Neoros</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav_items">
                    <a href="<?=REDIRECT_ROUTE?>contact">CONTACTO</a>
                </li>
            </ul>
        </div>
    </header>
    <div id="mobile__nav" class="mobile__nav">
        <div id="closemmn" class="closemmn"><i class="fa-solid fa-xmark"></i></div>
        <ul id="mobileNav" class="mobil__navMnu">
            <li><a href="<?=REDIRECT_ROUTE?>">INICIO</a></li>
            <li><a href="<?=REDIRECT_ROUTE?>tienda">TIENDA</a></li>
            <li>
                <a href="#">
                    DESTACADO
                    <i id="plusD" class="fa-solid fa-plus"></i>
                </a>
                <ul id="menuDes">
                    <li>
                        <a href="#">
                            DESTACADAS
                            <i id="plusDa" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuDest">
                            <li>
                                <a href="#">
                                    CADENAS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PULSERAS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ARETES
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            EXCLUSIVAS
                            <i id="plusEx" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuEX">
                            <li>
                                <a href="#">
                                    PULSERAS BEBÉ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS 15 AÑOS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS DE COMPROMISO
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ARGOLLAS DE MATRIMONIO
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            MÁS JOYAS
                            <i id="plusMj" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuMj">
                            <li>
                                <a href="#">
                                    PULSOS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    AROS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS MUJER
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS HOMBRE
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    CATEGORÍAS
                    <i id="plusC" class="fa-solid fa-plus"></i>
                </a>
                <ul id="menuCat">
                    <li>
                        <a href="#">
                            CADENAS
                            <i id="plusCad" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuCad">
                            <li>
                                <a href="#">
                                    CADENAS 40CM
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    CADENAS 45CM
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    CADENAS 50CM
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    CADENAS 55CM
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    CADENAS 60CM
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    CADENAS 65CM
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    CADENAS 70CM
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            DIJES
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ROSARIOS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            GARGANTILLAS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ANILLOS
                            <i id="plusAn" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuAn">
                            <li>
                                <a href="#">
                                    ANILLOS 15 AÑOS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS DE COMPROMISO
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    AEGOLLAS DE MATRIMONIO
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS MUJER
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ANILLOS HOMBRE
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            PULSERAS
                            <i id="plusPu" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuPu">
                            <li>
                                <a href="#">
                                    PULSOS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PULSERAS TEJIDAS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PULSERAS BEBÉ
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            AROS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ARETES
                            <i id="plusAr" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuAr">
                            <li>
                                <a href="#">
                                    CANDONGAS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    TOPOS
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            TOBILLERAS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            HERRAJES
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            BOLAS
                            <i id="plusBo" class="fa-solid fa-plus"></i>
                        </a>
                        <ul id="menuBo">
                            <li>
                                <a href="#">
                                    DIAMANTADAS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    LISAS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    NEOROS
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="contact">CONTACTO</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="acceso">ACCESO</a></li>
            <li><a href="deseos">LISTA DE DESEOS</a></li>
        </ul>
    </div>
    <main class="contenedor" id="contenedor">
        <?php 
            include("includes/navegacion.php");
            $ruta= new ControladorPlantilla();
            $ruta->ctrEnlacesPaginas();
        ?>
    </main>
    <div id="section-footer" class="section-footer">
        <footer class="site-footer style1" role="contentinfo">
            <div class="page-width">
                <div class="footer-top footer-block">
                    <div id="text-713b35d2-3b4a-4fa4-859d-a2c9f25e064a" class="footer-block__item medium-up--one-quarter contact-box">
                        <h4 class="h4">Visítanos</h4>
                        <ul class="addressFooter">
                            <li><i class="fa-solid fa-location-dot"></i> Calle 52 # 47-28 Local 425<br>Edificio La Ceiba, Medellín, Antioquia</li>
                            <li class="phone"><i class="fa-sharp fa-solid fa-phone"></i> <a href="tel:+57 315 657 0420">+57 315 657 0420</a></li>
                            <li class="email"><i class="fa-sharp fa-solid fa-envelope"></i> <a href="mailto:elitejoyeria18K@gmail.com">elitejoyeria18K@gmail.com</a></li>
                        </ul>
                        <h5 class="h4">Síguenos:</h5>
                        <ul class="list--inline social-icons">
                            <li>
                                <a class="social-icons__link" href="https://facebook.com/elite.joyeria" title="Élite Joyería en Facebook" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                    </svg>
                                    <span class="icon__fallback-text">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="social-icons__link" href="https://www.instagram.com/elite.joyeria/" title="Élite Joyería en Instagram" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <rect x="4" y="4" width="16" height="16" rx="4" />
                                        <circle cx="12" cy="12" r="3" />
                                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                    </svg>
                                    <span class="icon__fallback-text">Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a class="social-icons__link" href="https://www.tiktok.com/@elite.joyeria" title="Élite Joyería en TikTok" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tiktok" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 12a4 4 0 1 0 4 4v-12a5 5 0 0 0 5 5" />
                                    </svg>
                                    <span class="icon__fallback-text">TikTok</span>
                                </a>
                            </li>
                            <li>
                                <a class="social-icons__link" href="https://api.whatsapp.com/send?phone=573156570420" title="Élite Joyería en Whatsapp" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                                    </svg>
                                    <span class="icon__fallback-text">Whatsapp</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="nav_menu-1561381006670" class="footer-block__item medium-up--one-quarter footer-links">
                        <h4 class="h4 h4Flex" id="Cat">Categorías <i id="plusCat" class="fa-solid fa-plus"></i></h4>
                        <ul id="menCat">
                            <li><a href="/collections/cadenas">Cadenas</a></li>
                            <li><a href="/collections/dijes">Dijes</a></li>
                            <li><a href="/collections/aretes">Aretes</a></li>
                            <li><a href="/collections/pulseras">Pulseras</a></li>
                            <li><a href="/collections/anillos">Anillos</a></li>
                            <li><a href="/collections/tobilleras">Tobilleras</a></li>
                        </ul>
                    </div>
                    <div id="nav_menu-1561381031703" class="footer-block__item medium-up--one-fifth footer-links">
                        <h4 class="h4 h4Flex" id="Usu">Usuario <i id="plusUsu" class="fa-solid fa-plus"></i></h4>
                        <ul id="menUsu">
                            <li><a href="https://elitejoyeria.com.co/account/login">Iniciar Sesión</a></li>
                            <li><a href="https://elitejoyeria.com.co/account">Mi Cuenta</a></li>
                            <li><a href="https://elitejoyeria.com.co/cart">Carrito de Compras</a></li>
                            <li><a href="/pages/lista-de-deseos">Lista de Deseos</a></li>
                        </ul>
                    </div>
                    <div id="nav_menu-1561381058776" class="footer-block__item medium-up--one-fifth footer-links">
                        <h4 class="h4 h4Flex" id="Leg">Legales <i id="plusLeg" class="fa-solid fa-plus"></i></h4>
                        <ul id="menLeg">
                            <li><a href="/policies/privacy-policy">Política de Privacidad</a></li>
                            <li><a href="/policies/terms-of-service">Términos del Servicio</a></li>
                            <li><a href="/policies/shipping-policy">Política de Envíos</a></li>
                            <li><a href="/policies/refund-policy">Política de Garantías</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="flex page-width ">
                    <div class="aling-left small--text-center">
                        © 2022 Elite Joyería - Todos los derechos reservados | Desarrollado por <a href="#">@ing_enuarlara.co</a>
                    </div>
                    <div class="paymentCall aling-right small--text-center">
                        <p class="footer-img">
                            <img class="autoHt lazyloaded" data-src="<?=REDIRECT_ROUTE?>dist/img/logos-pagos_646c6440-0b3c-4818-8241-f06bb4ee76d8.png" alt="" width="450" height="0.0" src="<?=REDIRECT_ROUTE?>dist/img/logos-pagos_646c6440-0b3c-4818-8241-f06bb4ee76d8.png">
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="cart_drawer" id="cart_drawer">
        <a href="#" class="close_cart" id="close_cart"><i class="fa-solid fa-xmark"></i></a>
        <h4>CARRITO DE COMPRAS</h4>
        <ul class="mini-products-list">
            <li id="cart-title">Su carrito actualmente esta vacio</li>
            <li class="grid">
                <a href="#" class="grid__item width">
                    <img src="https://via.placeholder.com/100x100" alt="" class="imgFl">
                </a>
                <div class="grid__item product-details">
                    <a href="#" class="remove"><i class="fa-solid fa-xmark"></i></a>
                    <a href="#" class="pName">CADENA SINGAPUR ITALY ORO AMARILLO 0,95 MM 45 Cm 0,84 Gr</a>
                    <div class="vropts"></div>
                    <div class="vropts"></div>
                    <div class="priceRow">
                        <span class="product-price">$312.480</span>
                        <div class="qtyField">
                            <a href="#" class="qtyBtn"><i class="fa-solid fa-minus"></i></a>
                            <span class="qtyBtn">1</span>
                            <a href="#" class="qtyBtn"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="minicartTol">
            <li class="cart-subtotal-row">
                <span><b>Subtotal:</b></span>
                <span class="product-price"><b>$312.480</b></span>
            </li>
            <li class="buttonSet">
                <p class="cart__shipping">Gastos de envío y descuentos calculado al momento de pagar</p>
                <form action="#" method="post">
                    <input type="submit" name="checkout" id="cartDWcheckout" class="btnCard btnCard__primary" value="Finalizar pedido">
                </form>
                <a id="inlinecheckout-cart" href="#" class="btnCard btnCard__secondary">Ver carrito</a>
            </li>
        </ul>
    </div>
    <div id="wa-chat-btn-root" class="wa-chat-btn-fixed wa-splmn-chat-btn-offset wa-chat-btn-base-cta wa-chat-btn-container-size-big wa-chat-btn-theme-cta-new-inverted">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24"
            stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
            <path
                d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
        </svg>
        <div class="wa-chat-button-cta-text">Escríbenos por Whatsapp</div>
    </div>
    <div id="searchPopup" class="">
        <a class="closeSearch" id="closeSearch" href="#">
            <i class="fa-solid fa-xmark"></i>
        </a>
        <h4>Buscar nuestro sitio</h4>
        <form action="#" method="get" class="pr search-header search" role="search">
            <div class="input__group">
                <input class="input-group__field search__input" type="search" name="q" placeholder="Buscar" value="" autocomplete="off">
                <span class="input-group__btn">
                    <button class="btnSearch btnCard search__submit" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                        <span class="icon__fallback-text">Buscar</span>
                    </button>
                </span>
            </div>
            <ul class="search-results" style="display:none;"></ul>
        </form>
    </div>

    <!--*****SCRIPT*****-->
    <script src="<?=REDIRECT_ROUTE?>dist/js/funciones.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>