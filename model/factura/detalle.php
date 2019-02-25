<?php
class Detalle
{
    private $pdo;

    private $num_factura;
    private $num_detalle;
    private $producto;
    private $cantidad;
    private $precio;

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

    public function total()
    {
    	return $this->precio = $this->producto->precio*$this->cantidad;
    }

    public function Listar($nf)
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT d.num_detalle, d.num_factura, d.id_producto, d.cantidad, d.precio, p.id, p.name, p.image, p.price FROM detalle d join productos p on p.id = d.id_producto where d.num_factura = ?");
            $stm->execute(array($nf));

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function TotalFactura($nf)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT sum(precio) as p FROM detalle WHERE num_factura = ?"); 

            $stm->execute(array($nf));
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}