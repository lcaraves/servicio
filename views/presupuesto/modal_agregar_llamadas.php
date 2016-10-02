<!-- Ventana Modal LLAMADAS A LOS CLIENTES -->
<form method="POST" action="../../php/presupuesto/altaLlamada.php" id="form-alta-llamada">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altallamada">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Avisos de Llamadas</strong></h4>
        </div>
        <br>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div id="ajax_register_Llamada"></div>
          <input type="hidden" name="idProducto" id="id_agregarLlamada">
          <div class="form-horizontal">
            <div class="row form-group">
              <p class="col-sm-8"><small> <strong>*</strong> Campos Obligatorios</small></p>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">*Llamadas</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="fecha_hora" value="<?php $fecha2=time()-18000; echo date("Y-m-d_H:i:s",$fecha2); ?>">
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">Observaciones</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Observaciones" name="observaciones" autocomplete="off">
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">Avisado</label>
              <div class="col-sm-6">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="notificado" value="notificado" autocomplete="off">
                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> El cliente esta Notificado.
                  </label>
                </div>
              </div>
            </div>
          </div>            
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">
              <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span>
            </button>
            <button type="submit" class="btn btn-primary" aria-label="Left Align">
              <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
            </button>
          </div>
        </div>  
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</form>