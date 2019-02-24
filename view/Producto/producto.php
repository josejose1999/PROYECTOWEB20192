<h1 class="page-header">Productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Producto&a=Crud">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>

            <th>Nombre del Producto</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            
            <td><?php echo $r->__GET('name'); ?></td>
            <td>
                <?php if($r->__GET('image') != ''): ?>
                    <img src="uploads/<?php echo $r->__GET('image'); ?>" />
                <?php endif; ?> 
            </td>
           
            <td>
                <a onclick="EditarUsuario(<?php echo $r->__GET('id'); ?>);">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
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
        <form id="frm-alumno" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data"></form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Template -->
<script id="tmpl-usuario" type="text/x-jsrender">
    <?php require_once 'producto-template.php'; ?>
</script>

<script>
    function EditarUsuario(id)
    {
        $.post('?c=Producto&a=Obtener', {
            id: id
        }, function(data){
            var template = $.templates("#tmpl-usuario");
            $("#frm-alumno").html(template.render(data));
            $("#modal-alumno").modal();
        }, 'json')
    }
</script>

