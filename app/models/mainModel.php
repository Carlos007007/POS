<?php

    namespace app\models;
    use \PDO;

    if(file_exists(__DIR__."/../../config/server.php")){
        require_once __DIR__."/../../config/server.php";
    }

    class mainModel{

        private $server=DB_SERVER;
        private $db=DB_NAME;
        private $user=DB_USER;
        private $pass=DB_PASS;

        /*----------  Funcion conectar a BD  ----------*/
        protected function conectar(){
            $conexion = new PDO("mysql:host=".$this->$server.";dbname=".$this->$db, $this->$user, $this->$pass);
            $conexion->exec("SET CHARACTER SET utf8");

            return $conexion;
        }

        /*----------  Funcion ejecutar consultas  ----------*/
        protected function ejecutarConsulta($consulta){
            $sql=$this->conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }
    }