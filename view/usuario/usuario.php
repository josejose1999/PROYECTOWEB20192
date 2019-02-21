<div class="container">
<h1 class="page-header">Usuarios</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Usuario&a=Crud">Nuevo Usuario</a>
</div>

<table id="tabla1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Sexo</th>
            <th>Nacimiento</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Apellido; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></td>
            <td><?php echo $r->FechaNacimiento; ?></td>
            <td>
                <a href="?c=Usuario&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>