<?php
class Usuario
{
	private $pdo;
    public $id;
    public $Nombre;
    public $username;
    public $password;
    public $Apellido;
    public $id_tipo;
    public $FechaRegistro;
    public $FechaNacimiento;
    public $image;
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

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
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
			          ->prepare("SELECT * FROM usuarios WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM usuarios WHERE id = ?");

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
			$sql = "UPDATE usuarios SET 
						Nombre          = ?,
						username          = ?,
						password          = ?, 
						Apellido        = ?,
                        Correo        = ?,
						id_tipo            = ?, 
						FechaNacimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre,
                        $data->username,
                        $data->password,
                        $data->Apellido,
                        $data->Correo,
                        $data->id_tipo,
                        $data->FechaNacimiento,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		

		try 
		{
		$sql = "INSERT INTO usuarios (Nombre,username,password,Apellido,Correo,id_tipo,FechaNacimiento,FechaRegistro) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->username,
                    $data->password,
                    $data->Apellido,
                    $data->Correo,
                    $data->id_tipo,
                    $data->FechaNacimiento,
             
                    date('Y-m-d')
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

function upload_image()
{
	if(isset($_FILES["user_image"]))
	{
		$extension = explode('.', $_FILES['user_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './upload/' . $new_name;
		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
		return $new_name;
	}
}