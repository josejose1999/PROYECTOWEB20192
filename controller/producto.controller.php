<?php
require_once 'model/producto.entidad.php';
require_once 'model/producto.model.php';

class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ProductoModel();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Obtener()
    {
        $alm = $this->model->Obtener($_REQUEST['id']);
        print_r( json_encode( $alm ) );
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->__SET('id',              $_REQUEST['id']);
        $alm->__SET('name',          $_REQUEST['name']);
        $alm->__SET('image',            $_REQUEST['image']);
        $alm->__SET('price',          $_REQUEST['price']);
        
        if( !empty( $_FILES['name']['name'] ) ){
            $foto = date('ymdhis') . '-' . strtolower($_FILES['name']['name']);
            move_uploaded_file ($_FILES['name']['tmp_name'], 'uploads/' . $foto);
            
            $alm->__SET('image', $foto);
        }

        if($alm->__GET('id') != '' ? 
           $this->model->Actualizar($alm) : 
           $this->model->Registrar($alm));
        
        header('Location: index.php');
    }
    
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}