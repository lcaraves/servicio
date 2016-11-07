<form method="POST" action="../../php/pedidocliente/modificarPedidoCliente.php" name="formulario" class="form-horizontal" id="form-modificar-pedido">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modificarPedido">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Modificación de Pedido de Productos del Cliente</strong></h4>
        </div>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div class="form-horizontal">
              <div id="msj_alta_pedido_cliente"></div>
              <div class="row form-group">
                <p class="col-sm-8"><small><strong>*</strong>Campos Obligatorios</small></p>
              </div>
              <div id="ajax_msj_update"></div>
              <input type="hidden" name="idPedidoCliente" id="id_modif">
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">* Producto</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="producto_pedido" placeholder="Escriba el Producto" id="producto_modif">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">* Fecha Pedido</label>
                <div class="col-sm-6">
                  <input type="input" class="form-control calendarioPedidoCliente" name="fecha_pedido" placeholder="dd/mm/aaaa" id="fechapedido_modif"> 
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">* Nro Serie</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nroserie_pedido" placeholder="Escriba Número de Serie" id="nroserie_modif">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Precio</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="precio_pedido" placeholder="Escriba el precio" id="precio_modif">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Confirmación</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="confirmacion_modif" name="confirmacion_pedido">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Seña</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="senia_pedido" placeholder="Escriba la Señaa entregar" id="senia_modif">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-3">Fecha Confirmación</label>
                <div class="col-sm-6">
                  <input type="input" class="form-control calendarioConfirmacionCliente" name="fecha_confirmacion_pedido" placeholder="dd/mm/aaaa" id="fecha_confirmacion_modif">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-3">Observación</label>
                <div class="col-sm-6">
                  <textarea name="observacion_pedido" cols="30" rows="5" class="form-control" placeholder="Escriba su Observación" id="observacion_modif"></textarea>
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