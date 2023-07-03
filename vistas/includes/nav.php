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
            <div id="megame" class="megamenu" style="width:1000px;background-image:url(<?=RUTA_ADMIN.$rutaImgMenu;?>);background-position:top right;">
                <ul class="grid" style="padding-right:30% !important;">
                    <li class="grid__item grid__item-prod">
                        <a href="#" class="grid__link"><b>DESTACADAS</b></a>
                        <ul class="sublink">
                            <?php
                                $consultaCategorias = ControladorComercial::ctrCategoriasDestacado();
                                while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                            ?>
                            <li class="sublink__2">
                                <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id'];?>"><?=$datosCategorias['ccat_nombre'];?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <li class="grid__item grid__item-prod">
                        <a href="#" class="grid__link"><b>EXCLUSIVAS</b></a>
                        <ul class="sublink">
                            <?php
                                $consultaSubCategorias = ControladorComercial::ctrSubCategoriasExclusivas();
                                while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                            ?>
                            <li class="sublink__2">
                                <a href="<?=RUTA?>tienda/<?=$datosSubCategorias['cmar_categoria']."/".$datosSubCategorias['cmar_id'];?>"><?=$datosSubCategorias['cmar_nombre'];?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <li class="grid__item grid__item-prod">
                        <a href="#" class="grid__link"><b>MÁS JOYAS</b></a>
                        <ul class="sublink">
                            <?php
                                $consultaSubCategorias = ControladorComercial::ctrSubCategoriasMasJoyas();
                                while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                            ?>
                            <li class="sublink__2">
                                <a href="<?=RUTA?>tienda/<?=$datosSubCategorias['cmar_categoria']."/".$datosSubCategorias['cmar_id'];?>"><?=$datosSubCategorias['cmar_nombre'];?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav_items" onmousemove="mostrar('categorias')" onmouseout="ocultar('categorias')">
            <a href="#">
                CATEGORÍAS
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="menucate menusublink" id="categorias">
                <?php
                    $consultaCategorias = ControladorComercial::ctrCategorias();
                    while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                        $consultaSubCategorias = ControladorComercial::ctrSubCategorias($datosCategorias['ccat_id']);
                        $numSubCategorias=mysqli_num_rows($consultaSubCategorias);
                ?>
                <li class="" onmousemove="mostrar('sub-categorias<?=$datosCategorias['ccat_id'];?>')" onmouseout="ocultar('sub-categorias<?=$datosCategorias['ccat_id'];?>')">
                    <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id'];?>" class="submenucate">
                        <?=$datosCategorias['ccat_nombre'];?>
                        <?php if($numSubCategorias>0){?>
                            <i class="fa-solid fa-angle-right"></i>
                        <?php }?>
                    </a>
                    <?php if($numSubCategorias>0){?>
                        <ul class="menucate menusublink" id="sub-categorias<?=$datosCategorias['ccat_id'];?>">
                            <?php
                                while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                            ?>
                                <li class="">
                                    <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id']."/".$datosSubCategorias['cmar_id'];?>"><?=$datosSubCategorias['cmar_nombre'];?></a>
                                </li>
                            <?php }?>
                        </ul>
                    <?php }?>
                </li>
                <?php }?>
            </ul>
        </li>
        <li class="nav_items">
            <a href="<?=RUTA?>contacto">CONTACTO</a>
        </li>
    </ul>
</div>