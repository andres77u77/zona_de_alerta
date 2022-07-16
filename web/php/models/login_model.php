<?php
require_once "conexion.php";

class MainModelLogin extends Conexion{

    public static function ValidarUsuario($email){

    	try{

	        $sql = "SELECT * FROM tbl_usuarios WHERE email = '$email'";

			$query = Conexion::conectar()->prepare($sql);
			$query->execute(); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 

			if($query->rowCount()>0){ 
				$salida = $results;
			}else{
				$salida = array();
			}

			return $salida;

		} catch (PDOException $e) {
		    
		    return "¡Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
    }
   
}

?>