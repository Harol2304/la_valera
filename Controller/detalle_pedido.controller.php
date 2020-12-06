
<?php

require_once 'model/detalle_pedido.php';

class detalle_pedidoController{

private $model;

   
    public function __CONSTRUCT(){
        $this->model = new detalle_pedido();
    }

    public function Index(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        require_once 'view/detalle_pedido/header_10.php';
        require_once 'view/detalle_pedido/detalle_pedido.php';
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
       $dped = new detalle_pedido();

       
        if(isset($_REQUEST['detalle_pedido'])){
           $dped = $this->model->Obtener($_REQUEST['detalle_pedido']);
        
       }
        require_once 'view/detalle_pedido/header_10.php';
        require_once 'view/detalle_pedido/detalle_pedido-editar.php';
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
       $dped= new detalle_pedido();

       
        require_once 'view/detalle_pedido/header_10.php';
        require_once 'view/detalle_pedido/detalle_pedido-nuevo.php';
        require_once 'view/footer.php';
    }
}
  
    public function Guardar(){
       $dped = new detalle_pedido();

       
       
       $dped->id_plato = $_REQUEST['id_plato'];
       $dped->id_pedido = $_REQUEST['id_pedido'];
       $dped->cantidad_plato = $_REQUEST['cantidad_plato'];

        $this->model->Registrar($dped);

        header('Location: index.php?c=detalle_pedido');
    }


    public function Editar(){
       $dped = new detalle_pedido();

       
       $dped->id_plato = $_REQUEST['id_plato'];
       $dped->id_pedido = $_REQUEST['id_pedido'];
       $dped->id = $_REQUEST['id'];
       $dped->cantidad_plato = $_REQUEST['cantidad_plato'];
       $this->model->Actualizar($dped);

        header('Location: index.php?c=detalle_pedido');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['detalle_pedido']);
       header('Location: index.php?c=detalle_pedido');
    }
    public function consul(){
        require_once 'view/detalle_pedido/header_10.php';
        require_once 'view/detalle_pedido/detalle_pedido-consultar.php';
    }
}
?>