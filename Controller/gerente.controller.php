<?php

require_once 'model/gerente.php';

class GerenteController{

    private $model;

   
    public function __CONSTRUCT(){
        $this->model = new Gerente();
    }
  
    public function Index(){
        require_once 'view/gerente/header_6.php';
        require_once 'view/gerente/gerente.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $ger = new Gerente();

       
        if(isset($_REQUEST['id_gerente'])){
            $emp = $this->model->Obtener($_REQUEST['id_gerente']);
        
       }
        require_once 'view/gerente/header_6.php';
        require_once 'view/gerente/gerente-editar.php';
        require_once 'view/footer.php';
  }


   
    public function Nuevo(){
        $ger = new Gerente();

        
        require_once 'view/gerente/header_6.php';
        require_once 'view/gerente/gerente-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $ger = new Gerente();

        
        $ger->id_gerente = $_REQUEST['id_gerente'];
        $ger->nombre = $_REQUEST['nombre'];
        $ger->apellido = $_REQUEST['apellido'];
        $ger->telefono = $_REQUEST['telefono'];
        $ger->correo_electronico  = $_REQUEST['correo_electronico'];
        $ger->identificacion = $_REQUEST['identificacion'];
        $ger->contrasena = $_REQUEST['contrasena'];
        $ger->id_menu = $_REQUEST['id_menu'];

        
        $this->model->Registrar($ger); 

       
        header('Location: index.php?c=gerente');
    }

    
    public function Editar(){
        $ger = new Gerente();

       
       
        $ger->id_gerente = $_REQUEST['id_gerente'];
        $ger->nombre = $_REQUEST['nombre'];
        $ger->apellido = $_REQUEST['apellido'];
        $ger->telefono = $_REQUEST['telefono'];
        $ger->correo_electronico  = $_REQUEST['correo_electronico'];
        $ger->identificacion = $_REQUEST['identificacion'];
        $ger->contrasena = $_REQUEST['contrasena'];
        $ger->id_menu = $_REQUEST['id_menu'];
        $this->model->Actualizar($cli);
        header('Location: index.php?c=gerente');
    }

   
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_gerente']);
       header('Location: index.php?c=gerente');
    }
   
    public function consul(){
        require_once 'view/gerente/header_6.php';
        require_once 'view/gerente/gerente-consultar.php';
    }
}
?>
