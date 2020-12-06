
<?php

require_once 'model/pedido.php';

class pedidoController{

private $model;

   
    public function __CONSTRUCT(){
        $this->model = new pedido();
    }

    public function Index(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        require_once 'view/pedido/header_9.php';
        require_once 'view/pedido/pedido.php';
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
            $ped = new pedido();
            if(isset($_REQUEST['id_pedido'])){
            $ped    = $this->model->Obtener($_REQUEST['id_pedido']);
            $detal  = $this->model->Obtener_platos($_REQUEST['id_pedido']);
            $platos = $this->model->Listar_platos();
            require_once 'view/pedido/header_9.php';
            require_once 'view/pedido/pedido-editar.php';
            require_once 'view/footer.php';
            }else{
                header('location: index.php?c=pedido');
            }
        }
    }
    
    public function Nuevo(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
            $ped= new pedido();
            $id = $this->model->Ultimo_pedido();
            $ultimo_id = intval($id->id_pedido) + 1;
            require_once 'view/pedido/header_9.php';
            require_once 'view/pedido/pedido-nuevo.php';
            require_once 'view/footer.php';
        }
    }
  
    public function Guardar(){
       $ped = new pedido();

       $ped->id_pedido = $_REQUEST['id_pedido'];
       $ped->id_compra = $_REQUEST['id_compra'];
       $ped->total = $_REQUEST['total'];
       $ped->id_cliente = $_REQUEST['id_cliente'];
       $this->model->Registrar($ped);

        header('Location: index.php?c=Pedido&a=Crud&id_pedido='.$_REQUEST['id_pedido']);
    }


    public function Editar(){
       $ped = new pedido();

       
       $ped->id_pedido = $_REQUEST['id_pedido'];
       $ped->id_compra = $_REQUEST['id_compra'];
       $ped->id_cliente = $_REQUEST['id_cliente'];
       $ped->total = $_REQUEST['total'];
       $this->model->Actualizar($ped);

        header('Location: index.php?c=pedido');
    }

    public function Mas_plato(){
        $ped = new pedido();
        $ped->id_plato = $_REQUEST['id_plato'];
        $ped->id_pedido = $_REQUEST['id_pedido'];
        $ped->cantidad_plato = $_REQUEST['cantidad'];
        $detal="";
        $this->model->Mas_plato($ped);
        header('Location: index.php?c=Pedido&a=Crud&id_pedido='.$ped->id_pedido);
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_pedido']);
       header('Location: index.php?c=pedido');
    }

    public function Eliminar_plato(){
        $this->model->Eliminar_plato($_REQUEST['id']);
        header('Location: index.php?c=Pedido&a=Crud&id_pedido='.$_REQUEST['id_pedido']);
    }

    
    public function consul(){
        require_once 'view/pedido/header_9.php';
        require_once 'view/pedido/pedido-consultar.php';
    }
}
?>