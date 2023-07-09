<?php
    $nombrePagina=nombrePaginas();
    
    $filtro="";
    if(!empty($_GET['pagina'])){
        $pagina= explode("/",$_GET['pagina']);
        if(!empty($pagina[1])){
            $filtro=" AND cprod_categoria=$pagina[1]";
        }
        if(!empty($pagina[2])){
            $filtro=" AND cprod_marca=$pagina[2]";
        }
    }
    $filtros="";
    if(!empty($_GET['filtros'])){
        $filtros=$_GET['filtros'];
    }
    $precioMin="";
    if(!empty($_GET['precioMin'])){
        $precioMin=$_GET['precioMin'];
        $filtro.=" AND cprod_costo>=$precioMin";
    }
    $precioMax="";
    if(!empty($_GET['precioMax'])){
        $precioMax=$_GET['precioMax'];
        $filtro.=" AND cprod_costo<=$precioMax";
    }
    $tipo="";
    if(!empty($_GET['tipo'])){
        $tipo=$_GET['tipo'];
        $filtro.=" AND cprod_tipo=$tipo";
    }
    $ordenar="";
    $filtroOrden="";
    if(!empty($_GET['ordenar'])){
        $ordenar=$_GET['ordenar'];
        switch($ordenar){
            case 1:
                $filtroOrden="ORDER BY cprod_nombre ASC";
            break;
            case 2:
                $filtroOrden="ORDER BY cprod_nombre DESC";
            break;
            case 3:
                $filtroOrden="ORDER BY cprod_costo ASC";
            break;
            case 4:
                $filtroOrden="ORDER BY cprod_costo DESC";
            break;
            case 5:
                $filtroOrden="ORDER BY cprod_fecha_creacion DESC";
            break;
            case 6:
                $filtroOrden="ORDER BY cprod_fecha_creacion ASC";
            break;
        }
    }
    $limit='LIMIT 0,2000';
    $consultaProductos = ControladorComercial::ctrProductos($filtro,$limit,$filtroOrden);
    $numProductos=mysqli_num_rows($consultaProductos);
?>
<script>
    $(document).ready(traerProductos());
    function traerProductos() {
        var offset = 0; // Número de productos ya cargados
        <?php if(!empty($filtro)){ ?>
        var filtro = '<?=$filtro?>'; // filtros
        <?php }else{ ?>
        var filtro = ''; // filtros
        <?php }?>
        <?php if(!empty($filtroOrden)){ ?>
        var filtroOrden = '<?=$filtroOrden?>'; // filtroOrdens
        <?php }else{ ?>
        var filtroOrden = ''; // filtroOrdens
        <?php }?>

        $.ajax({
            type: "POST",
            url: "<?=RUTA?>vistas/ajax/ajax-obtener-productos.php",
            data: { offset: offset, filtro: filtro, filtroOrden: filtroOrden },
            success: function(response) {
                // Agregar los nuevos productos a la lista
                $("#contenedorProductos").append(response);

                // Incrementar el número de productos cargados
                offset += 12;
            }
        });

        // Detectar el evento de scroll
        $(window).scroll(function() {
            if ($(window).scrollTop() >= ($(document).height() - $(window).height())) {
                // Hacer una petición AJAX para obtener más productos
                $.ajax({
                    type: "POST",
                    url: "<?=RUTA?>vistas/ajax/ajax-obtener-productos.php",
                    data: { offset: offset, filtro: filtro, filtroOrden: filtroOrden },
                    success: function(response) {
                        // Agregar los nuevos productos a la lista
                        $("#contenedorProductos").append(response);

                        // Incrementar el número de productos cargados
                        offset += 12;
                    }
                });
            }
        });
    };
</script>
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
                            <?php
                                $consultaTipos = ControladorComercial::ctrTipos();
                                while($datosTipos = mysqli_fetch_array($consultaTipos, MYSQLI_BOTH)){
                            ?>
                                <li>
                                    <a onclick="filtros(<?=$datosTipos['ctipo_id'];?>,5)"><?=$datosTipos['ctipo_nombre'];?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </form>
                <div class="sidebar_widget categories">
                    <div class="widget-title">Categorias</div>
                    <div class="widget-content">
                        <ul class="sidebar_cate">
                            <?php
                                $consultaCategorias = ControladorComercial::ctrCategorias();
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
                </div>
                <div class="filters-toolbar__item flbarCount small--hide">
                    <span class="filters-toolbar__product-count">Mostrando:  <?=$numProductos?> Resultados</span>
                </div>
                <div class="filters-toolbar__item text-right">
                    <label for="SortBySt" class="label--hidden">Ordenar</label>
                    <select name="SortBy" id="SortBySt" class="filters-toolbar__input filters-toolbar__input--sort" onchange="filtros(this,6)">
                        <option value="">Ordenar</option>
                        <option value="1" <?php if($ordenar==1){ echo "selected";} ?> >Alfabéticamente, A-Z</option>
                        <option value="2" <?php if($ordenar==2){ echo "selected";} ?> >Alfabéticamente, Z-A</option>
                        <option value="3" <?php if($ordenar==3){ echo "selected";} ?> >Precio, menor a mayor</option>
                        <option value="4" <?php if($ordenar==4){ echo "selected";} ?> >Precio, mayor a menor</option>
                        <option value="5" <?php if($ordenar==5){ echo "selected";} ?> >Fecha, nuevo a antiguo</option>
                        <option value="6" <?php if($ordenar==6){ echo "selected";} ?> >Fecha, antiguo a nuevo</option>
                    </select>
                </div>
            </div>
            <div class="active-facets crFilters fl f-wrap">
                <?php if($filtros==1){ ?>
                    <a href="<?=RUTA.$_GET['pagina']?>" class="actFilter js-facet-remove">Limpiar todo</a>
                <?php
                }
                if(!empty($precioMin)){
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtros=1&view=<?=$_GET['view']?>&precioMax=<?=$precioMax?>&tipo=<?=$tipo?>&ordenar=<?=$ordenar?>">Minimo: $<?=$precioMin?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                if(!empty($precioMax)){
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtros=1&view=<?=$_GET['view']?>&precioMin=<?=$precioMin?>&tipo=<?=$tipo?>&ordenar=<?=$ordenar?>">Maximo: $<?=$precioMax?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                if(!empty($tipo)){
                    $filtroTipo=" AND ctipo_id=$tipo";
                    $consultaTiposFiltros = ControladorComercial::ctrTipos($filtroTipo);
                    $datosTiposFiltros = mysqli_fetch_array($consultaTiposFiltros, MYSQLI_BOTH);
                ?>
                    <a class="actFilter js-facet-remove" href="<?=RUTA?>index.php?pagina=<?=$_GET['pagina']?>&filtros=1&view=<?=$_GET['view']?>&precioMin=<?=$precioMin?>&precioMax=<?=$precioMax?>&ordenar=<?=$ordenar?>"><?=$datosTiposFiltros['ctipo_nombre']?> <i class="fa-solid fa-xmark"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
        <?php
            if($numProductos>0){
        ?>
            <div class="contenedor_producto_tienda" id="contenedorProductos">
            </div>
        <?php
            }else{
        ?>
            <div class="grid__item small--text-center"><p class="text-center">Lo sentimos, no hay productos que coincidan con su búsqueda.</p></div>
        <?php
            }
        ?>
    </div>
</div>