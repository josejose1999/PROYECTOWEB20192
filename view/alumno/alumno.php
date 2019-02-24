  <div class="container">
            <div class="row">
                <div class="col-xs-12">
<h1 class="page-header">Productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Alumno&a=Crud">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:80px;">Imagen</th>
            <th style="width:180px;">Nombre del Producto</th>
            <th >Precio</th>
            <th style="width:60px;">Editar</th>
            <th style="width:60px;">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td>
                <?php if($r->__GET('Foto') != ''): ?>
                    <img src="img/<?php echo $r->__GET('Foto'); ?>" style="width:100%;" />
                <?php endif; ?> 
            </td>
            <td><?php echo $r->__GET('Nombre'); ?></td>
            <td><?php echo $r->__GET('Precio'); ?></td>
            <td>
                <a onclick="EditarUsuario(<?php echo $r->__GET('id'); ?>);">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>        
    </tbody>
</table>

<!-- Bootstrap 3 Modal Popup -->
<div id="modal-alumno" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editando un producto</h4>
      </div>
      <div class="modal-body">
        <form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data"></form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


            </div>
        </div>            
        </div>
