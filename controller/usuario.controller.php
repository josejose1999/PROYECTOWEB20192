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
        $usua->Nombre = $_REQUEST['Nombre'];
        $usua->Apellido = $_REQUEST['Apellido'];
        $usua->Correo = $_REQUEST['Correo'];
        $usua->Sexo = $_REQUEST['Sexo'];
        $usua->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $usua->id > 0
            ? $this->model->Actualizar($usua)
            : $this->model->Registrar($usua);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}