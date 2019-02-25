<?php
class Factura
{
	private $pdo;

    private $num_factura;
    private $cliente;
    private $fecha;

    private $listDetalle = array();

    public function __get($k){ return $this->$k; }
    public function __set($k, $v){ $this->$k = $v; }

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
	//funciones de factura
	public function total()
	{
		$sum = 0;
		for($k = 0; $k < count($this->listDetalle); $k++)
		{
			$sum = $sum + ($this->listDetalle[$k]->precio*$this->listDetalle[$k]->cantidad);
		}
		return $sum;
	}

	public function agregarDetalle(Detalle $det)
	{
		array_push($this->listDetalle, $det);
	}

	//funciones crud
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT f.num_factura, f.fecha, u.Nombre, u.Apellido FROM factura f join usuarios u on u.id = f.id_cliente");
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
			$stm = $this->pdo->prepare("SELECT f.num_factura, f.fecha, u.Nombre, u.Apellido, u.Correo FROM factura f join usuarios u on u.id = f.id_cliente  where f.num_factura = ?");
			          

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
			            ->prepare("DELETE FROM factura WHERE id = ?");

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
			$sql = "UPDATE factura SET 
						id_cliente        = ?,
                        fecha        = ?,
				    WHERE num_factura = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_cliente,
                        $data->fecha,
                        $data->num_factura,
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Factura $data)
	{
		try 
		{
		$sql = "INSERT INTO factura (num_factura,id_cliente,fecha) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->num_factura,
                    $data->id_cliente,
                    $data->fecha
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}