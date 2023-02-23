<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejemplo MVC</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://kit.fontawesome.com/e84fa1cf78.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h3 class="text-center py-3">LOGO</h3>
        </div>

        <div class="container-fluid bg-light">
            <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">
                    <?php if(isset($_GET['pagina'])){ ?>
                        <?php if($_GET['pagina']=='ingreso'){ ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="ingreso">Ingreso</a>
                            </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="ingreso">Ingreso</a>
                            </li>
                        <?php }?>
                        <?php if($_GET['pagina']=='inicio'){ ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="inicio">Inicio</a>
                            </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="inicio">Inicio</a>
                            </li>
                        <?php }?>
                        <?php if($_GET['pagina']=='registro'){ ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="registro">Registro</a>
                            </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="registro">Registro</a>
                            </li>
                        <?php }?>
                    <?php }else{ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="ingreso">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro">Registro</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="salir">Salir</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fluid py-5">
            <div class="container">
                <?php 
                    $ruta= new ControladorPlantilla();
                    $ruta->ctrEnlacesPaginas();
                ?>
            </div>
        </div>
    </body>
</html>