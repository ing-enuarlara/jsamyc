<?php
    if(isset($_GET['pagina'])){
        $pagina= explode("/",$_GET['pagina']);
        $nombrePagina=ucfirst($pagina[0]);
        if(!empty($pagina[1])){
            $nombrePagina=ucfirst($pagina[1]);
        }
?>
<div class="bredcrumbWrap">
    <nav class="page-width breadcrumbs" role="navigation" aria-label="breadcrumbs">
        <a href="<?=REDIRECT_ROUTE?>" title="Volver a la página de inicio">Inicio</a>
        <span aria-hidden="true" class="symbol">|</span>
        <span class="title-bold"><?=$nombrePagina?></span>
    </nav>
</div>
<?php
    }
?>