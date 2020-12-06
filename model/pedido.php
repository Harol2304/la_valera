<?php
class Pedido
{
    private $pdo;
    
    
    public $id_pedido;
    public $id_compra;
    public $id_cliente;
    public $total;
    
   

    
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
        $stm = $this->pdo->prepare("SELECT pe.*, c.nombre as 'nom_cliente', c.apellido as 'ape_cliente' FROM pedido pe INNER JOIN cliente c on pe.id_cliente = c.id_cliente");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_detalle_pedidos()
    {
        try
        {
        $result = array();
        $stm = $this->pdo->prepare("SELECT p.id_compra, pl.id_plato, dp.cantidad_plato FROM pedido as p
        inner join detalle_pedido as dp on p.id_pedido = dp.id_pedido
        inner join plato as pl on dp.id_plato = pl.id_plato");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Ultimo_pedido()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT MAX(id_pedido) as id_pedido FROM pedido");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
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
        $stm = $this->pdo->prepare("SELECT * from plato");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_compras()
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

    public function Listar_clientes()
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

   
    public function Obtener_platos($id_pedido)
    {
        try
        {
           
            $stm = $this->pdo->prepare("SELECT *, m.categoria  FROM `detalle_pedido` d LEFT JOIN plato p ON d.id_plato = p.id_plato INNER JOIN menu m on p.id_menu = m.id_menu WHERE d.id_pedido = ?");
            
            $stm->execute(array($id_pedido));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    
    public function Obtener($id_pedido)
    {
        try
        {
           
            $stm = $this->pdo->prepare("SELECT * FROM pedido WHERE id_pedido = ?");
            
            $stm->execute(array($id_pedido));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Eliminar($id_pedido)
    {
        try
        {
            
            $stm = $this->pdo
                        ->prepare("DELETE FROM pedido WHERE id_pedido = ?");

            $stm->execute(array($id_pedido));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar_plato($id)
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
            
            $sql = "UPDATE pedido SET
                       
                        id_compra       = ?,
                        id_cliente     = ?,
                        total =?
                    WHERE id_pedido = ?";
            
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->id_compra,
                        $data->id_cliente,
                        $data->total,
                        $data->id_pedido
                        
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Registrar(pedido $data)
    {
        try
        {
           
            $sql = "INSERT INTO pedido (
            id_compra,  id_cliente, total)
                VALUES ( ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(

                        $data->id_compra,
                        $data->id_cliente,
                        $data->total
                        
                        
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Mas_plato($data)
    {
        try
        {
            $sql = "INSERT INTO detalle_pedido (id_plato, id_pedido, cantidad_plato)
                VALUES ( ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->id_plato,
                    $data->id_pedido,
                    $data->cantidad_plato
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}