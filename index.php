<?php
    require_once "controladores/plantilla.controlador.php";
    require_once "modelo/plantilla.modelo.php";

    require_once "controladores/configPagina.controlador.php";
    require_once "modelo/configPagina.modelo.php";
    
    require_once "controladores/comercial.controlador.php";
    require_once "modelo/comercial.modelo.php";

    $plantilla= new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();