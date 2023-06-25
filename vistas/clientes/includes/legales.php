<?php
    const RUTA = 'http://localhost/ing-enuarlara.co/jsamyc/';
    const RUTA_PROYECTO = 'C:/xampp/htdocs/ing-enuarlara.co/jsamyc/';

    require_once RUTA_PROYECTO."controladores/configPagina.controlador.php";
    require_once RUTA_PROYECTO."modelo/configPagina.modelo.php";
    $idLegal=$_GET['id'];
    $legales = ControladorConfigPagina::ctrDatosLegales($idLegal);
?>
<html lang="es">
<head>
    <title><?=$legales['pal_nombre'];?></title>
    <meta charset="UTF-8">
    <script nonce="">
        const debounce = function (func, wait, immediate) {
            var timeout;
            return function () {
                var context = this, args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                }, wait);
                if (immediate && !timeout) func.apply(context, args);
            };
        };

        const sendMessage = function () {
            parent.postMessage({ action: 'checkoutModalIframeResized', height: document.body.scrollHeight + 'px' }, '*');
        };

        document.addEventListener('DOMContentLoaded', sendMessage, false);
        window.addEventListener('resize', debounce(sendMessage, 200), false);
    </script>

    <link rel="stylesheet" crossorigin="anonymous" href="<?=RUTA_PROYECTO?>vistas/clientes/dist/css/standalone.css" integrity="sha256-ZKO7Cn+f0tkGoi8J3rtkMos52cSvyTRJuux1p8BBUAE=">  
</head>
<body class="page-policies default-background text-container">
    <?=$legales['pal_contenido'];?>
</body>
</html>