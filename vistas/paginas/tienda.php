<?php
    if(isset($_GET['pagina'])){
        $pagina= explode("/",$_GET['pagina']);
        $cat="";
        if(!empty($pagina[1])){
            $cat=" Productos de ".$pagina[1];
        }
    }
?>
<h4>TIENDA<?=$cat?></h4>