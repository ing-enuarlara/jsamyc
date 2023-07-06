<?php
    class ControladorComercial{

        static public function ctrCategorias(){
                $consultaCategorias=ModeloComercial::mdlCategorias();
                
                return $consultaCategorias;
                exit();
        }

        static public function ctrDatosCategorias($idCategoria){
                $datosCategorias=ModeloComercial::mdlDatosCategorias($idCategoria);
                
                return $datosCategorias;
                exit();
        }

        static public function ctrCategoriasDestacado(){
                $consultaCategorias=ModeloComercial::mdlCategoriasDestacado();
                
                return $consultaCategorias;
                exit();
        }

        static public function ctrCategoriasFooter(){
                $consultaCategorias=ModeloComercial::mdlCategoriasFooter();
                
                return $consultaCategorias;
                exit();
        }

        static public function ctrSubCategorias($idCategoria){
                $consultaSubCategorias=ModeloComercial::mdlSubCategorias($idCategoria);
                
                return $consultaSubCategorias;
                exit();
        }

        static public function ctrDatosSubCategorias($idSubCategoria){
                $datosSubCategorias=ModeloComercial::mdlDatosSubCategorias($idSubCategoria);
                
                return $datosSubCategorias;
                exit();
        }

        static public function ctrSubCategoriasExclusivas(){
                $consultaSubCategorias=ModeloComercial::mdlSubCategoriasExclusivas();
                
                return $consultaSubCategorias;
                exit();
        }

        static public function ctrSubCategoriasMasJoyas(){
                $consultaSubCategorias=ModeloComercial::mdlSubCategoriasMasJoyas();
                
                return $consultaSubCategorias;
                exit();
        }

        static public function ctrProductos(string $filtro='',string $limit='',string $filtroOrden='ORDER BY cprod_id'){
                $consultaProductos=ModeloComercial::mdlProductos($filtro,$limit,$filtroOrden);
                
                return $consultaProductos;
                exit();
        }

        static public function ctrFotosProductos($idProd,$filtroFotos='',$limit=''){
                $consultaFotosProductos=ModeloComercial::mdlFotosProductos($idProd,$filtroFotos,$limit);
                
                return $consultaFotosProductos;
                exit();
        }

        static public function ctrTipos(string $filtro=''){
                $consultaTipos=ModeloComercial::mdlTipos($filtro);
                
                return $consultaTipos;
                exit();
        }
    }