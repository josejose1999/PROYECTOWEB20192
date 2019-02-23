<?php
  //require_once 'view/header.php';
  //require_once 'view/footer.php';
?>

<!--IMAGEN DE PORTADA--> 
<div class="caja">  
<div class="carousel"role="listbox">
              <img src="img/lentes.jpg" alt="" class="img-responsive">
              <div class="carousel-caption">
                <h3 class="hidden-xs hidden-sm hidden-md">Nuevos Diseños</h3>
                <p class="hidden-xs hidden-sm hidden-md"></p>
              </div>
</div>
</div>   
<!--LOGO DE LA PAGINA-->   
<h3 class="acomodar container-fluid"><img src="img/gafas.png" alt=""> Accesorios</h3>

<!--LISTAS DE NAVEGACION-->  
<div class="caja">         
<div>
          <ul class="nav nav-tabs hidden-xs hidden-sm">
            <li class="active"s><a href="#sol"data-toggle="tab">Lentes de sol<span class="badge pull-right">7</span></a></li>
            <li><a href="#lectura"data-toggle="tab">Lentes de Lectura<span class="badge pull-right">12</span></a></li>
            <li><a href="#contacto"data-toggle="tab" >Lentes de Contacto<span class="badge pull-right">9</span></a></li>
            <li><a href="#deportivos"data-toggle="tab" >Lentes Deportivos<span class="badge pull-right">5</span></a></li>
            
          </ul>

          <ul class="nav nav-tabs  hidden-md hidden-lg ">
            <li class="active"s><a href="#sol"data-toggle="tab"class="tamaño">Lentes de sol<span class="badge pull-right">7</span></a></li>
            <li><a href="#lectura"data-toggle="tab" class="tamaño">Lentes de Lectura<span class="badge pull-right">12</span></a></li>
            <li><a href="#contacto"data-toggle="tab" class="tamaño">Lentes de Contacto<span class="badge pull-right">9</span></a></li>
            <li><a href="#deportivos"data-toggle="tab" class="tamaño">Lentes Deportivos<span class="badge pull-right">5</span></a></li>
     
          </ul>
</div>
</div>

<!--TABLA CONTENEDORA-->
<h3>Order Details</h3>
      
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
   


<!--MENU DE IMAGENES-->




<section class="app-seccion4">
      <div class="container">
        <div class="app-contenedor">
          <h2 class="app-titulo3">OFERTAS</h2>
          <p class="app-separador2"></p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 ajustate ">
          
                        <div class="work_item  centrar">

              <div class="work_thumb ">
                <img src="img/img5.jpg" alt="project1" class="img-responsive">
              </div>

              <div class="work_hover_mask  ">
                <div class="mask-container text-center" style="width:100%;">
                  <h4>Armazon</h4>
                  <!-- <div class="divider-border"></div> -->
                  <!-- <p>Contamos con una gran variedad de armazones</p> -->
                  <a class="btn btn-default" href="#pb6">Ir al catalogo</a>
                </div>
              </div>  

            </div>
          </div>

        <div class="col-xs-12 col-sm-4 col-md-4 ajustate">
          
                        <div class="work_item  centrar">

              <div class="work_thumb  ">
                <img src="img/img4.jpg" alt="project1" class="img-responsive">
              </div>

              <div class="work_hover_mask  ">
                <div class="mask-container text-center" style="width:100%;">
                  <h4>Lunas</h4>
                  <!-- <div class="divider-border"></div> -->
                  <!-- <p>Contamos con una gran variedad de armazones</p> -->
                  <a class="btn btn-default" href="#pb6">Ir al catalogo</a>
                </div>
              </div>  

            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4 ajustate ">
          
                        <div class="work_item  centrar">

              <div class="work_thumb  ">
                <img src="img/img6.jpg" alt="project1" class="img-responsive">
              </div>

              <div class="work_hover_mask  ">
                <div class="mask-container text-center" style="width:100%;">
                  <h4>Lentes de Contacto</h4>
                  <!-- <div class="divider-border"></div> -->
                  <!-- <p>Contamos con una gran variedad de armazones</p> -->
                  <a class="btn btn-default" href="#pb6">Ir al catalogo</a>
                </div>
              </div>  

            </div>
          </div>

        </div>
      </div>
</section>
<br>
<br>

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



