<?php
    if(isset($_GET['pagina'])){
        $pagina= explode("/",$_GET['pagina']);
        $nombrePagina=$pagina[0];
        if(!empty($pagina[1])){
            $nombrePagina=$pagina[0]."/".$pagina[1];
        }
    }
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
    $oroI="";
    if(!empty($_GET['oroItaly'])){
        $oroI=$_GET['oroItaly'];
    }
    $oroN="";
    if(!empty($_GET['oroNacional'])){
        $oroN=$_GET['oroNacional'];
    }
    $orden="";
    if(!empty($_GET['ordenar'])){
        $orden=$_GET['ordenar'];
    }
?>
<script type="text/javascript">
    url='http://localhost/ing-enuarlara.co/tienda/';
    function filtros(datos,op){
        pagina= "<?=$nombrePagina;?>";
        view= "<?=$view;?>";
        precioMin= "<?=$min?>";
        precioMax= "<?=$max?>";
        oroItaly="<?=$oroI?>";
        oroNacional="<?=$oroN?>";
        ordenar="<?=$orden?>";
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
            oroItaly="oro-italy";
        }
        if(op==6){
            oroNacional="oro-nacional";
        }
        if(op==7){
            ordenar=datos.value;
        }
        window.location.href=url+'index.php?pagina='+pagina+'&filtro=1&view='+view+'&precioMin='+precioMin+'&precioMax='+precioMax+'&oroItaly='+oroItaly+'&oroNacional='+oroNacional+'&ordenar='+ordenar;
    }

</script>