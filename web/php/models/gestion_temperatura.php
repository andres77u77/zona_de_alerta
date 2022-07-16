<?php
require_once "conexion.php";

class MainModelTemperatura extends Conexion{

    public static function InsertarTemp($temperatura,$humedad){

    	try{

	        $sql = "INSERT INTO control_temp_humedad (id_empresa,valor_temp,valor_hume,estado_not,fecha_registro) VALUES (1,$temperatura,$humedad,1,NOW())";

			$query = Conexion::conectar()->prepare($sql);
			$query->execute(); 
			return 1;

		} catch (PDOException $e) {
		    
		    return "¡Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
    }
 	
    public static function ConsultarNotificaciones(){

    	try{

	        $sql = "SELECT * FROM control_temp_humedad WHERE id_empresa = '1' order by fecha_registro DESC";

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