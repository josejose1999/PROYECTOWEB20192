<?php
class InicioController{
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inicio/inicio.php';
        require_once 'view/footer.php';
        //sapo
    }
      public function IndexNosotros(){

        require_once 'view/header.php';
        echo "<h1>Hola</h1>";
       // require_once 'view/inicio/inicio.php';
        require_once 'view/footer.php';
        //sapo
    }
}