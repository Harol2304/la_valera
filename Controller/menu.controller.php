<?php

require_once 'model/menu.php';

class MenuController{

    private $model;

   
    public function __CONSTRUCT(){
        $this->model = new Menu();
    }
  

    public function Index(){
        session_start();
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        require_once 'view/menu/header_3.php';
        require_once 'view/menu/menu.php';
        require_once 'view/footer.php';
    }
}

    
    public function Crud(){
        $mnu = new Menu();

       
        if(isset($_REQUEST['id_menu'])){
            $mnu = $this->model->Obtener($_REQUEST['id_menu']);
        
       }
        require_once 'view/menu/header_3.php';
        require_once 'view/menu/menu-editar.php';
        require_once 'view/footer.php';
  }
    

   
  public function Nuevo(){
        require_once 'view/menu/header_3.php';
        require_once 'view/menu/menu-nuevo.php';
        require_once 'view/footer.php';
    
}

    public function Guardar(){
        $mnu = new Menu();

           $mnu->id_gerente = $_REQUEST['id_gerente'];
        $mnu->categoria = $_REQUEST['categoria'];
        

        
        $this->model->Registrar($mnu);

       
        header('Location: index.php?c=menu');
    }

    public function Editar(){
        $mnu = new menu();
        
        $mnu->id_gerente = $_REQUEST['id_gerente'];
        $mnu->categoria = $_REQUEST['categoria'];
        $mnu->id_menu = $_REQUEST['id_menu'];

        $this->model->Actualizar($mnu);
        header('Location: index.php?c=menu');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_menu']);
       header('Location: index.php?c=menu');
    }
    public function consul(){
        require_once 'view/menu/header_3.php';
        require_once 'view/menu/menu-consultar.php';
    }
}
?>