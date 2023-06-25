<?php
    $pagina= explode("/",$_GET['pagina']);
    $idLegal=$pagina[1];
    $legales = ControladorConfigPagina::ctrDatosLegales($idLegal);
?>
<div class="page-width shopify-policy__container">
    <div class="shopify-policy__title">
        <h1><?=$legales['pal_nombre'];?></h1>
    </div>

    <div class="shopify-policy__body">
        <div class="rte"><?=$legales['pal_contenido'];?></div>
    </div>
</div>