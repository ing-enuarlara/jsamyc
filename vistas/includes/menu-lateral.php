<div id="mobile__nav" class="mobile__nav">
    <div id="closemmn" class="closemmn"><i class="fa-solid fa-xmark"></i></div>
    <ul id="mobileNav" class="mobil__navMnu">
        <li><a href="<?=RUTA?>">INICIO</a></li>
        <li><a href="<?=RUTA?>tienda">TIENDA</a></li>
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
                        <?php
                            $consultaCategorias = ControladorComercial::ctrCategoriasDestacado();
                            while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                        ?>
                        <li>
                            <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id'];?>"><?=$datosCategorias['ccat_nombre'];?></a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        EXCLUSIVAS
                        <i id="plusEx" class="fa-solid fa-plus"></i>
                    </a>
                    <ul id="menuEX">
                        <?php
                            $consultaSubCategorias = ControladorComercial::ctrSubCategoriasExclusivas();
                            while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                        ?>
                        <li>
                            <a href="<?=RUTA?>tienda/<?=$datosSubCategorias['cmar_categoria']."/".$datosSubCategorias['cmar_id'];?>"><?=$datosSubCategorias['cmar_nombre'];?></a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        MÁS JOYAS
                        <i id="plusMj" class="fa-solid fa-plus"></i>
                    </a>
                    <ul id="menuMj">
                        <?php
                            $consultaSubCategorias = ControladorComercial::ctrSubCategoriasMasJoyas();
                            while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                        ?>
                        <li>
                            <a href="<?=RUTA?>tienda/<?=$datosSubCategorias['cmar_categoria']."/".$datosSubCategorias['cmar_id'];?>"><?=$datosSubCategorias['cmar_nombre'];?></a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                CATEGORÍAS
                <i id="plusCategoria" class="fa-solid fa-plus"></i>
            </a>
            <ul id="menuCategoria">
                <?php
                    $consultaCategorias = ControladorComercial::ctrCategorias();
                    while($datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH)){
                        $consultaSubCategorias = ControladorComercial::ctrSubCategorias($datosCategorias['ccat_id']);
                        $numSubCategorias=mysqli_num_rows($consultaSubCategorias);

                        $rutaCategoria= RUTA."tienda/".$datosCategorias['ccat_id'];
                        if($numSubCategorias>0){
                            $rutaCategoria="#";
                        }
                ?>
                    <li>
                        <a href="<?=$rutaCategoria?>">
                            <?=$datosCategorias['ccat_nombre'];?>
                            <?php if($numSubCategorias>0){?>
                                <i id="plusSubCategoria<?=$datosCategorias['ccat_id'];?>" class="fa-solid fa-plus" onclick="plus('plusSubCategoria<?=$datosCategorias['ccat_id'];?>','menuSubCategoria<?=$datosCategorias['ccat_id'];?>')"></i>
                            <?php }?>
                        </a>
                        <?php if($numSubCategorias>0){?>
                            <ul id="menuSubCategoria<?=$datosCategorias['ccat_id'];?>">
                                <?php
                                    while($datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH)){
                                ?>
                                    <li>
                                        <a href="<?=RUTA?>tienda/<?=$datosCategorias['ccat_id']."/".$datosSubCategorias['cmar_id'];?>"><?=$datosSubCategorias['cmar_nombre'];?></a>
                                    </li>
                                <?php }?>
                            </ul>
                        <?php }?>
                    </li>
                <?php }?>
            </ul>
        </li>
        <li><a href="<?=RUTA?>contacto">CONTACTO</a></li>
        <li></li>
        <li></li>
        <li></li>
        <li><a href="<?=RUTA?>deseos">LISTA DE DESEOS</a></li>
        <li><a href="<?=RUTA?>acceso">ACCESO</a></li>
        <li><a href="<?=RUTA?>vistas/clientes/">Mi cuenta</a></li>
        <li><a href=""><b>Cerrar sesión</b></a></li>
    </ul>
</div>