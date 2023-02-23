<?php
    require_once "conexion.php";

    class ModeloFormularios{

        static public function mdlRegistro($tabla, $datos){
            $stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(reg_nombre, reg_correo, reg_pwd, reg_fecha) VALUES (:reg_nombre, :reg_correo, :reg_pwd, now())");

            $stmt->bindParam(":reg_nombre", $datos['reg_nombre'], PDO::PARAM_STR);
            $stmt->bindParam(":reg_correo", $datos['reg_correo'], PDO::PARAM_STR);
            $stmt->bindParam(":reg_pwd", $datos['reg_pwd'], PDO::PARAM_STR);

            if($stmt->execute()){
                return 1;
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->close();
            $stmt=null;
        }

        static public function mdlListar($tabla, $item, $valor){
            if($item==null && $valor==null){
                $stmt=Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(reg_fecha, '%d/%m/%Y') AS reg_fecha FROM $tabla");
                $stmt->execute();

                return $stmt->fetchAll();
            }else{
                $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item= :$item");

                $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
                $stmt->execute();

                return $stmt->fetch();
            }

            $stmt->close();
            $stmt=null;

        }

        static public function mdlActualizar($tabla, $datos){
            $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET reg_nombre=:reg_nombre, reg_correo=:reg_correo, reg_pwd=:reg_pwd WHERE reg_id=:reg_id");

            $stmt->bindParam(":reg_id", $datos['reg_id'], PDO::PARAM_INT);
            $stmt->bindParam(":reg_nombre", $datos['reg_nombre'], PDO::PARAM_STR);
            $stmt->bindParam(":reg_correo", $datos['reg_correo'], PDO::PARAM_STR);
            $stmt->bindParam(":reg_pwd", $datos['reg_pwd'], PDO::PARAM_STR);

            if($stmt->execute()){
                return 1;
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->close();
            $stmt=null;
        }

        static public function mdlEliminar($tabla, $item, $valor){

            $stmt=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $item= :$item");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();

            if($stmt->execute()){
                return 1;
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->close();
            $stmt=null;

        }

    }