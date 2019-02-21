<?php
class InicioController{
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inicio/inicio.php';
        require_once 'view/footer.php';
        
    }
      public function IndexNosotros(){

        require_once 'view/header.php';
        require_once 'view/Nosotros/nosotros.php';
        require_once 'view/footer.php';
        
    }
        public function IndexServicios(){

        require_once 'view/header.php';
        require_once 'view/Servicios/servicios.php';
        require_once 'view/footer.php';
        
    }
    public function IndexCarrito(){

        require_once 'view/header.php';
        require_once 'view/Carrito/carrito.php';
        require_once 'view/footer.php';
        
    }
    public function IndexArmazones(){

        require_once 'view/header.php';
        require_once 'view/Armazones/armazones.php';
        require_once 'view/footer.php';
        
    }
     public function IndexMarcas(){

        require_once 'view/header.php';
        require_once 'view/Marcas/marcas.php';
        require_once 'view/footer.php';
        
    }
}