<div class="row">
    <div class="col-md-12">
        <section class="panel">                        
            <div class="panel-body">

              <?php if( !empty ( $jugos->id) ): ?>

                <div class="form-group">
                  <label for="nombre" class="negrita">Nombre:</label>                          
                  <div>
                    <input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre" value="<?php echo e($jugos->nombre); ?>">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="precio" class="negrita">Precio:</label>                          
                  <div>
                    <input class="form-control" placeholder="4.50" required="required" name="precio" type="text" id="precio" value="<?php echo e($jugos->precio); ?>">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="stock" class="negrita">Stock:</label>                          
                  <div>
                    <input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock" value="<?php echo e($jugos->stock); ?>">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="img" class="negrita">Selecciona una imagen:</label>                         
                  <div>
                  <input name="img" type="file" id="img">
                  <br>
                  <br>
                  <?php if( !empty ( $jugos->img) ): ?>

                    <span>Imagen Actual: </span>
                    <br>
                    <img src="../../../uploads/<?php echo e($jugos->img); ?>" width="200" class="img-fluid">

                  <?php else: ?>

                    Aún no se ha cargado una imagen para este producto

                  <?php endif; ?>                
                  </div>

                </div>

              <?php else: ?>

                <div class="form-group">
                  <label for="nombre" class="negrita">Nombre:</label>                          
                  <div>
                    <input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="precio" class="negrita">Precio:</label>                          
                  <div>
                    <input class="form-control" placeholder="4.50" required="required" name="precio" type="text" id="precio">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="stock" class="negrita">Stock:</label>                          
                  <div>
                    <input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock">                              
                  </div>
                </div>

                <div class="form-group">
                  <label for="img" class="negrita">Selecciona una imagen:</label>
                  <div>
                    <input name="img" type="file" id="img">               
                  </div>
                </div>

              <?php endif; ?>

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="<?php echo e(route('admin/jugos')); ?>" class="btn btn-warning">Cancelar</a>

                <br>
                <br>
              
            </div>
        </section>
    </div>
</div><?php /**PATH D:\xampp\htdocs\tutoriales\miaplicacioncrud\resources\views/admin/jugos/frm/prt.blade.php ENDPATH**/ ?>