<?php
    require_once "conexion.php";

    class ModeloConfigPagina{

        static public function mdlConfiguracionPagina(){
            $consultaConfigPagina=Conexion::conexionBdPaginaWeb()->query("SELECT * FROM configuracion WHERE conf_id_empresa=2");
            $datosConfigPagina = mysqli_fetch_array($consultaConfigPagina, MYSQLI_BOTH);

            return $datosConfigPagina;
            exit();
        }

        static public function mdlColorPagina(){
            $consultaConfigColor=Conexion::conexionBdPaginaWeb()->query("SELECT * FROM general_color_store WHERE gcs_id_empresa=2");
            $configuracionColor = mysqli_fetch_array($consultaConfigColor, MYSQLI_BOTH);

            return $configuracionColor;
            exit();
        }

        static public function mdlListarLegales(){
            $consultaLegales=Conexion::conexionBdPaginaWeb()->query("SELECT * FROM pagina_legales WHERE pal_id_empresa=2");

            return $consultaLegales;
            exit();
        }

        static public function mdlDatosLegales($idLegal){
            $consultaLegales=Conexion::conexionBdPaginaWeb()->query("SELECT * FROM pagina_legales WHERE pal_id=$idLegal");
            $datosLegal = mysqli_fetch_array($consultaLegales, MYSQLI_BOTH);

            return $datosLegal;
            exit();
        }
    }