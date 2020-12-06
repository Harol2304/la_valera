<?php
class Cliente
{
    private $pdo;
    
    
    public $nombre;
    public $apellido;
    public $identificacion;
    public $id_cliente;
    public $direccion;
    public $telefono;
    public $correo_electronico;
    public $fecha_nacimiento;
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

    
    public function Listar()
    {
        try
        {
            $result = array();
             $stm = $this->pdo->prepare("SELECT * FROM cliente");
            $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    
    public function Obtener($id_cliente)
    {
        try
        {
           
            $stm = $this->pdo->prepare("SELECT * FROM cliente WHERE id_cliente = ?");
            
            $stm->execute(array($id_cliente));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Eliminar($id_cliente)
    {
        try
        {
            
            $stm = $this->pdo
                        ->prepare("DELETE FROM cliente WHERE id_cliente = ?");

            $stm->execute(array($id_cliente));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE cliente SET
                        nombre          = ?,
                        apellido       = ?,
                        identificacion     = ?,
                        direccion          = ?,
                        telefono       = ?,
                        correo_electronico       = ?,
                        fecha_nacimiento       = ?,
                        contrasena     = ?
                    WHERE id_cliente = ?";
            
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre,
                        $data->apellido,
                        $data->identificacion, 
                        $data->direccion,
                        $data->telefono,
                        $data->correo_electronico,
                        $data->fecha_nacimiento,
                        $data->contrasena,
                        $data->id_cliente
                        
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Registrar(Cliente $data)
    {
        try
        {
           
            $sql = "INSERT INTO cliente (nombre,
            apellido,  identificacion,direccion, telefono, correo_electronico, fecha_nacimiento, contrasena )
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                         $data->nombre,
                        $data->apellido,
                        $data->identificacion,
                        $data->direccion,
                        $data->telefono,
                        $data->correo_electronico,
                        $data->fecha_nacimiento,
                        $data->contrasena
                        
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}