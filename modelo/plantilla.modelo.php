<?php
    class ModeloPlantilla{

        static public function mdlEnlacesPaginas($enlace){
            $ruta="paginas/error404.php";
            $pagina= explode("/",$enlace);
            if($pagina[0]=='inicio' || $pagina[0]=='tienda' || $pagina[0]=='contact' || $pagina[0]=='acceso' || $pagina[0]=='deseos'){
                    $ruta="paginas/".$pagina[0].".php";
            }
            return $ruta;
        }
    }