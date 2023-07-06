<?php
    $paginaUrl=paginaUrl();

    $view="";
    if(!empty($_GET['view'])){
        $view=$_GET['view'];
    }
    $min="";
    if(!empty($_GET['precioMin'])){
        $min=$_GET['precioMin'];
    }
    $max="";
    if(!empty($_GET['precioMax'])){
        $max=$_GET['precioMax'];
    }
    $tipo="";
    if(!empty($_GET['tipo'])){
        $tipo=$_GET['tipo'];
    }
    $ordenar="";
    if(!empty($_GET['ordenar'])){
        $ordenar=$_GET['ordenar'];
    }
?>
<script type="text/javascript">
    url='http://localhost/ing-enuarlara.co/jsamyc/';
    function filtros(datos,op){
        pagina= "<?=$paginaUrl;?>";
        view= "<?=$view;?>";
        precioMin= "<?=$min?>";
        precioMax= "<?=$max?>";
        tipo="<?=$tipo?>";
        ordenar="<?=$ordenar?>";
        if(op==1){
            view="grid";
        }
        if(op==2){
            view="list";
        }
        if(op==3){
            precioMin=datos.value;
        }
        if(op==4){
            precioMax=datos.value;
        }
        if(op==5){
            tipo=datos;
        }
        if(op==6){
            ordenar=datos.value;
        }
        window.location.href=url+'index.php?pagina='+pagina+'&filtros=1&view='+view+'&precioMin='+precioMin+'&precioMax='+precioMax+'&tipo='+tipo+'&ordenar='+ordenar;
    }

</script>