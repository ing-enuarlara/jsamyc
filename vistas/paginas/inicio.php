<?php
include(RUTA_PROYECTO."vistas/includes/configPagina.php");
if (!empty($configuracion['conf_slider1']) || !empty($configuracion['conf_slider'])) {
?>
<div class="ism-slider" data-transition_type="fade" data-play_type="loop" data-interval="10000" data-buttons="false" id="my-slider">
    <ol>
        <?php if (!empty($configuracion['conf_slider1'])) { ?>
        <li>
            <a href="" target="_self">
                <img src="<?=RUTA_ADMIN.'files/slider/' . $configuracion['conf_slider1'];?>">
                <div class="ism-caption ism-caption-0"><?=$configuracion['conf_textSlider1'];?></div>
            </a>
        </li>
        <?php
        } 
        if (!empty($configuracion['conf_slider2'])) { ?>
        <li>
            <a href="" target="_self">
                <img src="<?=RUTA_ADMIN.'files/slider/' . $configuracion['conf_slider2'];?>">
                <div class="ism-caption ism-caption-0"><?=$configuracion['conf_textSlider2'];?></div>
            </a>
        </li>
        <?php } ?>
    </ol>
</div>
<?php } ?>
<div class="page-width">
    <div class="grid contenido__ofertas">
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerP1;?>">
            </a>
        </div>
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerP2;?>">
            </a>
        </div>
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerP3;?>">
            </a>
        </div>
    </div>
</div>
<div class="page-width">
    <div class="sec-ttl centrar-texto">
        <h3 class="h3 ft1">
            <span class="dbi pr">
                <strong>PRODUCTO DE CALIDAD</strong>
            </span>
        </h3>
        <p>Solo te traemos el mejor producto garantizado en diseños exclusivos.</p>
    </div>
    <div class="tabs-listing wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <ul class="collection-tabs small--hide centrar-texto">
            <li class="style3 active" id="catr1">
                <a class="tablink" href="#collection-1552394502461-0">CADENAS</a>
            </li>
            <li class="style3" id="catr2">
                <a class="tablink" href="#collection-1552394502461-1">AROS</a>
            </li>
            <li class="style3" id="catr3">
                <a class="tablink" href="#collection-1552394502461-2">ARETES</a>
            </li>
        </ul>
        <div class="tab-container">
            <h3 class="acor-ttl medium-up--hide text-center style3 active">
                <a class="tablink" href="#collection-1552394502461-0">CADENAS<i class="ad ad-angle-down-r" aria-hidden="true"></i></a>
            </h3>
            <div class="contenedor_producto">
                <div id="" class="grid grid-products carousel slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                            <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                                <div class="grid-view_image">
                                    <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                        <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                            <picture style="display: block;">
                                                <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                            </picture>
                                        </div>
                                    </a>
                                    <div class="button-set">
                                        <a class="btn btn_tienda add-to-cart" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                            </svg>
                                        </a>
                                        <a class="btn btn_tienda add-to-cart" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="10" cy="10" r="7" />
                                                <line x1="7" y1="10" x2="13" y2="10" />
                                                <line x1="10" y1="7" x2="10" y2="13" />
                                                <line x1="21" y1="21" x2="15" y2="15" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                                    <div class="grid-view-item__meta">
                                        <!-- Show min to max price -->
                                        <span class="visually-hidden">Precio habitual</span>
                                        <span class="product-price__price">$520.960</span>
                                    </div>
                                    <div class="flatbtn">
                                        <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-width">
    <div class="grid contenido__ofertas">
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerP4;?>">
            </a>
        </div>
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerP5;?>">
            </a>
        </div>
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerP6;?>">
            </a>
        </div>
    </div>
</div>
<div class="page-width">
    <div class="sec-ttl centrar-texto">
        <h3 class="h3 ft1">
            <span class="dbi pr">
                <strong>RECIÉN LLEGADOS </strong>
            </span>
        </h3>
        <p>Estas son las últimas prendas llegadas a nuestra tienda.</p>
    </div>
    <div class="contenedor_producto">
        <div id="" class="grid grid-products carousel slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                        <div class="grid-view_image">
                            <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                    <picture style="display: block;">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                    </picture>
                                </div>
                            </a>
                            <div class="button-set">
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </a>
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="7" y1="10" x2="13" y2="10" />
                                        <line x1="10" y1="7" x2="10" y2="13" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                            <div class="grid-view-item__meta">
                                <!-- Show min to max price -->
                                <span class="visually-hidden">Precio habitual</span>
                                <span class="product-price__price">$520.960</span>
                            </div>
                            <div class="flatbtn">
                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-width">
    <div class="grid contenido__anuncio">
        <div class="spaces">
            <a href="">
                <img class="imgFl" src="<?=RUTA_ADMIN.$bannerG1;?>">
            </a>
        </div>
    </div>
</div>
<div class="page-width">
    <div class="sec-ttl centrar-texto">
        <h3 class="h3 ft1">
            <span class="dbi pr">
                <strong>MÁS VISTAS</strong>
            </span>
        </h3>
        <p>Estas son las piezas que están marcando tendencia, no te quedes sin la tuya!</p>
    </div>
    <div class="contenedor_producto">
        <div id="" class="grid grid-products carousel slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                        <div class="grid-view_image">
                            <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                    <picture style="display: block;">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                    </picture>
                                </div>
                            </a>
                            <div class="button-set">
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </a>
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="7" y1="10" x2="13" y2="10" />
                                        <line x1="10" y1="7" x2="10" y2="13" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                            <div class="grid-view-item__meta">
                                <!-- Show min to max price -->
                                <span class="visually-hidden">Precio habitual</span>
                                <span class="product-price__price">$520.960</span>
                            </div>
                            <div class="flatbtn">
                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="grid grid-products carousel slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                        <div class="grid-view_image">
                            <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                    <picture style="display: block;">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                    </picture>
                                </div>
                            </a>
                            <div class="button-set">
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </a>
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="7" y1="10" x2="13" y2="10" />
                                        <line x1="10" y1="7" x2="10" y2="13" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                            <div class="grid-view-item__meta">
                                <!-- Show min to max price -->
                                <span class="visually-hidden">Precio habitual</span>
                                <span class="product-price__price">$520.960</span>
                            </div>
                            <div class="flatbtn">
                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="grid grid-products carousel slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                        <div class="grid-view_image">
                            <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                    <picture style="display: block;">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                    </picture>
                                </div>
                            </a>
                            <div class="button-set">
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </a>
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="7" y1="10" x2="13" y2="10" />
                                        <line x1="10" y1="7" x2="10" y2="13" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                            <div class="grid-view-item__meta">
                                <!-- Show min to max price -->
                                <span class="visually-hidden">Precio habitual</span>
                                <span class="product-price__price">$520.960</span>
                            </div>
                            <div class="flatbtn">
                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="grid grid-products carousel slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                        <div class="grid-view_image">
                            <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                    <picture style="display: block;">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                    </picture>
                                </div>
                            </a>
                            <div class="button-set">
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </a>
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="7" y1="10" x2="13" y2="10" />
                                        <line x1="10" y1="7" x2="10" y2="13" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                            <div class="grid-view-item__meta">
                                <!-- Show min to max price -->
                                <span class="visually-hidden">Precio habitual</span>
                                <span class="product-price__price">$520.960</span>
                            </div>
                            <div class="flatbtn">
                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="grid grid-products carousel slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                        <div class="grid-view_image">
                            <a class="grid-view-item__link" href="<?=RUTA?>productos">
                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(https://via.placeholder.com/550);">
                                    <picture style="display: block;">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="233px">
                                    </picture>
                                </div>
                            </a>
                            <div class="button-set">
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </a>
                                <a class="btn btn_tienda add-to-cart" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="7" y1="10" x2="13" y2="10" />
                                        <line x1="10" y1="7" x2="10" y2="13" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="details">
                            <a href="<?=RUTA?>productos" class="grid-view-item__title" tabindex="0">Producto de Prueba</a>
                            <div class="grid-view-item__meta">
                                <!-- Show min to max price -->
                                <span class="visually-hidden">Precio habitual</span>
                                <span class="product-price__price">$520.960</span>
                            </div>
                            <div class="flatbtn">
                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-width home-instagram">
    <div class="sec-ttl centrar-texto">
        <h3 class="h3 ft1">
            <span class="dbi pr">
                <strong><?=$configuracion['conf_empresa'];?> EN INSTAGRAM</strong>
            </span>
        </h3>
        <p>Síguenos en Instagram y entérate de primera mano de todas las novedades <a class="link_instagram" href="<?=$configuracion['conf_instagram'];?>" target="_blank"><?=$configuracion['conf_empresa'];?></a></p>
    </div>
    <div class="followus">
        <a href="<?=$configuracion['conf_instagram'];?>" title="Ver en Instagram" target="_blank" class="btnCard btnCard__primary">Ver en Instagram</a>
    </div>
</div>
<div class="page-width wow fadeIn sectio__store-info" style="visibility: visible; animation-name: fadeIn;">
    <ul class="store-info style1">
        <li class="item">
            <a class="centrar-texto" href="#">
                <i class="fa-solid fa-truck"></i>
                <div class="text fl1">
                    <h5>ENVÍOS <?=$configuracion['conf_envios'];?></h5>
                    <span class="sub-text">
                        <p>REALIZAMOS ENVÍOS <?=$configuracion['conf_envios'];?>.</p>
                    </span>
                </div>
            </a>
        </li>
        <li class="item">
            <a class="centrar-texto" href="#">
                <i class="fa-solid fa-star"></i>
                <div class="text fl1">
                    <h5>CALIDAD GARANTIZADA</h5>
                    <span class="sub-text">
                        <!-- <p></p> -->
                    </span>
                </div>
            </a>
        </li>
        <li class="item">
            <a class="centrar-texto" href="#">
                <i class="fa-solid fa-credit-card"></i>
                <div class="text fl1">
                    <h5>TODOS LOS MEDIOS DE PAGOS</h5>
                    <span class="sub-text">
                        <p>PAGO SEGURO ONLINE, CONTRA-ENTREGA O POR TRANSFERENCIA.</p>
                    </span>
                </div>
            </a>
        </li>
    </ul>
</div>
<div class="newsletter-section  wow fadeIn" style="visibility: visible; animation-name: fadeIn;"> 
    <div class="section-cover">    
        <div class="sec-ttl centrar-texto">
            <h3 class="h3 ft1">
                <span class="dbi pr">
                    <strong>¡ATENTO A NUESTRAS OFERTAS!</strong>
                </span>
            </h3>
            <p>Recibe información sobre promociones y ofertas de primera mano.</p>
        </div>
        <form method="post" action="#" accept-charset="UTF-8" class="newsletter-form form-single-field" novalidate="novalidate">
            <div class="newsletter__input-group">
                    <input type="email" name="email" id="Email" class="input-group__field newsletter__input" value="" placeholder="Dirección de correo electrónico" autocorrect="off" autocapitalize="off">
                    <span class="input-group__btn">
                        <button type="submit" class="btnCard btnCard__primary newsletter__submit" name="commit" id="Subscribe">Suscribir</button>
                    </span>
            </div>
        </form>
    </div> 
  </div>