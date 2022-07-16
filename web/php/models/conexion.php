<?php

    class Conexion {

        private $mbd = '';

        public static function conectar(){

            try {
                
                $mbd= new PDO("mysql:host=localhost;dbname=zona_de_alerta","root","");
              
            } catch (PDOException $e) {
                
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }

            return $mbd; 
        }
    } 

?>
        
    