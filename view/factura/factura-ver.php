<h1 class="page-header">
    <?php echo $alm->num_factura != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=factura">Facturas</a></li>
  <li class="active"><?php echo $alm->num_factura != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=profesor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Cliente</label>
        <input type="text" name="Nombre" value="<?php echo $alm->cliente->nombre; ?>" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label>Numero de factura</label>
        <input type="text" name="num_factura" value="<?php echo $alm->num_factura; ?>" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label>Detalle</label>
        <tr>
            <th style="width:180px;">Nombre Producto</th>
            <th style="width:180px;">Precio Unitario</th>
            <th style="width:180px;">Cantidad</th>
            <th style="width:180px;">Total</th>
        </tr>
        <?php foreach($alm->listDetalle as $r): ?>
        <tr>
            <td><?php echo $r->producto->nombre; ?></td>
            <td><?php echo $r->producto->precio; ?></td>
            <td><?php echo $r->cantidad; ?></td>
            <td><?php echo $r->total(); ?></td>
        </tr>
    <?php endforeach; ?>
    </div>
    
    <div class="form-group">
        <label>Total</label>
        <input readonly type="text" name="total" value="<?php echo $alm->total(); ?>" class="form-control"/>
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