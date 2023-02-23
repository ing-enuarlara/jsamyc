<?php
    class ControladorPlantilla{

        public function ctrTraerPlantilla(){
            include "vistas/plantilla.php";
        }
        
        public function ctrEnlacesPaginas(){
            $ruta="paginas/inicio.php";
            if(isset($_GET['pagina'])){
                $enlace= $_GET['pagina'];
                $ruta= ModeloPlantilla::mdlEnlacesPaginas($enlace);
            }
            include "vistas/".$ruta;
        }
    }