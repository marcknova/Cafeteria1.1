<?php

    class conexion {
        private $host= "localhost";
        private $user ="root";
        private $password="";
        private $bd="example";
        private $conexion;
        public function __construct()
        {
            $connectionString = "mysql:host=".$this->host.";dbname=".$this->bd.";charset=utf8";
            try{
                $this->conexion = new PDO($connectionString, $this->user, $this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               }catch(PDOExeption $e){
                   $this->conexion='ERROR AL CONECTAR ALA BASE DE DATOS';
                    die("ERROR : ".$e->getMessage());
               }
        }
        public function connect () {
           return $this->conexion;
        }
        
     }
    
?>