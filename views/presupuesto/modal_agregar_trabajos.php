<!-- Ventana Modal alta de TRABAJOS-->
<form method="POST" action="../../php/presupuesto/altaTrabajos.php" name="" class="form-horizontal" id="form-alta-presupuesto">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altaPresupuesto">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Presupuesto de Servicio Técnico</strong></h4>
        </div>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div class="form-horizontal">
            <div class="row form-group">
              <p class="col-sm-8"><small><strong>*</strong> Campos Obligatorios</small></p>
            </div>
            <input type="hidden" name="idProducto" id="id_agregarPresupuesto">
            <div id="msj_ajax_trabajo"></div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">*Trabajo Realizado</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Instalación de Sistema Operativo" name="trabajoRealizado">
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">Reemplazo y/o agrego de Producto</label>
              <div class="col-sm-4">
                <select name="cambioProducto" id="" class="form-control">
                  <option value="">Productos</option>
                  <option value="Fuente">Fuente</option>
                  <option value="Disco Rigido">Disco Rigido</option>
                  <option value="Placa de Red">Placa de Red</option>
                  <option value="Placa Wifi">Placa Wifi</option>
                  <option value="Grabadora">Grabadora</option>
                  <option value="Placa Madre">Placa Madre</option>
                </select>
              </div>
              <div class="col-sm-4">
                <input type="text" placeholder="Otros productos" class="form-control" name="otrosProductos">
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">Ingresa por Garantia</label>
              <div class="col-sm-8">
                <select name="garantia" id="" class="form-control">
                  <option>Seleccionar Garantia</option>
                  <option value="Si">SI</option>
                  <option value="No">NO</option>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">*Presupuesto</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Consulta $200" name="presupuesto" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-4">Observaciones</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Observación detallada del trabajo realizado" name="observaciones">
              </div>
            </div>
          </div>            
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
            <button type="submit" class="btn btn-success" aria-label="Left Align">
              <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
            </button>
          </div>
        </div>  
    </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</form>