<!-- Ventana Modal Modificar Orden de Servicio-->
<form method="POST" action="../../php/ordenservicio/modificarOrdenServicio.php" name="formulario" class="form-horizontal" id="form-modificar-orden">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modalModificarOrden">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Modificar Orden Servicio</strong></h4>
        </div>
        <div class="modal-body">
          <div class="form-horizontal">
              <div id="ajax_msj_success"></div>
              <div class="row form-group">
                <p class="col-sm-8"> <strong>*</strong> Campos Obligatorios</p>
              </div>
              <input type="hidden" name="idProducto" id="id_update">
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Estado del Equipo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="estadoEquipo_update" name="estadoEquipo">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Codigo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="codigo_update" name="codigo">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Serial</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="serial_update" name="serial">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Accesorios</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="accesorios_update" name="accesorios">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-3">*Falla del Cliente</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="fallaEquipo_update" name="fallaCliente">
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