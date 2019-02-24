<?php
require_once 'model/productos.php';

class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    
    public function Index3(){
        require_once 'view/header.php';
        require_once 'view/Producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $pro = new Producto();
        
        if(isset($_REQUEST['id'])){
            $pro= $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/Producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $pro = new Producto();
        
        $pro->id = $_REQUEST['id'];
        $pro->Nombre = $_REQUEST['Nombre'];
        $pro->Imagen = $_REQUEST['Imagen'];
        $pro->Precio = $_REQUEST['Precio'];
    
        $pro->id > 0 
            ? $this->model->Actualizar($pro)
            : $this->model->Registrar($pro);
        
        header('Location: index.php?c=Producto');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
         header('Location: index.php?c=Producto');
    }
}