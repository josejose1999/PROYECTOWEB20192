<br><br>
<div class="container">
<h1 class="page-header">
    <?php echo $usua->id != null ? $usua->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Usuario">Usuario</a></li>
  <li class="active"><?php echo $usua->id != null ? $usua->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $usua->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $usua->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>username</label>
        <input type="text" name="username" value="<?php echo $usua->username; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>password</label>
        <input type="password" name="password" value="<?php echo $usua->password; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $usua->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $usua->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label>Tipo de Usuario</label>
        <select name="id_tipo" class="form-control">
            <option <?php echo $usua->id_tipo == 1 ? 'selected' : ''; ?> value="1">Usuario</option>
            
            <div class="navbar-toggle"><?php if(isset($_SESSION['aceptado'])){ ?></div>
            <option 
            <?php echo $usua->id_tipo == 2 ? 'selected' : ''; ?> value="2">Administrador
            </option>
            <div><?php }?></div>

        </select>

    </div>



    
    
    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input  type="date" name="FechaNacimiento" value="<?php echo $usua->FechaNacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    
    <div class="text-right">
      <button  class="btn btn-success">Guardar</button>
    </div>
</form>
<br><br>
<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>
</div>