<?php
class plato 
{
    private $pdo;

    
    
    
    public $id_plato;
    public $nombre;
    public $id_menu;
    public $descripcion;
    public $ingredientes;
    public $precio;
    public $img_plato;
   
   

    
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
            $stm = $this->pdo->prepare("SELECT p.*, m.categoria FROM `plato` p INNER JOIN menu m on p.id_menu = m.id_menu");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_menu()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM menu");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }
    
    public function Obtener($id_plato)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT p.*, m.categoria FROM `plato` p INNER JOIN menu m on p.id_menu = m.id_menu WHERE id_plato = ?");
             $stm->execute(array($id_plato));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_plato)
    {
        try
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM plato WHERE id_plato = ?");

            $stm->execute(array($id_plato));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE plato SET
                        nombre          = ?,
                        ingredientes       = ?,
                        descripcion     = ?,
                        img_plato     = ?,
                        precio     = ?,
                     
                        id_menu          = ?
                        
                    WHERE id_plato = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre,
                        $data->ingredientes,
                        $data->descripcion,
                        $data->img_plato,
                        $data->precio,
                       
                        $data->id_menu,
                        $data->id_plato
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(plato $data)
    {
        try
        {
            $sql = "INSERT INTO plato (nombre,ingredientes,descripcion, precio, id_menu, img_plato )
                VALUES (?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->nombre,
                    $data->ingredientes,
                    $data->descripcion,
                    $data->precio,
                    $data->id_menu,
                    $data->img_plato
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    
}