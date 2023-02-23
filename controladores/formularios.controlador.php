<?php
    class ControladorFormularios{

        static public function ctrRegistro(){
            $respuesta='';
            if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['pwd'])){
                if($_POST['name']!=""&&$_POST['email']!=""&&$_POST['pwd']!=""){
                    $tabla="registros";
                    $datos= array('reg_nombre' => $_POST['name'], 'reg_correo' => $_POST['email'], 'reg_pwd' => $_POST['pwd']);

                    $respuesta=ModeloFormularios::mdlRegistro($tabla, $datos);
                }else{
                    $respuesta=0;
                }
            }
            return $respuesta;
        }

        static public function ctrListar($item, $valor){
                $tabla="registros";
                
                $respuesta=ModeloFormularios::mdlListar($tabla, $item, $valor);
                
                return $respuesta;
        }

        public function ctrIngreso(){
            if(isset($_POST['email'])&&isset($_POST['pwd'])){
                if($_POST['email']!=""&&$_POST['pwd']!=""){
                    $tabla="registros";
                    $item= 'reg_correo';
                    $valor= $_POST['email'];

                    $respuesta=ModeloFormularios::mdlListar($tabla, $item, $valor);

                    if($respuesta['reg_correo']==$_POST['email']&&$respuesta['reg_pwd']==$_POST['pwd']){

                        $_SESSION['validar']="ok";

                        echo    "<script>
                                    window.location='inicio';
                                </script>";
                    }else{
                        echo '<div class="alert alert-danger">El usuario no existe, Verifique los datos de acceso.</div>';
                    }
                }else{
                    echo '<div class="alert alert-danger">Por favor debe llenar todos los campos.</div>';
                }
            }
        }

        static public function ctrActualizar(){
            $respuesta='';
            if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['pwd'])){
                if($_POST['name']!=""&&$_POST['email']!=""&&$_POST['pwd']!=""){
                    $tabla="registros";
                    $datos= array('reg_id' => $_POST['id'], 'reg_nombre' => $_POST['name'], 'reg_correo' => $_POST['email'], 'reg_pwd' => $_POST['pwd']);

                    $respuesta=ModeloFormularios::mdlActualizar($tabla, $datos);
                }
            }
            return $respuesta;
        }

        public function ctrEliminar(){
            if(isset($_POST['id'])){
                $tabla="registros";
                $item= 'reg_id';
                $valor= $_POST['id'];

                $respuesta=ModeloFormularios::mdlEliminar($tabla, $item, $valor);

                if($respuesta==1){
                    echo    "<script>
                                window.location='inicio';
                            </script>";
                }
            }
        }

    }
    