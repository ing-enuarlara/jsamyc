<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=RUTA_ADMIN?>plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?=RUTA_ADMIN?>dist/css/adminlte.min.css">
<?php
$idProducto="";
if(!empty($_GET['pagina'])){
    $pagina= explode("/",$_GET['pagina']);
    if(is_numeric($pagina[1])){
        $idProducto=$pagina[1];
    }
}

$datosProductos = ControladorComercial::ctrDatosProductos($idProducto);

$filtroTipo="AND ctipo_id='".$datosProductos['cprod_tipo']."'";
$consultaTipos = ControladorComercial::ctrTipos($filtroTipo);
$datosTipos = mysqli_fetch_array($consultaTipos, MYSQLI_BOTH);

$consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id']);
$datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
$imgPrincipal='https://via.placeholder.com/550';
if($datosFotosProductos['cpf_principal']==1){
    $imgPrincipal=RUTA_ADMIN.'files/productos/'.$datosFotosProductos['cpf_fotos'];
}
?>
<div class="page-width contenido__producto__detalles">
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"><?=strtoupper($datosProductos['cprod_nombre'])?></h3>
                    <div class="col-12">
                        <img src="<?=$imgPrincipal?>" class="product-image" alt="<?=$datosProductos['cprod_nombre']?>">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <?php
                            $ordenFotos='ORDER BY cpf_principal DESC';
                            $consultaFotos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'],'','',$ordenFotos);
                            while($fotosProductos = mysqli_fetch_array($consultaFotos, MYSQLI_BOTH)){
                                $rutaFotos='https://via.placeholder.com/550';
                                if(!empty($fotosProductos['cpf_fotos'])){
                                    $rutaFotos=RUTA_ADMIN.'files/productos/'.$fotosProductos['cpf_fotos'];
                                }
                                $active='';
                                if($fotosProductos['cpf_principal']==1){
                                    $active='active';
                                }
                        ?>
                            <div class="product-image-thumb <?=$active?>"><img src="<?=$rutaFotos?>" alt="<?=$datosProductos['cprod_nombre']?>"></div>
                        <?php }?>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.product-image-thumb').on('click', function () {
                        var $image_element = $(this).find('img')
                        $('.product-image').prop('src', $image_element.attr('src'))
                        $('.product-image-thumb.active').removeClass('active')
                        $(this).addClass('active')
                        })
                    })
                </script>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?=strtoupper($datosProductos['cprod_nombre'])?></h3>
                    <p><?=$datosProductos['cprod_detalles']?></p>

                    <hr>
                    <div class="py-2 px-3 mt-4">
                        <h2 class="mb-0">
                            $<?=number_format($datosProductos['cprod_costo'],0,",",".")?>
                        </h2>
                    </div>

                    <div class="userViewMsg">
                        <i class="fa-solid fa-eye"></i>
                        <strong id="uersView"></strong> Personas están revisando este producto ahora mismo
                    </div>
                    <script>
                        document.getElementById("uersView").innerHTML = Math.floor(Math.random() * 10) + 1;
                        setInterval(function() {
                            document.getElementById("uersView").innerHTML = Math.floor(Math.random() * 10) + 1
                        }, 5000);
                    </script>
                    <div class="product-info other">
                        <p class="product-type">
                            <span class="lbl">Tipo: </span> <?=$datosTipos['ctipo_nombre']?>
                        </p>
                        <p class="product-cat">
                            <span class="lbl">Colecciones: </span>
                            <a href="" title=""><?=$datosProductos['cprod_palabras_claves']?></a>
                        </p>
                    </div>

                    <div class="mt-4">
                        <a class="btnCard btnCard__primary product-form__cart-submit btnzoom">
                            <span> Agregar al carrito </span>
                        </a>
                        <a class="btnCard btnCard__secondary">
                            <span> Añadir a la lista de deseos </span>
                        </a>
                        <div data-ing-store="payment-button" data-has-selling-plan="false" data-has-fixed-selling-plan="false" class="ing-store-payment-button">
                            <div>
                                <div>
                                    <div>
                                        <button type="button" class="ing-store-payment-button__button ing-store-payment-button__button--unbranded BUz42FHpSPncCPJ4Pr_f jjzYeefyWpPZLH9pIgyw RWJ0IfBjxIhflh4AIrUw" data-testid="Checkout-button">Comprar ahora</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="text-gray" target="_blank">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="//twitter.com/share?text=<?=$datosProductos['cprod_nombre']?>&url=<?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="text-gray" target="_blank">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="mailto:?subject=Check this <?=RUTA.'productos/'.$datosProductos['cprod_id']?>" class="text-gray" target="_blank">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <!-- <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a> -->
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?=$datosProductos['cprod_detalles']?></div>
                    <!-- <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"></div>
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"></div> -->
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<div class="page-width">
    <div class="sec-ttl centrar-texto">
        <h3 class="h3 ft1">
            <span class="dbi pr">
                <strong>PRODUCTOS SIMILARES</strong>
            </span>
        </h3>
    </div>
    <div class="contenedor_producto slider-container" data-slick='{"autoplay": true, "autoplaySpeed": 3000}'>
        <?php
            $limit="LIMIT 0,5";
            $filtro="AND cprod_marca='".$datosProductos['cprod_marca']."'";
            $consultaProductos = ControladorComercial::ctrProductos($filtro,$limit);
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
            $consultaRecienLlegados = ControladorComercial::ctrProductos($filtro,$limit,$orden);
            while($datosRecienLlegados = mysqli_fetch_array($consultaRecienLlegados, MYSQLI_BOTH)){
                $filtroFotos =' AND cpf_principal=1';
                $consultaFotos = ControladorComercial::ctrFotosProductos($datosRecienLlegados['cprod_id'],$filtroFotos);
                $datosFotos = mysqli_fetch_array($consultaFotos, MYSQLI_BOTH);
                $numFotosProductos=mysqli_num_rows($consultaFotos);
                $rutaImg='https://via.placeholder.com/550';
                if($numFotosProductos>0){
                    $rutaImg=RUTA_ADMIN.'files/productos/'.$datosFotos['cpf_fotos'];
                }
        ?>
            <div id="" class="grid grid-products carousel">
                <div class="draggable">
                    <div class="grid__item grid__item-prod item small--one-half medium--one-quarter large--one-quarter widescreen--one-fifth" style="width: 248px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                        <div class="grid-view-item style5 wow fadeIn" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeIn;">
                            <div class="grid-view_image">
                                <a class="grid-view-item__link" href="<?=RUTA.'productos/'.$datosRecienLlegados['cprod_id']?>">
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
                                <a href="<?=RUTA.'productos/'.$datosRecienLlegados['cprod_id']?>" class="grid-view-item__title" tabindex="0"><?=$datosRecienLlegados['cprod_nombre']?></a>
                                <div class="grid-view-item__meta">
                                    <!-- Show min to max price -->
                                    <span class="visually-hidden">Precio habitual</span>
                                    <span class="product-price__price">$<?=number_format($datosRecienLlegados['cprod_costo'],0,",",".")?></span>
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
<!-- jQuery -->
<script src="<?=RUTA_ADMIN?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=RUTA_ADMIN?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=RUTA_ADMIN?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=RUTA_ADMIN?>dist/js/demo.js"></script>