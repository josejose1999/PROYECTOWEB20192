<br><br>
<div class="container">
<h1 class="page-header">Productos</h1>
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Producto&a=Crud">Nuevo Producto</a>
</div>
<div>
        
<table id="tabla2" >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Imagen; ?></td>
            <td><?php echo $r->Precio; ?></td>
            <td>
                <a href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
</div>
