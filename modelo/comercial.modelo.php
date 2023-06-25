<?php
    require_once "conexion.php";

    class ModeloComercial{

        static public function mdlCategorias($idInsti){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=$idInsti");

            return $consultaCategorias;
            exit();
        }

        static public function mdlCategoriasDestacado($idInsti){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=$idInsti AND ccat_menu=1");

            return $consultaCategorias;
            exit();
        }

        static public function mdlCategoriasFooter($idInsti){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=$idInsti AND ccat_footer=1");

            return $consultaCategorias;
            exit();
        }

        static public function mdlSubCategorias($idCategoria){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_categoria=$idCategoria");

            return $consultaSubCategorias;
            exit();
        }

        static public function mdlSubCategoriasExclusivas($idInsti){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_id_empresa=$idInsti AND cmar_menu=1");

            return $consultaSubCategorias;
            exit();
        }

        static public function mdlSubCategoriasMasJoyas($idInsti){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_id_empresa=$idInsti AND cmar_mas_joyas=1");

            return $consultaSubCategorias;
            exit();
        }
    }