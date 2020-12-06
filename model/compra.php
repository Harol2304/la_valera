<?php
class compra 
{
    private $pdo;

    
    
    
    public $id_compra;
    public $fecha_compra;
    public $hora_compra;
    public $valor_vale;
    public $estado;
    public $id_valera;
    public $id_empleado;

   

    
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
            $stm = $this->pdo->prepare("SELECT * FROM compra");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_empleados()
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


    public function Listar_valeras()
    {
        try
        {
        $result = array();
        $stm = $this->pdo->prepare("SELECT * FROM valera");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    

    
    public function Obtener($id_compra)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM compra WHERE id_compra = ?");
             $stm->execute(array($id_compra));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_compra)
    {
        try
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM compra WHERE id_compra = ?");

            $stm->execute(array($id_compra));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        { 
            $sql = "UPDATE compra SET
                        fecha_compra          = ?,
                        hora_compra       = ?,
                        valor_vale      = ?,
                        estado     = ?,
                        id_valera          = ?,
                        id_empleado       = ?
                        
                    WHERE id_compra = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->fecha_compra,
                        $data->hora_compra,
                        $data->valor_vale,
                        $data->estado,
                        $data->id_valera,
                        $data->id_empleado,
                        $data->id_compra
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(compra $data)
    {
        try
        {
            $sql = "INSERT INTO compra (id_compra,fecha_compra,hora_compra,valor_vale,estado, id_valera, id_empleado )
                VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->id_compra,
                    $data->fecha_compra,
                    $data->hora_compra,
                    $data->valor_vale,
                    $data->estado,
                    $data->id_valera,
                    $data->id_empleado
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
}