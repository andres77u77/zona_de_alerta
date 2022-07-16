<?php 
include '../models/gestionar_usuarios_model.php';
session_start();

$id_empresa = $_SESSION['id_empresa'];
$rol = $_SESSION['rol'];

$tipo = $_POST['tipo'];

if($tipo == 'ActualizarNotTemp'){

  //Hacer update de notificacion temperatura

  $usuario = $_POST['usuario_temp'];

  $result = MainModelUsuarios::ActualizarGestNotTemp($id_empresa);

  echo $result;

}else{

    //Consultar usuarios registrados de la empresa

    $usuarios = MainModelUsuarios::ConsultarUsuarios($id_empresa);

    ?>
    <select class="form-control">
        <option value="">Seleccionar</option>

      <?php
        foreach ($usuarios as $key){

            ?>
            <option value="<?php echo $key['id_usuario']; ?>"><?php echo $key['nombre']; ?></option>
            <?php

        }

      ?>
    </select>

}

