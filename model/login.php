<?php
class login 
{
    private $pdo;

    public $correo_electronico;
    public $contrasena;
    
    
   public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();     
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function clave($correo_electronico){
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM ( SELECT `contrasena`,`correo_electronico`, nombre, apellido FROM `gerente` UNION SELECT `contrasena`,`correo_electronico`, nombre, apellido FROM `cliente` UNION SELECT `contrasena`,`correo_electronico`, nombre, apellido FROM `empleado` ) `login` WHERE `correo_electronico` =  ?");
            $stm->execute(array($correo_electronico));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Ingresar($correo_electronico, $contrasena){
        /*$sql="";*/
        $sql= "SELECT * FROM 
        ( SELECT `id_gerente` as 'id', `correo_electronico`,`contrasena`, 'gerente' as 'rol' FROM `gerente` 
        UNION SELECT `id_cliente`, `correo_electronico`,`contrasena`, 'cliente' FROM `cliente` 
        UNION SELECT `id_empleado`, `correo_electronico`, `contrasena`, 'empleado' FROM `empleado` ) 
        `login` WHERE `correo_electronico` = ? and `contrasena` = ?";
        $stm= $this->pdo-> prepare ($sql);
        $stm->execute(array($correo_electronico, $contrasena));

        $resultado = $stm->fetch(PDO::FETCH_OBJ);
        if(empty($resultado)){
            echo '<script>
            alert("Código o contraseña incorrectos");
            window.location = "index.php?c=login";
            </script>';
            return false;
        }
        else{
            session_start();
            $_SESSION['id'] = $resultado;
            echo '<script>
            window.location = "menu2.php";
            </script>';
            return true;
        }
    }
}