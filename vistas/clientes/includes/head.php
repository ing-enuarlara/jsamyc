<?php
    const RUTA = 'http://localhost/ing-enuarlara.co/jsamyc/';
    const RUTA_PROYECTO = 'C:/xampp/htdocs/ing-enuarlara.co/jsamyc/';

    require_once RUTA_PROYECTO."controladores/configPagina.controlador.php";
    require_once RUTA_PROYECTO."modelo/configPagina.modelo.php";

    include(RUTA_PROYECTO."vistas/includes/configPagina.php");
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1">
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="qhR3PuTV5c9GI0SLF-76PldS453RBfP2ohUBHwtCTtQjyJ0iv4D9h5Q1qWrJ9HgzzfYT4njf9o3g6ycHg10g_Q">
<title data-react-html="true">Pedidos - <?=$configuracion['conf_empresa'];?> - Cuenta</title>
<meta name="description" content="<?=$configuracion['conf_descripcion_pagina'];?>">
<meta name="keywords" content="<?=$configuracion['conf_palabras_claves'];?>"/>
<link rel="icon" type="image/x-icon" href="data:,">
<link href="<?= RUTA ?>vistas/clientes/dist/css/vendor-app.css" crossorigin="anonymous" rel="stylesheet">
<link href="<?= RUTA ?>vistas/clientes/dist/css/main.css" crossorigin="anonymous" rel="stylesheet">
<style type="text/css">
    @font-face {
        font-weight: 400;
        font-style: normal;
        font-family: circular;

        src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
    }

    @font-face {
        font-weight: 700;
        font-style: normal;
        font-family: circular;

        src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
    }
</style>