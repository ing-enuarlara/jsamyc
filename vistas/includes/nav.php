<div class="nav-bg centrar-texto">
    <ul id="siteNav">
        <li class="nav_items">
            <a href="<?=RUTA?>">INICIO</a>
        </li>
        <li class="nav_items">
            <a href="<?=RUTA?>tienda">TIENDA</a>
        </li>
        <li class="nav_items" onmousemove="mostrar('megame')" onmouseout="ocultar('megame')">
            <a href="#">
                DESTACADO
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <div id="megame" class="megamenu" style="width:1000px;background-image:url(https://via.placeholder.com/524x400);background-position:top right;">
                <ul class="grid" style="padding-right:30% !important;">
                    <li class="grid__item grid__item-prod">
                        <a href="#" class="grid__link"><b>DESTACADAS</b></a>
                        <ul class="sublink">
                            <li class="sublink__2">
                                <a href="<?=RUTA?>tienda/cadenas">Cadenas</a>
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
                    <li class="grid__item grid__item-prod">
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
                    <li class="grid__item grid__item-prod">
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
                    <a href="<?=RUTA?>tienda/cadenas" class="submenucate">
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
            <a href="<?=RUTA?>contacto">CONTACTO</a>
        </li>
    </ul>
</div>