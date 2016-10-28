<form method="POST" action="../../php/pedidocliente/altapedidocliente.php" name="formulario" class="form-horizontal" id="form-alta-pedido-cliente">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altaPedido">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Alta de Pedido de Productos del Cliente</strong></h4>
        </div>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div class="form-horizontal">
              <div id="msj_alta_pedido_cliente"></div>
              <div class="row form-group">
                <p class="col-sm-8"><small><strong>*</strong>Campos Obligatorios</small></p>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">* Producto</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="producto_pedido" placeholder="Escriba el Producto">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">* Fecha Pedido</label>
                <div class="col-sm-6">
                  <input type="input" class="form-control calendarioPedidoCliente" name="fecha_pedido" placeholder="dd/mm/aaaa"> 
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">* Nro Serie</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nroserie_pedido" placeholder="Escriba Número de Serie">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-3">Precio</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="precio_pedido" placeholder="Escriba el precio">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-3">Fecha Confirmación</label>
                <div class="col-sm-6">
                  <input type="input" class="form-control calendarioConfirmacionCliente" name="fecha_confirmacion_pedido" placeholder="dd/mm/aaaa">
                </div>
              </div>
               <div class="row form-group">
                <label for="" class="control-label col-sm-3">Observación</label>
                <div class="col-sm-6">
                  <textarea name="observacion_pedido" id="" cols="30" rows="5" class="form-control" placeholder="Escriba su Observación"></textarea>
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