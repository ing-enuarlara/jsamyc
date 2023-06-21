<?php
    const RUTA = 'http://localhost/ing-enuarlara.co/jsamyc/';
    const RUTA_PROYECTO= 'C:/xampp/htdocs/ing-enuarlara.co/jsamyc/';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Tienda || Descripción</title>

    <!-- NORMALIZE -->
    <link rel="stylesheet" type="text/css" href="<?=RUTA?>dist/css/normalize.css">

    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="<?=RUTA?>dist/css/style.php">
    <link rel="stylesheet" type="text/css" href="<?=RUTA?>dist/css/responsive.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <link href="<?=RUTA?>dist/fontawesome/css/all.css" rel="stylesheet">
    <link href="<?=RUTA?>dist/fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?=RUTA?>dist/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?=RUTA?>dist/fontawesome/css/regular.css" rel="stylesheet">
    <link href="<?=RUTA?>dist/fontawesome/css/fontawesome.css" rel="stylesheet">
    
    <!-- SLIDER -->
    <link rel="stylesheet" href="<?=RUTA?>dist/css/my-slider.css"/>
    <script src="<?=RUTA?>dist/js/ism-2.2.min.js"></script>
    
    <?php
        include(RUTA_PROYECTO."vistas/includes/funciones.php");
        include(RUTA_PROYECTO."vistas/includes/funciones-js.php");
    ?>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="top-header-wrapper">
        <?php
            include(RUTA_PROYECTO."vistas/includes/top-header.php");
        ?>
    </div>
    <header id="header" class="animated">
        <?php
            include(RUTA_PROYECTO."vistas/includes/encabezado.php");
            include(RUTA_PROYECTO."vistas/includes/nav.php");
        ?>
    </header>
    <main class="contenedor" id="contenedor">
        <?php
            include(RUTA_PROYECTO."vistas/includes/navegacion.php");
            $ruta= new ControladorPlantilla();
            $ruta->ctrEnlacesPaginas();
        ?>
    </main>
    <div id="section-footer" class="section-footer">
        <?php
            include(RUTA_PROYECTO."vistas/includes/footer.php");
        ?>
    </div>
    <?php
        include(RUTA_PROYECTO."vistas/includes/menu-lateral.php");
        include(RUTA_PROYECTO."vistas/includes/carrito-lateral.php");
        include(RUTA_PROYECTO."vistas/includes/buscador-principal.php");
        include(RUTA_PROYECTO."vistas/includes/botones-flotantes.php");
    ?>

    <!--*****SCRIPT*****-->
    <script src="<?=RUTA?>dist/js/funciones.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>