<input type="hidden" name="id" value="{{:Producto.id}}" />

<div class="form-group">
    <label>Nombre del producto</label>
    <input type="text" name="Nombre" value="{{:Producto.name}}" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
</div>



<div class="form-group">
    <label>Ingrese el precio</label>
    <input type="text" name="Correo" value="{{:Producto.price}}" class="form-control" placeholder="Ingrese el precio" data-validacion-tipo="requerido|email" />
</div>


<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label>Foto</label>
            <input type="hidden" name="image" value="{{:Producto.image}}" />
            <input type="file" name="image" placeholder="Ingrese una imagen" />
        </div>     
    </div>
    <div class="col-xs-6">
        {{if Producto.image != ''}}
            <div class="img-thumbnail text-center">
                <img src="uploads/{{:Producto.image}}" style="width:50%;" />
            </div>
        {{/if}}            
    </div>
</div>

<hr />

<div class="text-right">
    <button class="btn btn-success">Guardar</button>
</div>