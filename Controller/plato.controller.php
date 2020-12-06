
<?php

require_once 'model/plato.php';

class platoController{

private $model;

   
    public function __CONSTRUCT(){
        $this->model = new plato();
    }

    public function Index(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
            require_once 'view/plato/header_8.php';
            require_once 'view/plato/plato.php';
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
            $pla = new plato();

            if(isset($_REQUEST['id_plato'])){
                $pla = $this->model->Obtener($_REQUEST['id_plato']);
            }
            require_once 'view/plato/header_8.php';
            require_once 'view/plato/plato-editar.php';
            require_once 'view/footer.php';
        }
    }

    public function completo(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
            $pla = new plato();

            if(isset($_REQUEST['id_plato'])){
                $pla = $this->model->Obtener($_REQUEST['id_plato']);
            }
            require_once 'view/plato/header_8.php';
            require_once 'view/plato/plato_completo.php';
            require_once 'view/footer.php';
        }
    }



    
    
    public function Nuevo(){
            require_once 'view/plato/header_8.php';
            require_once 'view/plato/plato-nuevo.php';
            require_once 'view/footer.php';
        }
    

  
    public function Guardar(){
        $pla = new plato();

        $pla->nombre = $_REQUEST['nombre'];
        $pla->ingredientes = $_REQUEST['ingredientes'];
        $pla->descripcion = $_REQUEST['descripcion'];
        $pla->img_plato = $_REQUEST['img_plato'];
        $pla->precio = $_REQUEST['precio'];
        $pla->id_menu = $_REQUEST['id_menu'];

        $this->model->Registrar($pla);

        header('Location: index.php?c=plato');
    }


    public function Editar(){
        $pla = new plato();
       
        $pla->id_plato = $_REQUEST['id_plato'];
        $pla->nombre = $_REQUEST['nombre'];
        $pla->ingredientes = $_REQUEST['ingredientes'];
        $pla->descripcion = $_REQUEST['descripcion'];
        $pla->img_plato = $_REQUEST['img_plato'];
        $pla->precio = $_REQUEST['precio'];
        $pla->id_menu = $_REQUEST['id_menu'];
        $this->model->Actualizar($pla);

        header('Location: index.php?c=plato');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_plato']);
       header('Location: index.php?c=plato');
    }
    public function consul(){
        require_once 'view/plato/header_8.php';
        require_once 'view/plato/plato-consultar.php';
    }
}
?>