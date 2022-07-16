<?php
include '../models/gestion_temperatura.php';

$gestion = $_POST['tipo'];

if($gestion == 'CargarNotificaciones'){
	$data = CargarNotificaciones();
	
	?>

	<div class="table-responsive text-nowrap">
	  <table class="table">
	    <thead>
	      <tr style="text-align: center;">
	        <th>#</th>
	        <th>Temperatura</th>
	        <th>Humedad</th>
	        <th>Notificado</th>
	        <th>Fecha - Hora</th>
	      </tr>
	    </thead>
	    <tbody class="table-border-bottom-0">

        <?php
        	$cont = 0;
			foreach ($data as $key){
			$cont++;
				?>
				<tr style="text-align: center;">
					<td><?php echo $cont; ?></td>
					<td><?php echo $key['valor_temp'].'C'; ?></td>
					<td><?php echo $key['valor_hume'].'C'; ?></td>
					<td><?php echo $key['estado_not']; ?></td>
					<td><?php echo $key['fecha_registro']; ?></td>
				</tr>
				<?php
			}

		?>      
	    </tbody>
	  </table>
	</div>

<?php
}
	
function InsertDatos($temperatura,$humedad){

	$insert = MainModelTemperatura::InsertarTemp($temperatura,$humedad);

	return $insert;

}

function CargarNotificaciones(){

	$datos = MainModelTemperatura::ConsultarNotificaciones();

	return $datos;

}

?>