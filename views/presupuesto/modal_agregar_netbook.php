<!-- Ventana Modal AGREGAR NETBOOK -->
<form method="POST" action="../../php/presupuesto/altaNetbook.php" id="form-guardar-AltaNetbook">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="agregarNetbook">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Agregar Marca de Netbook</strong></h4>
        </div>
        
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div id="ajax_register_Net"></div>
          <div class="form-horizontal">
              <div class="row form-group">
                <p class="col-sm-8"><small><strong>*</strong>Campos Obligatorios</small></p>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-xs-4">*Nombre Netbook</label>
                <div class="col-xs-6">
                  <input type="text" class="form-control" placeholder="Samsung" name="nombre">
                </div>
              </div>
          </div>
        </div>
        <br>            
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <button type="submit" class="btn btn-success" aria-label="Left Align">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
          </button>
        </div>
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->.
  </div><!-- /.modal -->
</form>