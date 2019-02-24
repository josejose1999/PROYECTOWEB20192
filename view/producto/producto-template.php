<input type="hidden" name="id" value="{{:id}}" />

<div class="form-group">
    <label>Nombre del producto</label>
    <input type="text" name="name" value="{{:name}}" class="form-control" placeholder="Ingrese el nombre"  />
</div>


<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label>Foto</label>
            <input type="hidden" name="image" value="{{:image}}" />
            <input type="file" name="image" placeholder="Ingrese una imagen" />
        </div>     
    </div>
    <div class="col-xs-6">
        {{if Foto != ''}}
            <div class="img-thumbnail text-center">
                <img src="uploads/{{:image}}" style="width:50%;" />
            </div>
        {{/if}}            
    </div>
</div>

<div class="form-group">
    <label>Ingrese el precio</label>
    <input type="number" name="price" value="{{:price}}" class="form-control" placeholder="Ingrese el precio" />
</div>





<hr />

<div class="text-right">
    <button class="btn btn-success">Guardar</button>
</div>