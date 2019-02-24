<?php
class Producto
{
	private $pdo;
    
    public $id;
    public $name;
    public $image;
    public $price;
    

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

			$stm = $this->pdo->prepare("SELECT * FROM productos");
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
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM productos WHERE id = ?");

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
			$sql = "UPDATE productos SET 
						name          = ?, 
						image        = ?,
                        price        = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->name, 
                        $data->image,
                        $data->price,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Producto $data)
	{
		try 
		{
		$sql = "INSERT INTO Productos (name,image,price) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->name,
                    $data->image, 
                    $data->price
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}