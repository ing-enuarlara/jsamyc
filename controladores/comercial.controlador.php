<?php
    class ControladorComercial{

        static public function ctrCategorias($idInsti){
                $consultaCategorias=ModeloComercial::mdlCategorias($idInsti);
                
                return $consultaCategorias;
                exit();
        }

        static public function ctrCategoriasDestacado($idInsti){
                $consultaCategorias=ModeloComercial::mdlCategoriasDestacado($idInsti);
                
                return $consultaCategorias;
                exit();
        }

        static public function ctrCategoriasFooter($idInsti){
                $consultaCategorias=ModeloComercial::mdlCategoriasFooter($idInsti);
                
                return $consultaCategorias;
                exit();
        }

        static public function ctrSubCategorias($idCategoria){
                $consultaSubCategorias=ModeloComercial::mdlSubCategorias($idCategoria);
                
                return $consultaSubCategorias;
                exit();
        }

        static public function ctrSubCategoriasExclusivas($idInsti){
                $consultaSubCategorias=ModeloComercial::mdlSubCategoriasExclusivas($idInsti);
                
                return $consultaSubCategorias;
                exit();
        }

        static public function ctrSubCategoriasMasJoyas($idInsti){
                $consultaSubCategorias=ModeloComercial::mdlSubCategoriasMasJoyas($idInsti);
                
                return $consultaSubCategorias;
                exit();
        }
    }