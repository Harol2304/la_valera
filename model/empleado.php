<?php
class Empleado 
{
    private $pdo;

    
    
    
    public $nombre;
    public $apellido;
    public $id_empleado;
    public $identificacion;
    public $direccion;
    public $correo_electronico;
    public $telefono;
    public $contrasena;
    public $id_valera;
   

    
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

    
    public function Listar()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM empleado");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    
    public function Obtener($id_empleado)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM empleado WHERE id_empleado = ?");
             $stm->execute(array($id_empleado));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_empleado)
    {
        try
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM empleado WHERE id_empleado = ?");

            $stm->execute(array($id_empleado));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE empleado SET
                        nombre          = ?,
                        apellido       = ?,
                        contrasena     = ?,
                        identificacion          = ?,
                        direccion       = ?,
                        correo_electronico     = ?,
                        telefono     = ?,
                        id_valera    =?
                    WHERE id_empleado = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre,
                        $data->apellido,
                        $data->contrasena,
                        $data->identificacion,
                        $data->direccion,
                        $data->correo_electronico,
                        $data->telefono,
                        $data->id_empleado,
                        $data->id_valera
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Empleado $data)
    {
        try
        {
            $sql = "INSERT INTO Empleado (nombre,apellido,id_empleado,identificacion,direccion,correo_electronico,telefono, contrasena, id_valera)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->nombre,
                    $data->apellido,
                    $data->id_empleado,
                    $data->identificacion,
                    $data->direccion,
                    $data->correo_electronico,
                    $data->telefono,
                    $data->contrasena,
                    $data->id_valera
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }    
}