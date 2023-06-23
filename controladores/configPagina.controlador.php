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
    }