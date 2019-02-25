<div class="container relleno">
    <h1 class="page-header">
        Factura
    </h1>

    <ol class="breadcrumb">
      <li><a href="?c=factura">Facturas</a></li>
      <li class="active">Vista Factura</li>
    </ol>

    <form id="frm-alumno" action="?c=profesor&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
        <?php echo $alm->num_factura; ?>
        <legend>Cliente</legend>
        <fieldset class="form-group">            
            <div class="row">
                <div class="col-sm-4">
                    <label>Nombre</label>
                    <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" readonly=”readonly”/>   
                </div>
                <div class="col-sm-4">
                    <label>Apellido</label>
                    <input type="text" name="Apellido" value="<?php echo $alm->Apellido; ?>" class="form-control" readonly=”readonly”/>  
                </div>    
                <div class="col-sm-4">
                    <label>Correo</label>
                    <input type="text" name="Correo" value="<?php echo $alm->Correo; ?>" class="form-control" readonly=”readonly”/>  
                </div>                              
            </div>
        </fieldset>
        
        <div class="form-group">
            <label>Numero de factura</label>
            <input type="text" name="num_factura" value="<?php echo $alm->num_factura; ?>" class="form-control" readonly=”readonly”/>
        </div>
        
        <div class="form-group">
            <label>Fecha</label>
            <input type="text" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control" readonly=”readonly”/>
        </div>
        
        <label>Detalle</label>
        <table id="tablaDetalle">
            <thead>
                <tr>
                    <th style="width:50px;">Nº</th>
                    <th style="width:180px;">Nombre Producto</th>
                    <th style="width:180px;">Precio Unitario</th>
                    <th style="width:180px;">Cantidad</th>
                    <th style="width:180px;">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->detalle->Listar($alm->num_factura) as $r): ?>
                <tr>
                    <td><?php echo $r->num_detalle; ?></td>
                    <td><?php echo $r->name; ?></td>
                    <td><?php echo $r->price; ?></td>
                    <td><?php echo $r->cantidad; ?></td>
                    <td><?php echo $r->precio; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>        
        </table>
        
        <div class="form-group">
            <label>Total</label>
            <input readonly type="text" name="total" value="<?php echo $this->detalle->TotalFactura($r->num_factura)->p ?>" class="form-control" readonly=”readonly”/>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>