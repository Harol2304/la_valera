<?php
class detalle_pedido
{
    private $pdo;
    
    
    public $id;
    public $id_pedido;
    public $id_plato;
    public $cantidad_plato;
    
   

    
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
        $stm = $this->pdo->prepare("SELECT dpe.*, c.nombre as 'nom_plato', c.ingredientes as 'ing_plato' FROM detalle_pedido dpe INNER JOIN plato c on dpe.id_plato = c.id_plato");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_platos()
    {
        try
        {
        $result = array();
        $stm = $this->pdo->prepare("SELECT * FROM plato");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }
    public function listar_pedidos()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM pedido");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    
    public function Obtener($id)
    {
        try
        {
           
            $stm = $this->pdo->prepare("SELECT * FROM detalle_pedido WHERE id = ?");
            
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Eliminar($id)
    {
        try
        {
            
            $stm = $this->pdo
                        ->prepare("DELETE FROM detalle_pedido WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE detalle_pedido SET
                       
                        id_pedido       = ?,
                        id_plato     = ?,
                        cantidad_plato =?
                    WHERE id = ?";
            
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->id_pedido,
                        $data->id_plato,
                        $data->cantidad_plato,
                        $data->id
                        
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Registrar( detalle_pedido $data)
    {
        try
        {
           
            $sql = "INSERT INTO detalle_pedido (
            id_pedido,  id_plato, cantidad_plato)
                VALUES ( ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                      
                        $data->id_pedido,
                        $data->id_plato,
                        $data->cantidad_plato,
                        
                        
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}