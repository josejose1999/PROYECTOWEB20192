<?php
require_once 'model/database.php';

$controller = 'inicio';
$controller2 = 'usuario';


// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}else 
{
    if ($_REQUEST['c']=='Nosotros') {
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexNosotros();  
    } else if ($_REQUEST['c']=='Servicios') {
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexServicios();  
    }else if ($_REQUEST['c']=='Carrito') {
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexCarrito();  
    }else if ($_REQUEST['c']=='Armazones') {
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexArmazones();  
    }
    else if ($_REQUEST['c']=='Marcas') {
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexMarcas();  
    }
    else if ($_REQUEST['c']=='Administrar') {
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexAdministrar();  
    }else if(($_REQUEST['c'])=='Usuario')

if(!isset($_REQUEST['c']))
{

    require_once "controller/$controller2.controller.php";
    $controller2 = ucwords($controller2) . 'Controller';
    $controller2 = new $controller2;
    $controller2->Index();    
}

else{
    // Obtenemos el controlador que queremos cargar
    $controller2 = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller2.controller.php";
    $controller2 = ucwords($controller2) . 'Controller';
    $controller2 = new $controller2;
    
    // Llama la accion
    call_user_func( array( $controller2, $accion ) );
}
}

