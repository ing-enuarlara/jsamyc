<?php
    class ControladorConfigPagina{

        static public function ctrConfigPagina($idInsti){
                $datosConfigPagina=ModeloConfigPagina::mdlConfiguracionPagina($idInsti);
                
                return $datosConfigPagina;
                exit();
        }

        static public function ctrColorPagina($idInsti){
                $configuracionColor=ModeloConfigPagina::mdlColorPagina($idInsti);
                
                return $configuracionColor;
                exit();
        }

        static public function ctrListarLegales($idInsti){
                $consultaLegales=ModeloConfigPagina::mdlListarLegales($idInsti);
                
                return $consultaLegales;
                exit();
        }

        static public function ctrDatosLegales($idLegal){
                $datosLegal=ModeloConfigPagina::mdlDatosLegales($idLegal);
                
                return $datosLegal;
                exit();
        }
    }