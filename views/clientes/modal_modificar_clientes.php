<!-- Ventana Modal Modificar Cliente-->
<form method="POST" action="../../php/clientes/modificarcliente.php" name="formulario" class="form-horizontal" id="form-modificacion">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modalModificar">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Modificar Cliente</strong></h4>
        </div>
        <div class="modal-body">
          <div class="form-horizontal">
              <div class="row form-group">
                <p class="col-sm-8"> <strong>*</strong> Campos Obligatorios</p>
              </div>
              <input type="hidden" name="idCliente" id="id_update">
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nombre_update" name="nombre" required>
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Apellido</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="apellido_update" name="apellido" required>
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">Direccion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="direccion_update" name="direccion">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Telefono</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="telefono_update" name="telefono" maxlength="10" required>
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">Email</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="email_update" name="email">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-2">Localidad</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="localidad_update" name="localidad">
                </div>
              </div>
              <div class="row form-group">
                  <label for="" class="control-label col-sm-2">Provincia</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="provincia_update" name="provincia">
                  </div>
              </div>
          </div>
        </div>            
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">Close</button>
          <button type="submit" class="btn btn-primary" aria-label="Left Align">
            <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
          </button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->.
  </div><!-- /.modal -->
</form>