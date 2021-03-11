<?php
    include_once "./config/config.php";

    class Conexion {
        private $host;
        private $user;
        private $password;
        private $bd;
        public function __construct()
        {
            $this->host = HOST;
            $this->user = USER;
            $this->password = PASSWORD;
            $this->bd = BD;
        }

        public function connect () {
           try{
            $conexion = "mysql:host=".$this->host.";dbname=".$this->bd.";charset=utf8";
            $atributos = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $objetPDO = new PDO($conexion, $this->user, $this->password,$atributos);
            return $objetPDO;
           }catch(PDOExeption $e){
                die("ERROR : ".$e->getMessage());
           }
        }
     }
         $objeConexion = new Conexion();
         $bd = $objeConexion->connect();
//          $sql = "INSERT INTO logi(id_Usuario, Usuario, email, contraseña) VALUES(?,?,?,?)";          
//          $result = $bd->prepare($sql);
//          $result->execute(['48','marco','marck.nova@gmail.com','hola1234']); 
        
         $sql = "SELECT * FROM logi ORDER BY id_Usuario ASC";
         $result1 = $bd->query($sql);
         foreach($result1 as $data){
            echo $data['id_Usuario'];
            echo $data['Usuario'];
            echo $data['email'];
            echo $data['contraseña'];
         }
?>