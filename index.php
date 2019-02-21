<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Optica MG</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        </style>
        <link rel="icon" href="img/titulo.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/main.js"></script>

    </head>
    <body class="animate" data-spy="scroll" data-target="#scrollspy" data-offset="1">
 <!--BARRA DE NAVEGACIONCABEZA DE ZAPO-->  



 <?php
   ini_set('display_errors','off');
   ini_set('display_startup_erros', 'off');
   error_reporting(0);
    // Connection info. file
    include 'conn.php'; 
    
    // Connection variables
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // data sent from form login.html 
    $email = $_POST['email']; 
    $password = $_POST['password'];
    
    // Query sent to database
    $result = mysqli_query($conn, "SELECT Email, Password, Name FROM users WHERE Email = '$email'");
    
    // Variable $row hold the result of the query
    $row = mysqli_fetch_assoc($result);
    
    // Variable $hash hold the password hash on database
    $hash = $row['Password'];
    
    /* 
    password_Verify() function verify if the password entered by the user
    match the password hash on the database. If everything is ok the session
    is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
    */
    if (password_verify($_POST['password'], $hash)) {   
        
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $row['Name'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;                       
        
        
         

    } else {
                
    }   
?>

        <nav class="nav navbar-default navbar-fixed-top app-navbar">
            <div class="container-fluid app-navbar">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <spam class="icon-bar posicion"></spam>
                        <spam class="icon-bar posicion"></spam>
                        <spam class="icon-bar posicion"></spam>
                    </button>
                    <a href="#" class="navbar-brand">Optica MG</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right app-nav">
                        <li><a href="index.php" >Inicio</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#beneficios">Beneficios de Uso</a></li>
                                <li><a href="#caracteristicas">Caracteristicas</a></li>

                                <!-- <li><a href="servicios.html">Subcripciones</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="productos.html">Armazones y Gafas</a></li>
                                <li><a href="marcas.html">Marcas</a></li>
                            </ul>
                        </li>
                        <li><a href="nosotros.html" >Nosotros</a></li>
                        <li><a href="servicios.html">Servicios</a></li>

                        <li><a href="./carrito/productos.php"  style="width:auto;">Carrito de compras</a></li>
                       <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
                       
                        
                        <li> <?php echo "<div class='alert alert-success' role='alert'><strong>Bienvenido</strong> $row[Name]"; ?> </li>
                         <li> </li>

                        <div class="navbar-toggle"><?php if($row[Name]!=""){ ?></div>
                         <li><?php session_destroy(); ?><a href="index.php" >cerrar sesion</a></li>
                         <div><?php }?></div>

                         <div class="navbar-toggle"><?php if($row[Name]=="administrador"){ ?></div>
                         <li><a href="administrar.php" >ADMINISTRACION</a></li>
                         <div><?php }?></div>
                        
                    </ul>
                </div>
            </div>
        </nav>   
        <br>
        <br>   

<!--SLIDER-->
<div class="caja">
        <div id="carousel-1" class="carousel slide " action="check-login.php" data-ride="carousel">
                    <!--Indicadores-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                    <!--Contenedor de slide-->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="img/img1.jpg" alt=""  class="img-responsive">
                            <div class="carousel-caption">
                                <h3 id="titulo_principal">Tu Estilo</h3>
                            <!--    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio maiores ipsa</p> -->
                            </div>      
                        </div>

                        <div class="item">
                            <img src="img/img2.jpg" alt="" class="img-responsive">
                            <div class="carousel-caption">
                                <h3 id="titulo_principal">Nuevos Diseños</h3>
                            <!--    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio maiores ipsa</p> -->
                            </div>      
                        </div>

                        <div class="item">
                            <img src="img/img3.jpg" alt="" class="img-responsive">
                            <div class="carousel-caption">
                                <h3 id="titulo_principal">Atencion Inmediata</h3>
                                <!-- <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio maiores ipsa</p> -->
                            </div>      
                        </div>

                    </div>
                    <!--Controles-->
                    <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>

                    <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
        </div>
</div>

 <!--LOGIN--> 
<div id="id01" class="modal">
  
  <form  class="modal-content animate"  method="post">
    <div class="imgcontainer">
      
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/login.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="ctn-1" >
      <label for="uname"><b>Correo</b></label>
      <input type="text" placeholder="Ingrese su correo" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button class="bt" type="submit">Login</button>
        <a href="iniciar_sesion.html"> <button type="button" class="Registra">No tengo cuenta</button></a>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
     <span class="psw" style="margin-top: -10%">Ha olvidado la <a href="#">contraseña?</a></span>
       <br><br>
  </form>
        </div>

<!--CUERPO-->   
<div class="">
<br>    
        <section class="app-seccion2" id="beneficios">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <br>
                        <img src="img/fachada1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 tamaño">

                        <br>
                        <h2 class="app-titulo2">Explora la Genialidad</h2>
                        <p class="app-separador"></p>
                        <p class="app-justificar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sequi possimus tenetur ducimus, qui repellendus neque deleniti incidunt inventore nam, aut explicabo nobis minima voluptates vel consequuntur porro, optio eos.</p>

                        <div class="media app-media">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-cog app-glyphicon1"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Facil de Personalizar</h4>
                                <p class="app-justificar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quo earum tempore pariatur quam odit ipsa aspernatur optio maiores. Ipsam excepturi officiis facere eos natus odio obcaecati molestiae quasi sapiente!</p>
                            </div>
                        </div>

                        <div class="media app-media">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-shopping-cart app-glyphicon1"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Bonito de Comprar</h4>
                                <p class="app-justificar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quo earum tempore pariatur quam odit ipsa aspernatur optio maiores. Ipsam excepturi officiis facere eos natus odio obcaecati molestiae quasi sapiente!</p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div> 
        </section>

        <section class="app-seccion3" id="caracteristicas">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 tamaño">
                        <br>
                        <h2 class="app-titulo2">Explora la Genialidad</h2>
                        <p class="app-separador"></p>
                        <p class="app-justificar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sequi possimus tenetur ducimus, qui repellendus neque deleniti incidunt inventore nam, aut explicabo nobis minima voluptates vel consequuntur porro, optio eos.</p>

                        <div class="media app-media">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-cog app-glyphicon1"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Facil de Personalizar</h4>
                                <p class="app-justificar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quo earum tempore pariatur quam odit ipsa aspernatur optio maiores. Ipsam excepturi officiis facere eos natus odio obcaecati molestiae quasi sapiente!</p>
                            </div>
                        </div>

                        <div class="media app-media">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-shopping-cart app-glyphicon1"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Bonito de Comprar</h4>
                                <p class="app-justificar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quo earum tempore pariatur quam odit ipsa aspernatur optio maiores. Ipsam excepturi officiis facere eos natus odio obcaecati molestiae quasi sapiente!</p>
                            </div>
                        </div>                   
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <br>
                        <img src="img/fachada2.jpg" alt="" class="img-responsive">
                    </div>              
                </div>
            </div>
        </section>

        <section class="app-seccion2" >
            <div class="container">
                <div class="app-contenedor">
                    <h2 class="app titulo3">Craracteristicas del producto</h2>
                    <p class="app-separador2"></p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam excepturi, dicta ea asperiores aliquid placeat dolorem culpa porro eligendi, quia ab expedita eos molestias distinctio, fugiat accusamus veritatis fugit recusandae.</p>               
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <dic class="app-contenedor">
                            <p class="glyphicon glyphicon-phone glyphicon2 bordes"></p>
                            <h3>Responsive Web Desing</h3>
                            <p class="app-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem </p>
                        </dic>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <dic class="app-contenedor">
                            <p class="glyphicon glyphicon-pencil glyphicon2 bordes"></p>
                            <h3>Facil de Personalizar</h3>
                            <p class="app-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem</p>
                        </dic>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <dic class="app-contenedor">
                            <p class="glyphicon glyphicon-gift glyphicon2 bordes"></p>
                            <h3>Construido por Sebastian</h3>
                            <p class="app-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem </p>
                        </dic>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <dic class="app-contenedor">
                            <p class="glyphicon glyphicon-briefcase glyphicon2 bordes"></p>
                            <h3>Practicas Webs</h3>
                            <p class="app-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem </p>
                        </dic>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <dic class="app-contenedor">
                            <p class="glyphicon glyphicon-envelope glyphicon2 bordes"></p>
                            <h3>Cabezas de Sapos Express</h3>
                            <p class="app-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem</p>
                        </dic>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <dic class="app-contenedor">
                            <p class="glyphicon glyphicon-cloud glyphicon2 bordes"></p>
                            <h3>Nube</h3>
                            <p class="app-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem </p>
                        </dic>
                    </div>
                </div>

            </div>
        </section>

        
</div>

<!--FOOTER-->
<div class="">
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                      <div class="col-md-3 col-sm-3">
                             <br> <a href="#"><img src="./img/traje.png" class="img-responsive center-block"></a>
                     </div>
                    <div class="col-sm-2">
                        <h5>Get started</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>About us</h5>
                        <ul>
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Support</h5>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help desk</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <button type="button" class="btn ">Contact us</button>
                    </div>
                </div>
            </div>
                <div class="footer-copyright">
                    <p>© 2032 Copyright Text </p>
                </div>
        </footer>
</div>
<!--SCRIPT-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
