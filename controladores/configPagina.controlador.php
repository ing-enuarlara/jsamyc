<?php
    class ControladorConfigPagina{

        static public function ctrConfigPagina(){
                $datosConfigPagina=ModeloConfigPagina::mdlConfiguracionPagina();
                
                return $datosConfigPagina;
                exit();
        }

        static public function ctrColorPagina(){
                $configuracionColor=ModeloConfigPagina::mdlColorPagina();
                
                return $configuracionColor;
                exit();
        }

        static public function ctrListarLegales(){
                $consultaLegales=ModeloConfigPagina::mdlListarLegales();
                
                return $consultaLegales;
                exit();
        }

        static public function ctrDatosLegales($idLegal){
                $datosLegal=ModeloConfigPagina::mdlDatosLegales($idLegal);
                
                return $datosLegal;
                exit();
        }
    }