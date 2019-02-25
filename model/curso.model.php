<?php
require_once 'database.php';
class CursoModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = DBConnection::StartUp();       
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

			$stm = $this->pdo->prepare("SELECT * FROM cursos ORDER BY Nombre");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}