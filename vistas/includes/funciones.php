<?php
    function paginaUrl() {
        $paginaUrl="";
        if(!empty($_GET['pagina'])){
            $pagina= explode("/",$_GET['pagina']);
            $paginaUrl=$pagina[0];
            if(!empty($pagina[1])){
                $paginaUrl=$pagina[0]."/".$pagina[1];
            }
        }
        return $paginaUrl;
    }

    function nombrePaginas() {
        $nombrePagina="";
        if(!empty($_GET['pagina'])){
            $pagina= explode("/",$_GET['pagina']);
            $nombrePagina=$pagina[0];
            switch($pagina[0]){
                case 'deseos':
                    $nombrePagina="Lista de Deseos";
                break;
                case 'carrito':
                    $nombrePagina="Carrito de compra";
                break;
            }
            if(!empty($pagina[1])){
                $nombrePagina=$pagina[1];
                
                if(is_numeric($pagina[1])){
                    if($pagina[0]=='legales'){
                        $idLegal=$pagina[1];
                        $legales = ControladorConfigPagina::ctrDatosLegales($idLegal);
                        $nombrePagina=$legales['pal_nombre'];
                    }
                }
            }
        }
        $nombrePagina=ucfirst($nombrePagina);
        return $nombrePagina;
    }