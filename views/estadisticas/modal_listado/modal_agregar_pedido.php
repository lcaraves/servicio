<form method="POST" action="../../php/estadisticas/altapedido.php" name="formulario" class="form-horizontal" id="form-alta-pedido">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altaPedido">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Alta de Pedido del Servicio Tecnico a Ventas</strong></h4>
        </div>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div class="form-horizontal">
              <div id="msj_alta_pedido"></div>
              <div class="row form-group">
                <p class="col-sm-8"><small><strong>*</strong>Campos Obligatorios</small></p>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">*Artículo</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="articulo_pedido" required>
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">*Fecha Pedido</label>
                <div class="col-sm-6">
                  <input type="date" class="form-control" name="fecha_pedido" value="<?php $fecha2=time()-18000; echo date("Y-m-d_H:i:s",$fecha2); ?>" required>
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Nro Presupuesto</label>
                <div class="col-sm-6">
                  <input type="date" class="form-control" name="nropresupuesto_pedido">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Estado</label>
                <div class="col-sm-6">
                  <select name="estado_pedido" id="" class="form-control">
                      <option value=""></option>
                      <option value="Se vendio">Se vendio</option>
                      <option value="En Servicio Tecnico">En Servicio Tecnico</option>
                      <option value="">Se Devolvio</option>
                    </select>  
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