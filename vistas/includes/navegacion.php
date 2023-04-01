<?php
    $nombrePagina=nombrePaginas();
    if(!empty($nombrePagina)){
?>
<div class="bredcrumbWrap">
    <nav class="page-width breadcrumbs" role="navigation" aria-label="breadcrumbs">
        <a href="<?=RUTA?>" title="Volver a la página de inicio">Inicio</a>
        <span aria-hidden="true" class="symbol">|</span>
        <span class="title-bold"><?=$nombrePagina?></span>
    </nav>
</div>
<?php
    }
?>