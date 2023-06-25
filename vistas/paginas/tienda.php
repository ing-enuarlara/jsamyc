<?php
    $nombrePagina=nombrePaginas();
    
    $filtro="";
    if(!empty($_GET['filtro'])){
        $filtro=$_GET['filtro'];
    }
    $precioMin="";
    if(!empty($_GET['precioMin'])){
        $precioMin=$_GET['precioMin'];
    }
    $precioMax="";
    if(!empty($_GET['precioMax'])){
        $precioMax=$_GET['precioMax'];
    }
    $oroItaly="";
    if(!empty($_GET['oroItaly'])){
        $oroItaly=$_GET['oroItaly'];
    }
    $oroNacional="";
    if(!empty($_GET['oroNacional'])){
        $oroNacional=$_GET['oroNacional'];
    }
    $ordenar="";
    if(!empty($_GET['ordenar'])){
        $ordenar=$_GET['ordenar'];
    }
?>
<div class="page-width contenido__store">
    <div class="filtros" >
        <div class="sidebar filterbar" id="filterbar">
            <div id="closeFilter" class="closeFilter large-up--hide"><i class="fa-solid fa-xmark"></i></div>
            <div class="sidebar_tags" data-url="https://elitejoyeria.com.co/collections/tienda">
                <form id="CollectionFiltersForm" class="flForm">
                    <div class="sidebar_widget filterBox flPrice" data-index="1">
                        <div class="widget-title">
                            <span class="fl f-jcsb f-aic">Precio<span class="count-bubble"></span></span>
                        </div>
                        <div class="slider-container-price theme-green" style="width: 200px;">
                            <input type="text" onchange="filtros(this,3)" value="<?=$precioMin?>" placeholder="$ 0">
                            <input type="text" onchange="filtros(this,4)" value="<?=$precioMax?>" placeholder="$ 30.996.000">
                        </div>
                    </div>
                    <div class="sidebar_widget filterBox" data-index="2">
                        <div class="widget-title">
                            <span class="fl f-jcsb f-aic">Tipo de producto<span class="count-bubble"></span></span>
                        </div>
                        <ul class="widget-content flOpt" role="list">
                            <li>
                                <a href="#" onclick="filtros('',5)">Oro Italy</a>
                            </li>
                            <li>
                                <a href="#" onclick="filtros('',6)">Oro Nacional</a>
                            </li>
                        </ul>
                    </div>
                </form>
                <div class="sidebar_widget categories">
                    <div class="widget-title">Categorias</div>
                    <div class="widget-content">
                        <ul class="sidebar_cate">
                            <?php
                                $consultaCategorias = ControladorComercial::ctrCategorias(2);
                                while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                                    $consultaSubCategorias = ControladorComercial::ctrSubCategorias($datosCategorias['ccat_id']);
                                    $numSubCategorias=mysqli_num_rows($consultaSubCategorias);
                            ?>
                                <li class="grid__item grid__item-prod lvl-1 ">
                                    <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id']?>" class="site-nav lvl-1"><?=$datosCategorias['ccat_nombre']?></a>
                                    <?php if($numSubCategorias>0){?>
                                        <ul class="subLinks">
                                            <?php
                                                while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                                            ?>
                                                <li class="lvl-2">
                                                    <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id']."/".$datosSubCategorias['cmar_id'];?>" class="site-nav lvl-2"><?=$datosSubCategorias['cmar_nombre'];?></a>
                                                </li>
                                            <?php }?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenido__store--tienta">
        <h1 class="collection-title"><?=$nombrePagina?></h1>
        <div class="productList">
            <div class="filters-toolbar">
                <button type="button" id="openFilter" class="btnCard btnCard-filter large-up--hide">Filtrar</button>
                <div class="filters-toolbar__item collection-view-as">
                    <a class="change-view" onclick="filtros('',1)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="5" cy="5" r="1" />
                            <circle cx="12" cy="5" r="1" />
                            <circle cx="19" cy="5" r="1" />
                            <circle cx="5" cy="12" r="1" />
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="19" cy="12" r="1" />
                            <circle cx="5" cy="19" r="1" />
                            <circle cx="12" cy="19" r="1" />
                            <circle cx="19" cy="19" r="1" />
                        </svg>
                    </a>
                    <a class="change-view" onclick="filtros('',2)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="9" y1="6" x2="20" y2="6" />
                            <line x1="9" y1="12" x2="20" y2="12" />
                            <line x1="9" y1="18" x2="20" y2="18" />
                            <line x1="5" y1="6" x2="5" y2="6.01" />
                            <line x1="5" y1="12" x2="5" y2="12.01" />
                            <line x1="5" y1="18" x2="5" y2="18.01" />
                        </svg>
                    </a>
                </div>
                <div class="filters-toolbar__item flbarCount small--hide">
                    <span class="filters-toolbar__product-count">Demostración:  188 Resultados</span>
                </div>
                <div class="filters-toolbar__item text-right">
                    <label for="SortBySt" class="label--hidden">Ordenar</label>
                    <select name="SortBy" id="SortBySt" class="filters-toolbar__input filters-toolbar__input--sort" onchange="filtros(this,7)">
                        <option value="0" selected="selected">Ordenar</option>
                        <option value="1" <?php if($ordenar==1){ echo "selected";} ?> >Destacados</option>
                        <option value="2" <?php if($ordenar==2){ echo "selected";} ?> >Más vendidos</option>
                        <option value="3" <?php if($ordenar==3){ echo "selected";} ?> >Alfabéticamente, A-Z</option>
                        <option value="4" <?php if($ordenar==4){ echo "selected";} ?> >Alfabéticamente, Z-A</option>
                        <option value="5" <?php if($ordenar==5){ echo "selected";} ?> >Precio, menor a mayor</option>
                        <option value="6" <?php if($ordenar==6){ echo "selected";} ?> >Precio, mayor a menor</option>
                        <option value="7" <?php if($ordenar==7){ echo "selected";} ?> >Fecha, nuevo a antiguo</option>
                        <option value="8" <?php if($ordenar==8){ echo "selected";} ?> >Fecha, antiguo a nuevo</option>
                    </select>
                </div>
            </div>
            <div class="active-facets crFilters fl f-wrap">
                <?php if($filtro==1){ ?>
                    <a href="<?=RUTA.$_GET['pagina']?>" class="actFilter js-facet-remove">Limpiar todo</a>
                <?php
                }
                if(!empty($precioMin)){
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtro=1&view=<?=$_GET['view']?>&precioMax=<?=$precioMax?>&oroItaly=<?=$oroItaly?>&oroNacional=<?=$oroNacional?>&ordenar=<?=$ordenar?>">Minimo: $<?=$precioMin?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                if(!empty($precioMax)){
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtro=1&view=<?=$_GET['view']?>&precioMin=<?=$precioMin?>&oroItaly=<?=$oroItaly?>&oroNacional=<?=$oroNacional?>&ordenar=<?=$ordenar?>">Maximo: $<?=$precioMax?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                if(!empty($oroItaly)){
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtro=1&view=<?=$_GET['view']?>&precioMin=<?=$precioMin?>&precioMax=<?=$precioMax?>&oroNacional=<?=$oroNacional?>&ordenar=<?=$ordenar?>"><?=$oroItaly?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                if(!empty($oroNacional)){
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtro=1&view=<?=$_GET['view']?>&precioMin=<?=$precioMin?>&precioMax=<?=$precioMax?>&oroItaly=<?=$oroItaly?>&ordenar=<?=$ordenar?>"><?=$oroNacional?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="contenedor_producto_tienda">
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