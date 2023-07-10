<?php
    require_once "conexion.php";

    class ModeloComercial{

        static public function mdlCategorias(){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=2");

            return $consultaCategorias;
            exit();
        }

        static public function mdlDatosCategorias($idCategoria){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id=$idCategoria");
            $datosCategorias = mysqli_fetch_array($consultaCategorias, MYSQLI_BOTH);

            return $datosCategorias;
            exit();
        }

        static public function mdlCategoriasDestacado($limit){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=2 AND ccat_menu=1 $limit");

            return $consultaCategorias;
            exit();
        }

        static public function mdlCategoriasFooter(){
            $consultaCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=2 AND ccat_footer=1");

            return $consultaCategorias;
            exit();
        }

        static public function mdlSubCategorias($idCategoria){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_categoria=$idCategoria");

            return $consultaSubCategorias;
            exit();
        }

        static public function mdlDatosSubCategorias($idSubCategoria){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_id=$idSubCategoria");
            $datosSubCategorias = mysqli_fetch_array($consultaSubCategorias, MYSQLI_BOTH);

            return $datosSubCategorias;
            exit();
        }

        static public function mdlSubCategoriasExclusivas(){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_id_empresa=2 AND cmar_menu=1");

            return $consultaSubCategorias;
            exit();
        }

        static public function mdlSubCategoriasMasJoyas(){
            $consultaSubCategorias=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_marcas WHERE cmar_id_empresa=2 AND cmar_mas_joyas=1");

            return $consultaSubCategorias;
            exit();
        }

        static public function mdlProductos($filtro,$limit,$filtroOrden){
            $consultaProductos=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_productos WHERE cprod_id_empresa=2 AND cprod_estado=1 $filtro $filtroOrden $limit");

            return $consultaProductos;
            exit();
        }

        static public function mdlDatosProductos($idProducto){
            $consultaProductos=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_productos WHERE cprod_id=$idProducto");
            $datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH);

            return $datosProductos;
            exit();
        }

        static public function mdlFotosProductos($idProd,$filtroFotos,$limit,$orden){
            $consultaFotosProductos=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_productos_fotos WHERE cpf_id_producto=$idProd $filtroFotos $orden $limit");

            return $consultaFotosProductos;
            exit();
        }

        static public function mdlTipos($filtro){
            $consultaTipos=Conexion::conexionBdComercial()->query("SELECT * FROM comercial_tipo_productos WHERE ctipo_id_empresa=2 AND ctipo_estado=1 $filtro");

            return $consultaTipos;
            exit();
        }
    }