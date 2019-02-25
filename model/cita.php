<?php
class Cita
{
	private $pdo;
    
    public $id;
    public $FechaTentativa;
    public $HoraCita;
    public $NombreOptica;
    public $Nombre;
    public $Celular;
    public $Telefono;
    public $Correo;

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

			$stm = $this->pdo->prepare("SELECT * FROM citas");
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
			          ->prepare("SELECT * FROM citas WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM citas WHERE id = ?");			          

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
			$sql = "UPDATE citas SET 
			            FechaTentativa          = ?, 
			            HoraCita          = ?, 
			            NombreOptica        = ?, 
						Nombre          = ?, 
                        Celular        = ?,
						Telefono = ?, 
						Correo = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->FechaTentativa,
                        $data->HoraCita,
                        $data->NombreOptica,
                        $data->Nombre, 
                        $data->Celular,
                        $data->Telefono,
                        $data->Correo,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Cita $data)
	{
		try 
		{
		$sql = "INSERT INTO citas (FechaTentativa,HoraCita,NombreOptica,Nombre,Celular,Telefono,Correo) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->FechaTentativa,
                    //date('Y-m-d')
                    $data->HoraCita, 
                    $data->NombreOptica, 
                    $data->Nombre,  
                    $data->Celular, 
                    $data->Telefono,
                    $data->Correo,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}