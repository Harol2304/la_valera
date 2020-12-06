<?php
class valera 
{
    private $pdo;

    
    
    
    public $id_valera;
    public $cantidad_vales;
    public $id_cliente;
    

   

    
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
        $stm = $this->pdo->prepare("SELECT va.*, c.nombre as 'nom_cliente', c.apellido as 'ape_cliente' FROM valera va INNER JOIN cliente c on va.id_cliente = c.id_cliente");
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


    
    public function Obtener($id_valera)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM valera WHERE id_valera = ?");
             $stm->execute(array($id_valera));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_valera)
    {
        try
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM valera WHERE id_valera = ?");

            $stm->execute(array($id_valera));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        { 
            $sql = "UPDATE valera SET
                        cantidad_vales          = ?,
                        id_cliente       = ?
                    WHERE id_valera = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->cantidad_vales,
                        $data->id_cliente
                       
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(valera $data)
    {
        try
        {
            $sql = "INSERT INTO valera (id_valera,cantidad_vales,id_cliente )
                VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->id_valera,
                    $data->cantidad_vales,
                    $data->id_cliente
                    
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
}