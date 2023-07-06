<?php
require_once "../../controladores/comercial.controlador.php";
require_once "../../modelo/comercial.modelo.php";
const RUTA = 'http://localhost/ing-enuarlara.co/jsamyc/';
const RUTA_PROYECTO = 'C:/xampp/htdocs/ing-enuarlara.co/jsamyc/';
const RUTA_ADMIN = 'http://localhost/ing-enuarlara.co/admin/';

$offset = $_REQUEST["offset"];
$filtro = $_REQUEST["filtro"];
$filtroOrden = $_REQUEST["filtroOrden"];

// Obtener los siguientes 30 productos de la base de datos
$limit="LIMIT $offset,12";
$consultaProductos = ControladorComercial::ctrProductos($filtro,$limit,$filtroOrden);
while($datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH)){
    $filtroFotos =' AND cpf_principal=1';
    $consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'],$filtroFotos);
    $datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
    $numFotosProductos=mysqli_num_rows($consultaFotosProductos);
    $rutaImg='https://via.placeholder.com/550';
    if($numFotosProductos>0){
        $rutaImg=RUTA_ADMIN.'files/productos/'.$datosFotosProductos['cpf_fotos'];
    }
    echo '
    <div id="" class="grid grid-products carousel slick-initialized slick-slider">
        <div class="slick-list draggable">
            <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth slick-slide slick-current slick-active" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                    <div class="grid-view_image">
                        <a class="grid-view-item__link" href="'.RUTA.'productos/'.$datosProductos['cprod_id'].'">
                            <div class="grid-view-item__image primary lazyloaded" style="background-image: url('.$rutaImg.');">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="6" cy="19" r="2" />
                                    <circle cx="17" cy="19" r="2" />
                                    <path d="M17 17h-11v-14h-2" />
                                    <path d="M6 5l14 1l-1 7h-13" />
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
                        <a href="'.RUTA.'productos/'.$datosProductos['cprod_id'].'" class="grid-view-item__title" tabindex="0">'.$datosProductos['cprod_nombre'].'</a>
                        <div class="grid-view-item__meta">
                            <!-- Show min to max price -->
                            <span class="visually-hidden">Precio habitual</span>
                            <span class="product-price__price">$'.number_format($datosProductos['cprod_costo'],0,",",".").'</span>
                        </div>
                        <div class="flatbtn">
                            <a class="btnCard btnCard__primary add-to-cart" href="#">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}
exit();