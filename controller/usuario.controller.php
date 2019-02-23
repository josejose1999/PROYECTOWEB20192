<?php
require_once 'model/usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $usua = new Usuario();
        
        if(isset($_REQUEST['id'])){
            $usua = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/usuario-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $usua = new Usuario();
        
        $usua->id = $_REQUEST['id'];

        if($_REQUEST['Nombre']!="" and ($_REQUEST['password'])!="" and $_REQUEST['Apellido']!="" and $_REQUEST['Correo']!="" and $_REQUEST['id_tipo']!="" and $_REQUEST['FechaNacimiento']!=""){
           $usua->Nombre = $_REQUEST['Nombre']; 
           $usua->username = $_REQUEST['username'];
           $usua->password = md5($_REQUEST['password']);
           $usua->Apellido = $_REQUEST['Apellido'];
           $usua->Correo = $_REQUEST['Correo'];
           $usua->id_tipo = $_REQUEST['id_tipo'];
           $usua->FechaNacimiento = $_REQUEST['FechaNacimiento'];
       }else{
        echo'<script type="text/javascript">
        var sapo=alert("TODOS LOS CAMPOS SON OBLIGATIRIOS");
        window.location.href="index.php?c=Usuario&a=Crud";
        </script>';
       }

        

        $usua->Nombre = $_REQUEST['Nombre'];
        $usua->username = $_REQUEST['username'];
        $usua->password = md5($_REQUEST['password']);
        $usua->Apellido = $_REQUEST['Apellido'];
        $usua->Correo = $_REQUEST['Correo'];
        $usua->id_tipo = $_REQUEST['id_tipo'];
        $usua->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $usua->id > 0
            ? $this->model->Actualizar($usua)
            : $this->model->Registrar($usua);
        if(isset($_SESSION['aceptado'])){
            header('Location: index.php?c=Usuario');
        }
        else{
            header('Location: index.php');
        }
        
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Usuario');
    }
   
}