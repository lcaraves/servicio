<!-- Ventana Modal ELIMINAR Cliente-->
<form method="POST" action="../../php/clientes/eliminarCliente.php" name="formulario" id="form-eliminar-cliente">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modalEliminarCliente">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Eliminar Cliente</strong></h4>
        </div>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <input type="hidden" name="idCliente" id="id_eliminar">
          <p>Esta seguro que desea Eliminar el Cliente:</p>
        </div>            
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">Cerrar</button>
          <button type="submit" class="btn btn-primary" aria-label="Left Align">
            <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
          </button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</form>