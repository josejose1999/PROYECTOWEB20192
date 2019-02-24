<?php
error_reporting(0);
require_once 'model/database.php';
include_once 'controller/user.php';
include_once 'controller/user_session.php';
$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    //include_once 'view/login/home.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
   
    $user = new User();
    if($user->userExists($userForm, $passForm,2)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        $_SESSION['aceptado']="ok";
        //include_once 'view/login/home.php';
    }
    else if($user->userExists($userForm, $passForm,1)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        //include_once 'view/login/home.php';
    }
    else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        //include_once 'vistas/login.php';
        echo'<script type="text/javascript">
        alert("DATOS INCORRECTO");
        window.location.href="index.php";
        </script>';
        }
}else{
    //echo "login";
    //include_once 'vistas/login.php';
}

$controller = 'inicio';
$controller2 = 'usuario';
$controller3= 'producto';
$controller4= 'citas';


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
           if(isset($_SESSION['aceptado']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexAdministrar();  
    }
    else{
        echo"<a href='index.php'><h3>NO TIENES ACCESO A ESTA SECCION</h3></a>";
    }
}



if(!isset($_REQUEST['c']) and isset($_SESSION['aceptado']))
{

    require_once "controller/$controller2.controller.php";
    $controller2 = ucwords($controller2) . 'Controller';
    $controller2 = new $controller2;
    $controller2->Index();    
}

else{
    if(isset($_SESSION['aceptado']))
{
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
else{
    echo"<a href='index.php'><h3>NO TIENES ACCESO A ESTA SECCION</h3></a>";
}
}



// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    // Controlador por defecto
    require_once 'controller/$controller3.controller.php';
    $controller3 = ucwords($controller3) . 'Controller';
    $controller3 = new $controller3;
    $controller3->Index();    
} else {
    
    // Obtenemos el controlador que queremos cargar
    require_once 'controller/' . strtolower($_REQUEST['c']) . '.controller.php';
    $controller3 = $_REQUEST['c'] . 'Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    

    
    // Llama la accion
    call_user_func( array( $controller3, $accion ) );
}



 if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller4.controller.php";
    $controller4 = ucwords($controller4) . 'Controller';
    $controller4 = new $controller4;
    $controller4->Index();


}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller4 = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller4.controller.php";
    $controller4 = ucwords($controller4) . 'Controller';
    $controller4 = new $controller4;
    
    // Llama la accion
    call_user_func( array( $controller4, $accion ) );
}


}