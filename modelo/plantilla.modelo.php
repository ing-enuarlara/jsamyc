<?php
    class ModeloPlantilla{

        static public function mdlEnlacesPaginas($enlace){
            $ruta="paginas/error404.php";
            $pagina= explode("/",$enlace);
            if($pagina[0]=='inicio' || $pagina[0]=='tienda' || $pagina[0]=='contacto' || $pagina[0]=='acceso' || $pagina[0]=='deseos' || $pagina[0]=='registrate' || $pagina[0]=='carrito'){
                    $ruta="paginas/".$pagina[0].".php";
            }
            return $ruta;
        }
    }