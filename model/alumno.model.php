<?php
class AlumnoModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=optica', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
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

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Alumno();

				$alm->__SET('id', $r->id);
				$alm->__SET('Nombre', $r->name);
                $alm->__SET('Precio', $r->price);
                $alm->__SET('Foto', $r->image);
	
				$result[] = $alm;
			}

			return $result;
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

	public function Actualizar(Alumno $data)
	{
		try 
		{
			$sql = "UPDATE productos SET 
						Nombre          = ?, 
                        Precio          = ?,
                        Foto            = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('Nombre'), 
                    $data->__GET('Precio'),
                    $data->__GET('Foto'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
		$sql = "INSERT INTO productos (name,price,image) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('Nombre'), 
                $data->__GET('Precio'),
                $data->__GET('Foto'),
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}