<?php
class IncioController{
    
    private $model;
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/Inicio/Inicio.php';
        require_once 'view/footer.php';
    }
}