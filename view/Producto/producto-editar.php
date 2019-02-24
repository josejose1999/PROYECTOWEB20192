<h1 class="page-header">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('name') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">`Producto</a></li>
  <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('name') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label>Nombre del producto</label>
        <input type="text" name="name" value="<?php echo $alm->__GET('name'); ?>" class="form-control" placeholder="Ingrese el nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
   
<div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Foto</label>
                <input type="hidden" name="image" value="<?php echo $alm->__GET('image'); ?>" />
                <input type="file" name="image" placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('image') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="uploads/<?php echo $alm->__GET('image'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>

    
    <div class="form-group">
        <label>Precio</label>
        <input type="number" name="price" value="<?php echo $alm->__GET('price'); ?>" class="form-control" placeholder="Ingrese el precio"  />
    </div>
    
  
    
    
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>