<?php
    require_once "controladores/plantilla.controlador.php";
    
    require_once "modelo/plantilla.modelo.php";

    $plantilla= new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();