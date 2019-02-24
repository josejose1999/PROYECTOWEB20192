<h1 class="page-header">Facturas</h1>

<div class="well well-sm text-right">
    <input type="text" name="parametro" class="form-control" placeholder="Ingrese el numero de factura"/>
    <a class="btn btn-primary" href="?c=factura&a=Buscar">Buscar</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Cliente</th>
            <th style="width:180px;">Numero de factura</th>
            <th style="width:180px;">Fecha</th>
            <th style="width:180px;">Total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->num_factura; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->total(); ?></td>
            <td>
                <a href="?c=factura&a=Crud&id=<?php echo $r->id; ?>">Ver</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 