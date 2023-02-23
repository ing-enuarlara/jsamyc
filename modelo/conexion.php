<?php
    class Conexion{
        static public function conectar(){

            $server= 'localhost';
            $user= 'root';
            $pwd= 'zefe07EL';
            $bd= 'curso-php';

            $con= new PDO("mysql:host=$server;dbname=$bd",$user,$pwd);
            $con->exec("set names utf8");
            
            return $con;
        }        
    }
    