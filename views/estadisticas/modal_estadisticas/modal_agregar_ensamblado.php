<form method="post" action="../../php/estadisticas/altaEnsamblado.php" name="formulario" class="form-horizontal" id="form-alta-ensamblado">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altaEnsamblado">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel"><strong>Alta de Ensamblado</strong></h4>
        </div>
        <!-- Ventana MODAL -->
        <div class="modal-body">
          <div class="form-horizontal">
            <div class="form-inline">
              <div class="form-group">
                <p class="col-md-8"><small><strong>*</strong> Campos Obligatorios</small></p>
              </div>
              <div class="form-group" >
                <div class="checkbox col-md-offset-10">
                      <label>
                        <input type="checkbox" id="optionsRadios1" value="Bateria" autocomplete="off" class="nuevo_articulo">
                        Nuevo
                      </label>
                    </div>
              </div>
            </div>
              
              <div id="ajax_mjs_ensamblado"></div>
              <div class="row form-group" id="articulo_text">
                <label for="" class="control-label col-sm-2">*Articulo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="articulo_ensamblado_text" placeholder="Gigabyte H110M-A - 1151 Micro I7">
                </div>
              </div>
              <div class="row form-group" id="articulo_select">
                <?php 
                  require '../../php/conexion.php';
                  $conArticulo = "SELECT DISTINCT  e.articulo_ensamblado FROM ensamblado e ";
                  $resulArticulo =  mysqli_query($conexion, $conArticulo) or die("PROBLEMA CON LA CONSULTA DE LISTAR ARTICULOS DE ENSAMBLADO.");

                 ?>
                <label for="" class="control-label col-sm-2">*Articulo</label>
                <div class="col-sm-8">
                  <select name="articulo_ensamblado_select" id="" class="form-control">
                    <?php while ($row = mysqli_fetch_array($resulArticulo)){ ?>
                    <option value="<?php echo $row['articulo_ensamblado'] ?>"> <?php echo $row['articulo_ensamblado'] ?> </option>
                     <?php 
                      } 
                      ?>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Cantidad</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="cantidad_ensamblado">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Fecha</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fecha_ensamblado" value="<?php echo date("m/d/Y");?>" id="calendario">
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