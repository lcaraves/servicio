<?php 
require_once '../../php/conexion.php';
$consultaClientes = "SELECT * FROM clientes ORDER BY idCliente DESC";
$resultadosCli = mysqli_query($conexion, $consultaClientes) or die("PROBLEMA CON LA CONSULTA DE CLIENTES.");
 ?>
<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Localidad</th>
        <th>Provincia</th>
        <th>Acción</th>
      </tr>
    </thead>
      <?php while ($row = mysqli_fetch_array($resultadosCli)){ ?>
      <tbody class="buscar">
        <tr id="ocultarCeldaEliminada" class="<?php echo $row['idCliente'] ?> mostrarCliente">
          <td id="nombre_<?php echo $row['idCliente'] ?>"> <?php echo $row['nombre'] ?> </td>
          <td id="apellido_<?php echo $row['idCliente'] ?>"> <?php echo $row['apellido'] ?> </td>
          <td id="direccion_<?php echo $row['idCliente'] ?>"> <?php echo $row['direccion'] ?> </td>
          <td id="telefono_<?php echo $row['idCliente'] ?>"> <?php echo $row['telefono'] ?> </td>
          <td id="email_<?php echo $row['idCliente'] ?>"> <?php echo $row['email'] ?> </td>
          <td id="localidad_<?php echo $row['idCliente'] ?>"> <?php echo $row['localidad'] ?> </td>
          <td id="provincia_<?php echo $row['idCliente'] ?>"> <?php echo $row['provincia'] ?> </td>
          <td>
            <div class="form-inline">

              <button type="button" class="btn btn-default eliminarCliente" id='<?php echo $row['idCliente']?>' data-toggle="modal" data-target="#modalEliminarCliente" title="Eliminar Cliente">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button>              
              <button type="button" class="btn btn-primary modificarCliente" id="<?php echo $row['idCliente'] ?>" data-toggle="modal" data-target="#modalModificar" title="Modificar Cliente">  
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              </button>
            </div>
          </td>   
        </tr>
      </tbody>  
      <?php 
      } 
      mysqli_close($conexion);
      ?>
  </table>
</div>