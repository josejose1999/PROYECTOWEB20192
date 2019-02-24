<?php
require_once 'model/factura/factura.php';

class FacturaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Factura();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/factura/factura.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Factura();
        
        if(isset($_REQUEST['num_factura'])){
            $alm = $this->model->Obtener($_REQUEST['num_factura']);
        }
        
        require_once 'view/header.php';
        require_once 'view/factura/factura-ver.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Factura();
        
        $alm->num_factura = $_REQUEST['num_factura'];
        $alm->cliente = $_REQUEST['cliente'];
        $alm->fecha = $_REQUEST['fecha'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    /*public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }*/
}