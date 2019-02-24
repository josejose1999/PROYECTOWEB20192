<br><br>
<div class="container">
<h1 class="page-header">
    <?php echo $pro->id != null ? $pro->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Productos</a></li>
  <li class="active"><?php echo $pro->id != null ? $pro->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $pro->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $pro->Nombre; ?>" class="form-control" placeholder="Ingrese el nombre del producto" data-validacion-tipo="requerido|min:3" required/>
    </div>
    
    <div class="form-group">
        <label>Imagen del producto</label>
        <input type="file" name="Imagen" value="<?php echo $pro->Imagen; ?>" class="form-control" placeholder="Ingrese la imagen" data-validacion-tipo="requerido|min:10" accept="image/*" />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="number" name="Precio" value="<?php echo $pro->Precio; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|precio" />
    </div>
        
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
<br><br>
</div>