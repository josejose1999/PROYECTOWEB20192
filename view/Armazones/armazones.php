<!--IMAGEN DE PORTADA--> 
<div class="caja">  
<div class="carousel"role="listbox">
              <img src="img/lentes.jpg" alt="" class="img-responsive">
              <div class="carousel-caption">
                <h3 class="hidden-xs hidden-sm hidden-md">Carrito de compra</h3>
                <p class="hidden-xs hidden-sm hidden-md"></p>
              </div>
</div>


<div style="clear:both"></div>
      <br />
      <h3>Order Details</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
          ?>
          <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td>$ <?php echo $values["item_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">$ <?php echo number_format($total, 2); ?></td>
            <td></td>
          </tr>
          <?php
          }
          ?>
            
        </table>
      </div>
<button class="btn btn-primary href="javascript:void(0)" data-toggle="modal" data-target="#id33" on"/>Comprar</button>

<!--comprar-->

<div id="id33" class="modal fade" role="dialog" class="modal">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Comprar producto</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
  
      <div class="col-md-12 ">
       <br> <img src="./img/tarjetas_credito.png" class="img-responsive center-block">
      </div>

      <form method="post" action="">
          <div class="col-md-12 " style="">


        <div class="form-group" >
          <label for="text" class="texto">Nombre <font size="" color="#cc0000">*</font></label> 
          <input type="text" class="form-control" name="nombre_reg" id="nombre_reg" placeholder="Introduzca sus nombres" value="" required>
        </div>

        <div class="form-group" >
          <label for="text" class="texto">Apellido <font size="" color="#cc0000">*</font></label> 
          <input type="text" class="form-control" name="apellido_reg" id="apellido_reg" placeholder="Introduzca sus apellidos" value="" required>
        </div>
        
        <div class="form-group" >
          <label for="text" class="texto">Número de tarjeta: <font size="" color="#cc0000">*</font></label> 
          <input type="text" class="form-control" name="n_tar_reg" id="n_tar_reg" placeholder="Numero de tarjeta" value="" required>
        </div>

        <div class="form-group" >
          <label for="text" class="texto">Fecha de vencimiento <font size="" color="#cc0000">*</font></label> 
          <input type="text" class="form-control" name="venc_reg" id="venc_reg" placeholder="Fecha de vencimiento" value="" required>
        </div>

        <div class="form-group" >
          <label for="text" class="texto">Código de seguridad <font size="" color="#cc0000">*</font></label> 
          <input type="text" class="form-control" name="cod_reg" id="cod_reg" placeholder="Código de seguridad (CVV)" value="" required>
        </div>


            
          <input type="hidden" name="interes_dato" value="1">
          <input type="hidden" name="idp" value="36">
            <button type="submit" class="btn btn-yellow center-block col-md-12"  style="background:blue;color:#FFFFFF;border-radius: 35px !important;border:none !important;margin-top:-5px;font-size:16px;padding-left:30px;padding-right:30px;">Realizar compra</button>
          </div>
  
        </form>


    
      <div class="modal-footer">
        <button type="button" class="btn btn-yellow" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>


 <div id="id32" class="modal fade"  tabindex="-1" role="dialog" class="modal">
  <div class="modal-dialog modal-lg" role="document"> 

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ">INFORMACIÓN DEL PRODUCTO</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-md-12 ">
       <br> <img src="./img/lente1.jpg" class="img-responsive center-block">
      </div>
<div>
      <form method="post" action="">
          <div class="col-md-12 " >

        <div class="form-group" >
         <h3 for="text" class="texto">ESPECIFICACIONES TECNICAS:</h3><br>
              <div class="productos">
                <h2>Detalles</h2>
                
                <div><label>Marca:</label><span>Oakley</span></div>
                <div><label>Marco:</label><span>Completo</span></div>
                <div><label>Material:</label><span>Inyectado</span></div>
                <div><label>Color:</label><span>Negro</span></div>
                <div><label>Género:</label><span>Unisex</span></div>
              </div>
                <h2>Medidas</h2>
                       <div><img src="./img/img21.png" class="ola_icon_size" /> <label>Ancho del lente</label></div><div><p>53 mm</p></div>
                     <div> <img src="./img/img22.png" class="ola_icon_size" /> <label>Ancho del puente</label></div><div><p>18 mm</p></div>
                  <div> <img src="./img/img23.png" class="ola_icon_size" /> <label>Longitud varilla</label></div><div><p>139 mm</p></div>
        </div>
        </form>
</div>
 <div class="modal-footer">
        <button  class="btgusta"  type="button" class="btn btn-yellow" data-dismiss="modal">Cerrar</button>
      </div></div></div></div></div></div>



