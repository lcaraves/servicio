<!-- Ventana Modal Modificar Orden de Servicio-->
<form method="POST" action="../../php/clientes/" name="formulario" class="form-horizontal" id="form-modificacion">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modalModificarOrden">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Modificar Cliente</strong></h4>
        </div>
        <p>FALTA TERMINAR</p>
        <div class="modal-body">
          <div class="form-horizontal">
              <div class="row form-group">
                <p class="col-sm-8"> <strong>*</strong> Campos Obligatorios</p>
              </div>
              <input type="hidden" name="idCliente" id="id_update">
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">*Articulo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nombre_update" name="articulo">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Estado del Equipo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="apellido_update" name="estadoEquipo">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Codigo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="direccion_update" name="codigo">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Serial</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="telefono_update" name="serial">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Accesorios</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="email_update" name="accesorios">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-3">Falla del Cliente</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="localidad_update" name="fallaCliente">
                </div>
              </div>
          </div>
        </div>            
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">
            <span class="glyphicon glyphicon-remove" aria-hidden="true">
          </button>
          <button type="submit" class="btn btn-success" aria-label="Left Align">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
          </button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->.
  </div><!-- /.modal -->
</form>