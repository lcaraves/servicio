<!-- Ventana Modal AGREGAR MONITOR -->
<form method="POST" action="../../php/altaMonitor.php" id="form-guardar-AltaMonitor">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="agregarMonitor">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Agregar Marca de Monitor</strong></h4>
        </div>
        
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div id="ajax_register_Monitor"></div>
          <div class="form-horizontal">
              <div class="row form-group">
                <p class="col-sm-8"><small><strong>*</strong>Campos Obligatorios</small></p>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-xs-4">*Nombre Monitor</label>
                <div class="col-xs-6">
                  <input type="text" class="form-control" placeholder="LG" name="nombre">
                </div>
              </div>
          </div>
        </div>
        <br>            
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