<br>  <div class="container">
            <div class="row">
                <div class="col-xs-12">
<br><h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre: 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Cita">Citas</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cita" action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Fecha Tentativa</label>
        <input  type="date" name="FechaTentativa"  value="<?php echo $alm->FechaTentativa; ?>" class="form-control" placeholder="Ingrese Fecha" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Hora Cita</label>
         <input type="time" name="HoraCita" min="13:00" max="18:00" step="3600"
          value="<?php echo $alm->HoraCita; ?>" class="form-control" placeholder="Ingrese Fecha" data-validacion-tipo="requerido" />
    </div>

      <div class="form-group">
        <label>Nombre de la Optica</label>
        <input type="text" name="NombreOptica" value="<?php echo $alm->NombreOptica; ?>" class="form-control" placeholder="Ingrese el Nombre" data-validacion-tipo="requerido|min:5" />
    </div>
    
       <div class="form-group">
        <label>Nombre y Apellido</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese su Nombre y Apellido" data-validacion-tipo="requerido|min:5" />
    </div>
    

       <div class="form-group">
        <label>Celular</label>
        <input type="tel" name="Celular" value="<?php echo $alm->Celular; ?>" class="form-control" placeholder="Ingrese su Numero de Celular" data-validacion-tipo="requerido|min:10" />
    </div>

        <div class="form-group">
        <label>Telefono Convencional</label>
        <input type="text" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control" placeholder="Ingrese su Telefono Convencional" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $alm->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>

    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Agendar Cita</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cita").submit(function(){
            return $(this).validate();
        });
    })
</script>
      </div>
        </div>            
        </div>