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
    <link rel="stylesheet" type="text/css" href="<?=RUTA?>dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=RUTA?>dist/css/responsive.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/e84fa1cf78.js" crossorigin="anonymous"></script>
    
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
    ?>
    <div id="wa-chat-btn-root" class="wa-chat-btn-fixed wa-splmn-chat-btn-offset wa-chat-btn-base-cta wa-chat-btn-container-size-big wa-chat-btn-theme-cta-new-inverted">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24"
            stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
            <path
                d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
        </svg>
        <div class="wa-chat-button-cta-text">Escríbenos por Whatsapp</div>
    </div>
    <div id="searchPopup" class="">
        <a class="closeSearch" id="closeSearch" href="#">
            <i class="fa-solid fa-xmark"></i>
        </a>
        <h4>Buscar nuestro sitio</h4>
        <form action="#" method="get" class="pr search-header search" role="search">
            <div class="input__group">
                <input class="input-group__field search__input" type="search" name="q" placeholder="Buscar" value="" autocomplete="off">
                <span class="input-group__btn">
                    <button class="btnSearch btnCard search__submit" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                        <span class="icon__fallback-text">Buscar</span>
                    </button>
                </span>
            </div>
            <ul class="search-results" style="display:none;"></ul>
        </form>
    </div>

    <!--*****SCRIPT*****-->
    <script src="<?=RUTA?>dist/js/funciones.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>