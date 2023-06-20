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
                case 'politica-privacidad':
                    $nombrePagina="Políticas de Privacidad";
                break;
                case 'terminos-servicios':
                    $nombrePagina="Términos de Servicios";
                break;
                case 'politica-envio':
                    $nombrePagina="Políticas de Envío";
                break;
                case 'politica-garantia':
                    $nombrePagina="Políticas de Garantías";
                break;
            }
            if(!empty($pagina[1])){
                $nombrePagina=$pagina[1];
            }
        }
        $nombrePagina=ucfirst($nombrePagina);
        return $nombrePagina;
    }