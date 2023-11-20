<?php
include(RUTA_PROYECTO."vistas/includes/configPagina.php");
if (!empty($configuracion['conf_slider1']) || !empty($configuracion['conf_slider2'])) {
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
                <strong>PRODUCTOS DESTACADOS</strong>
            </span>
        </h3>
        <p>Solo te traemos el mejor producto garantizado en diseños exclusivos.</p>
    </div>
    <script>
        var itemsH3 = document.getElementsByClassName("style3");
        var itemsLi = document.getElementsByClassName("style3");
        
        function toggleActive(element, elementType) {
            // Oculta los productos del elemento activo actual
            var elementosProductos = document.getElementsByClassName("contenedor_producto_destacados");
            
            for (var i = 0; i < elementosProductos.length; i++) {
                elementosProductos[i].style.display = "none";
            }

            // Quita la clase 'active' de todos los elementos
            var items = (elementType === "h3") ? itemsH3 : itemsLi;
            for (var i = 0; i < items.length; i++) {
                var item = items[i];

                item.classList.remove("active");

                if (item === element.parentNode) {
                    // Muestra los productos del elemento al que se hizo clic
                    var target = element.parentNode.getAttribute("data-target");
                    var contenedorProducto = document.getElementById(target);
                    contenedorProducto.style.display = "block";

                    // Agrega la clase 'active' al elemento seleccionado
                    item.classList.add("active");
                }
            }
        }

        for (var i = 0; i < itemsH3.length; i++) {
            itemsH3[i].addEventListener("click", function() {
                toggleActive(this, "h3");
            });
        }

        for (var i = 0; i < itemsLi.length; i++) {
            itemsLi[i].addEventListener("click", function() {
                toggleActive(this, "li");
            });
        }
    </script>
    <div class="tabs-listing wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <ul class="collection-tabs small--hide centrar-texto">
            <?php
                $limit="LIMIT 0,8";
                $limitCat='LIMIT 0,3';
                $primerElemento = true;
                $consultaCategorias = ControladorComercial::ctrCategoriasDestacado($limitCat);
                while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                    $claseActiva = $primerElemento ? 'active' : '';
                    $display = $primerElemento ? 'block' : 'none';
                    $primerElemento = false;
            ?>
                <li class="style3 <?=$claseActiva?>" id="catrLI" data-target="contenedorProducto<?=$datosCategorias['ccat_id'];?>">
                    <a class="tablink" onclick="toggleActive(this, 'li')"><?=strtoupper($datosCategorias['ccat_nombre'])?></a>
                </li>
            <?php }?>
        </ul>
        <div class="tab-container">
            <?php
                $primerElemento = true;
                $consultaCategorias = ControladorComercial::ctrCategoriasDestacado($limitCat);
                while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                    $claseActiva = $primerElemento ? 'active' : '';
                    $display = $primerElemento ? 'block' : 'none';
                    $primerElemento = false;
                    $filtro=" AND cprod_categoria='".$datosCategorias['ccat_id']."'";
                    $consultaProductos = ControladorComercial::ctrProductos($filtro,$limit);
                    $numProductos=mysqli_num_rows($consultaProductos);
            ?>
                <h3 class="acor-ttl medium-up--hide text-center style3 <?=$claseActiva?>" id="catrH3" data-target="contenedorProducto<?=$datosCategorias['ccat_id'];?>">
                    <a class="tablink" onclick="toggleActive(this, 'h3')">
                        <?=strtoupper($datosCategorias['ccat_nombre'])?>
                    </a>
                </h3>
                <div class="contenedor_producto_destacados slider-container" data-slick='{"autoplay": true, "autoplaySpeed": 3000}' id="contenedorProducto<?=$datosCategorias['ccat_id'];?>" style="display: <?=$display?>;">
                    <?php
                    if($numProductos>0){
                        while($datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH)){
                            $filtroFotos =' AND cpf_principal=1';
                            $consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'],$filtroFotos);
                            $datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
                            $numFotosProductos=mysqli_num_rows($consultaFotosProductos);
                            $rutaImg='https://via.placeholder.com/550';
                            if($numFotosProductos>0){
                                $rutaImg=RUTA_ADMIN.'files/productos/'.$datosFotosProductos['cpf_fotos'];
                            }
                    ?>
                        <div id="" class="grid grid-products carousel">
                            <div class="draggable">
                                <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                                    <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                                        <div class="grid-view_image">
                                            <a class="grid-view-item__link" href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>">
                                                <div class="grid-view-item__image primary lazyloaded" style="background-image: url(<?=$rutaImg?>);">
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
                                            <a href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="grid-view-item__title" tabindex="0"><?=$datosProductos['cprod_nombre']?></a>
                                            <div class="grid-view-item__meta">
                                                <!-- Show min to max price -->
                                                <span class="visually-hidden">Precio habitual</span>
                                                <span class="product-price__price">$<?=number_format($datosProductos['cprod_costo'],0,",",".")?></span>
                                            </div>
                                            <div class="flatbtn">
                                                <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
                </div>
            <?php }?>
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
    <div class="contenedor_producto slider-container" data-slick='{"autoplay": true, "autoplaySpeed": 3000}'>
        <?php
            $filtro="";
            $orden="ORDER BY cprod_fecha_creacion DESC";
            $consultaProductos = ControladorComercial::ctrProductos($filtro,$limit,$orden);
            while($datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH)){
                $filtroFotos =' AND cpf_principal=1';
                $consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'],$filtroFotos);
                $datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
                $numFotosProductos=mysqli_num_rows($consultaFotosProductos);
                $rutaImg='https://via.placeholder.com/550';
                if($numFotosProductos>0){
                    $rutaImg=RUTA_ADMIN.'files/productos/'.$datosFotosProductos['cpf_fotos'];
                }
        ?>
            <div id="" class="grid grid-products carousel">
                <div class="draggable">
                    <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                        <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                            <div class="grid-view_image">
                                <a class="grid-view-item__link" href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>">
                                    <div class="grid-view-item__image primary lazyloaded" style="background-image: url(<?=$rutaImg?>);">
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
                                <a href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="grid-view-item__title" tabindex="0"><?=$datosProductos['cprod_nombre']?></a>
                                <div class="grid-view-item__meta">
                                    <!-- Show min to max price -->
                                    <span class="visually-hidden">Precio habitual</span>
                                    <span class="product-price__price">$<?=number_format($datosProductos['cprod_costo'],0,",",".")?></span>
                                </div>
                                <div class="flatbtn">
                                    <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
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
    <div class="contenedor_producto slider-container" data-slick='{"autoplay": true, "autoplaySpeed": 3000}'>
        <?php
            $filtro="";
            $orden="ORDER BY cprod_vistas DESC";
            $consultaProductos = ControladorComercial::ctrProductos($filtro,$limit,$orden);
            while($datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH)){
                $filtroFotos =' AND cpf_principal=1';
                $consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'],$filtroFotos);
                $datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
                $numFotosProductos=mysqli_num_rows($consultaFotosProductos);
                $rutaImg='https://via.placeholder.com/550';
                if($numFotosProductos>0){
                    $rutaImg=RUTA_ADMIN.'files/productos/'.$datosFotosProductos['cpf_fotos'];
                }
        ?>
            <div id="" class="grid grid-products carousel">
                <div class="draggable">
                    <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                        <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                            <div class="grid-view_image">
                                <a class="grid-view-item__link" href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>">
                                    <div class="grid-view-item__image primary lazyloaded" style="background-image: url(<?=$rutaImg?>);">
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
                                <a href="<?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="grid-view-item__title" tabindex="0"><?=$datosProductos['cprod_nombre']?></a>
                                <div class="grid-view-item__meta">
                                    <!-- Show min to max price -->
                                    <span class="visually-hidden">Precio habitual</span>
                                    <span class="product-price__price">$<?=number_format($datosProductos['cprod_costo'],0,",",".")?></span>
                                </div>
                                <div class="flatbtn">
                                    <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
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