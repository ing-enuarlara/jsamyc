<?php
    require_once "conexion.php";

    class ModeloConfigPagina{

        static public function mdlConfiguracionPagina($idInsti){
            $consultaConfigPagina=Conexion::conexionBdPaginaWeb()->query("SELECT * FROM configuracion WHERE conf_id_empresa=$idInsti");
            $datosConfigPagina = mysqli_fetch_array($consultaConfigPagina, MYSQLI_BOTH);

            return $datosConfigPagina;
            exit();
        }

        static public function mdlColorPagina($idInsti){
            $consultaConfigColor=Conexion::conexionBdPaginaWeb()->query("SELECT * FROM general_color_store WHERE gcs_id_empresa=$idInsti");
            $configuracionColor = mysqli_fetch_array($consultaConfigColor, MYSQLI_BOTH);

            return $configuracionColor;
            exit();
        }
    }