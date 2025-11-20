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

        /*----------  Funcion limpiar cadenas  ----------*/
        public function limpiarCadena($cadena){

            $palabras=["<script>","</script>","<script src","<script type=","SELECT * FROM","SELECT "," SELECT ","DELETE FROM","INSERT INTO","DROP TABLE","DROP DATABASE","TRUNCATE TABLE","SHOW TABLES","SHOW DATABASES","<?php","?>","--","^","==",";","::","'or","1=1","'or 1=1"];

            $cadena=trim($cadena);
            $cadena=stripslashes($cadena);

            foreach($palabras as $palabra){
                $cadena=str_ireplace($palabra, "", $cadena);
            }

            $cadena=trim($cadena);
            $cadena=stripslashes($cadena);

            return $cadena;
        }


        /*---------- Funcion verificar datos (expresion regular) ----------*/
        protected function verificarDatos($filtro,$cadena){
            if(preg_match("/^".$filtro."$/",$cadena)){
                return false;
            }else{
                return true;
            }
        }
    }