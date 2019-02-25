<br>  <div class="container">
            <div class="row">
                <div class="col-xs-12">
<h1 class="page-header">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">Alumnos</a></li>
  <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label>Nombre del producto</label>
        <input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    
    <div class="form-group">
        <label>Precio</label>
        <input type="number" name="Precio" value="<?php echo $alm->__GET('Precio'); ?>" class="form-control" placeholder="Ingrese el precio"  />
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Foto</label>
                <!--<input type="hidden" name="Foto" value="<?php echo $alm->__GET('Foto'); ?>" />-->
                <input type="file" name="Foto" placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('Foto') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="img/<?php echo $alm->__GET('Foto'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

            </div>
        </div>            
        </div>
