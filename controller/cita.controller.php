<?php
require_once 'model/cita.php';

class CitaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cita();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cita/cita.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Cita();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cita/cita-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Cita();
         if ($_REQUEST['FechaTentativa']=="" or $_REQUEST['HoraCita']=="" or $_REQUEST['NombreOptica']=="" or $_REQUEST['Nombre']=="" or $_REQUEST['Celular']==""
            or $_REQUEST['Telefono']==""or $_REQUEST['Correo']=="") {
            echo'<script type="text/javascript">
            alert("TODOS LOS CAPOS SON OBLIGATORIOS");
            window.location.href="index.php?c=Cita&a=Crud";
            </script>';
            echo "sapo";
        }else{
        $alm->id = $_REQUEST['id'];
        $alm->FechaTentativa = $_REQUEST['FechaTentativa'];
        $alm->HoraCita = $_REQUEST['HoraCita'];
        $alm->NombreOptica = $_REQUEST['NombreOptica'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Celular = $_REQUEST['Celular'];
        $alm->Telefono = $_REQUEST['Telefono'];
        $alm->Correo = $_REQUEST['Correo'];
}
        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        if(isset($_SESSION['aceptado'])){
            header('Location: index.php?c=Cita');
        }
        else{
            header('Location: index.php');
        }
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
      header('Location: index.php?c=Cita');
    }
}