<div class="row">
    <div class="col-xs-8">
        <dl class="dl-horizontal">
          <dt>Nombre</dt>
          <dd>{{:Nname }}</dd>
          <dt>Precio</dt>
          <dd>{{:price }}</dd>
          


        </dl>   
    </div>
    <div class="col-xs-4">
        {{if image != ''}}
            <div class="img-thumbnail text-center">
                <img src="uploads/{{:image}}" style="width:50%;" />
            </div>
        {{/if}} 
    </div>
</div>
