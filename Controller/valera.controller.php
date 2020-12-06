<?php

require_once 'model/valera.php';

class ValeraController{

    private $model;

   
    public function __CONSTRUCT(){
        $this->model = new Valera();
    }
  
    public function Index(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        require_once 'view/valera/header_4.php';
        require_once 'view/valera/valera.php';
        require_once 'view/footer.php';
    }
 }

     
    public function Crud(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        $vlr = new valera();

        if(isset($_REQUEST['id_valera'])){
            $vlr = $this->model->Obtener($_REQUEST['id_valera']);
        
       }
        require_once 'view/valera/header_4.php';
        require_once 'view/valera/valera-editar.php';
        require_once 'view/footer.php';
   }
 }
   


    public function Nuevo(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        $vlr= new Valera();
        $id = $this->model->Ultimo_valera();
        $ultimo_id = intval($id->id_valera) + 1;
        require_once 'view/valera/header_4.php';
        require_once 'view/valera/valera-nuevo.php';
        require_once 'view/footer.php';
    }
  }

    public function Guardar(){
        $vlr = new Valera();

        $vlr->cantidad_vales = $_REQUEST['cantidad_vales'];
        $vlr->id_cliente = $_REQUEST['id_cliente'];
        

        $this->model->Registrar($vlr);
        header('Location: index.php?c=valera');
    }

    public function Editar(){
        $vlr = new valera();
        $vlr->id_valera = $_REQUEST['id_valera'];
        $vlr->cantidad_vales = $_REQUEST['cantidad_vales'];
        $vlr->id_cliente = $_REQUEST['id_cliente'];
 

        header('Location: index.php?c=valera');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_valera']);
        header('Location: index.php?c=valera');
    }
    public function consul(){
        require_once 'view/valera/header_4.php';
        require_once 'view/valera/valera-consultar.php';
    }
}
?>