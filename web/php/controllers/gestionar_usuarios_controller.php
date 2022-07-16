<?php 
include '../models/gestionar_usuarios_model.php';
session_start();

$id_empresa = $_SESSION['id_empresa'];
$rol = $_SESSION['rol'];

//Consultar usuarios registrados de la empresa

$usuarios = MainModelUsuarios::ConsultarUsuarios($id_empresa);

?>

<div class="table-responsive text-nowrap">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">

        <?php
        $cont = 0;
        foreach ($usuarios as $key){
        $cont++;
          ?>

          <tr>
              <td><?php echo $cont; ?></td>
              <td><?php echo $key['nombre']; ?></td>
              <td><?php echo $key['email']; ?></td>
              <td><?php echo $key['telefono']; ?></td>
              <td>
                <?php 
                  if($key['estado']){
                    ?><span class="badge bg-label-primary me-1">Activo</span><?php
                  }else{
                    ?><span class="badge bg-label-danger me-1">Inactivo</span><?php
                  }
                ?>
                
              </td>
              <td>
                <?php 
                  if($rol){
                    ?><i class="bx bx-pencil me-1"></i> Editar<?php
                  }else{
                  }
                ?>
                
              </td>
            </tr>

          <?php

        }

        ?>      
    </tbody>
  </table>
</div>