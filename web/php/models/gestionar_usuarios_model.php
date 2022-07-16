<?php
require_once "conexion.php";

class MainModelUsuarios extends Conexion{

    public static function ConsultarUsuarios($id_empresa){

    	try{

	        $sql = "SELECT * FROM tbl_usuarios WHERE id_empresa = '$id_empresa'";

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