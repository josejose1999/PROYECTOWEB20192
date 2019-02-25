<div class="container relleno">
    <div class="row">
        <div class="col-xs-12">
            <div class="container">
                <h1 class="page-header">Facturas</h1>
                <div class="well well-sm text-right relleno"></div>
                <table id="tablaFactura">
                    <thead>
                        <tr>
                            <th style="width:180px;">Cliente</th>
                            <th style="width:180px;">Numero de factura</th>
                            <th style="width:180px;">Fecha</th>
                            <th style="width:180px;">Total</th>
                            <th style="width:60px;">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->Nombre.' '.$r->Apellido; ?></td>
                            <td><?php echo $r->num_factura; ?></td>
                            <td><?php echo $r->fecha; ?></td>
                            <td><?php echo $this->detalle->TotalFactura($r->num_factura)->p; ?></td>
                            <td>
                                <a href="?c=factura&a=Crud&id=<?php echo $r->num_factura; ?>">Ver</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>