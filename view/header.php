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

<!--BUFON VALE VRGA-->  

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
