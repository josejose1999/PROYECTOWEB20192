<input type="hidden" name="id" value="{{:id}}" />

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="Nombre" value="{{:Nombre}}" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
</div>

<div class="form-group">
    <label>Precio</label>
    <input type="number" name="Precio" value="{{:Precio}}" class="form-control" placeholder="Ingrese el precio" data-validacion-tipo="requerido|min:10" />
</div>

<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label>Foto</label>
            <input type="hidden" name="Foto" value="{{:Foto}}" />
            <input type="file" name="Foto" placeholder="Ingrese una imagen" />
        </div>     
    </div>
    <div class="col-xs-6">
        {{if Foto != ''}}
            <div class="img-thumbnail text-center">
                <img src="img/{{:Foto}}" style="width:50%;" />
            </div>
        {{/if}}            
    </div>
</div>

<hr />

<div class="text-right">
    <button class="btn btn-success">Guardar</button>
</div>