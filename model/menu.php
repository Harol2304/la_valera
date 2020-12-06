<?php
class menu 
{
    private $pdo;

    public $id_menu;
    public $categoria;
    public $id_gerente;
 
    
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
        $stm = $this->pdo->prepare("SELECT me.*, c.nombre as 'nom_gerente', c.apellido as 'ape_gerente' FROM menu me INNER JOIN gerente c on me.id_gerente = c.id_gerente");
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_gerentes()
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

    
    public function Obtener($id_menu)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM menu WHERE id_menu = ?");
             $stm->execute(array($id_menu));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_menu)
    {
        try
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM menu WHERE id_menu = ?");

            $stm->execute(array($id_menu));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE menu SET

                       categoria =?,
                       id_gerente =?
                    WHERE id_menu = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                       
                        $data->categoria,
                        $data->id_gerente,
                        $data->id_menu
                       
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(menu $data)
    {
        try
        {
            $sql = "INSERT INTO menu ( categoria, id_gerente)
                VALUES (  ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                   
               
                    $data->categoria,
                    $data->id_gerente,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    
}