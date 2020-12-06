<?php
class gerente 
{
    private $pdo;

    
    
    
    public $id_gerente;
    public $nombre;
    public $apellido;
    public $correo_electronico;
    public $telefono;
    public $identificacion;
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
            $stm = $this->pdo->prepare("SELECT * FROM gerente");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    
    public function Obtener($id_gerente)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM gerente WHERE id_gerente = ?");
             $stm->execute(array($id_gerente));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_gerente)
    {
        try
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM gerente WHERE id_gerente = ?");

            $stm->execute(array($id_gerente));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE gerente SET
                        nombre          = ?,
                        apellido       = ?,
                        id_menu     = ?,
                        telefono          = ?,
                        identificacion       = ?,
                        contrasena     = ?,
                        correo_electronico     = ?
                    WHERE id_gerente = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre,
                        $data->apellido,
                        $data->id_menu,
                        $data->correo_electronico,
                        $data->id_gerente,
                        $data->telefono,
                        $data->identificacion,
                        $data->contrasena
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(gerente $data)
    {
        try
        {
            $sql = "INSERT INTO gerente (id_gerente,nombre,apellido,id_menu,correo_electronico,telefono,identificacion, contrasena )
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->nombre,
                    $data->apellido,
                    $data->id_menu,
                    $data->correo_electronico,
                    $data->id_gerente,
                    $data->telefono,
                    $data->identificacion,
                    $data->contrasena
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}