<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/compra.php';

class CompraController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new Compra();
    }

    //Llamado plantilla principal
    public function Index(){
        session_start();
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
        require_once 'view/compra/header_5.php';
        require_once 'view/compra/compra.php';
        require_once 'view/footer.php';
    }
}
    //Llamado a la vista proveedor-editar
    public function Crud(){
        $com = new Compra();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['id_compra'])){
            $com = $this->model->Obtener($_REQUEST['id_compra']);
        }

        //Llamado de las vistas.
        require_once 'view/compra/header_5.php';
        require_once 'view/compra/compra-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        session_start();
        //validar si hay datos
        if(!isset($_SESSION['id'])){
            header('location: index.php?c=login');
        }else{
            $sesion = $_SESSION['id'];
            $com= new compra();
           
        require_once 'view/compra/header_5.php';
        require_once 'view/compra/compra-nuevo.php';
        require_once 'view/footer.php';
    }
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $com = new Compra();

        //Captura de los datos del formulario (vista).
        $com->fecha_compra = $_REQUEST['fecha_compra'];
        $com->hora_compra = $_REQUEST['hora_compra'];
        $com->estado = $_REQUEST['estado'];
        $com->valor_vale = $_REQUEST['valor_vale']; 
        $com->id_valera = $_REQUEST['id_valera'];
        $com->id_empleado = $_REQUEST['id_empleado']; 

        //Registro al modelo proveedor.
        $this->model->Registrar($com);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php?c=compra');
    }

    //Método que modifica el modelo de un proveedor.
    public function Editar(){
        $com = new Compra();

        $com->id_compra = $_REQUEST['id_compra'];
        $com->fecha_compra = $_REQUEST['fecha_compra'];
        $com->hora_compra = $_REQUEST['hora_compra'];
        $com->estado = $_REQUEST['estado'];
        $com->valor_vale = $_REQUEST['valor_vale'];
        $com->id_valera = $_REQUEST['id_valera'];
        $com->id_empleado = $_REQUEST['id_empleado'];  
        $this->model->Actualizar($com);

        header('Location: index.php?c=compra');
    }
//Método que elimina la tupla compra con el nit dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_compra']);
        header('Location: index.php?c=compra');
    }
    public function consul(){
    require_once 'view/compra/header_5.php';
    require_once 'view/compra/compra-consultar.php';
}
}