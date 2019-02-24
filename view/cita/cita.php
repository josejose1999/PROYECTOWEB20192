<h1 class="page-header">Citas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Cita&a=Crud">Nueva cita</a>
</div>

<table id="gg" class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Fecha Tentativa</th>
            <th>Hora de la Cita</th>
            <th>Nombre de la Optica</th>
            <th>Nombre y Apellido</th>
            <th>Celular</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Correo</th>
            <th style="width:60px;">Editar</th>
            <th style="width:60px;">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->FechaTentativa; ?></td>
            <td><?php echo $r->HoraCita; ?></td>
            <td><?php echo $r->NombreOptica; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Celular; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td>
                <a href="?c=Cita&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Cita&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
