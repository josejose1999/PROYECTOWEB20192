<?php
require_once 'model/database.php';

$controller = 'alumno';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    

		//HolaLise
		//Hola
    //HolaGrupo
    //HOLA SOY SEBASTIAN
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    //HolaJose

	//HOLLA LISE    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}