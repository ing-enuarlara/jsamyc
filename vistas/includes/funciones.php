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
            $nombrePagina=ucfirst($pagina[0]);
            if(!empty($pagina[1])){
                $nombrePagina=ucfirst($pagina[1]);
            }
        }
        return $nombrePagina;
    }