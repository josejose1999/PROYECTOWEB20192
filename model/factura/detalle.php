<?php
class Detalle
{
    private $num_factura;
    private $num_detalle;
    private $producto;
    private $cantidad;
    private $precio;

    public function __get($k){ return $this->$k; }
    public function __set($k, $v){ $this->$k = $v; }

    public function total()
    {
    	return $this->precio = $this->producto->precio*$this->cantidad;
    }
}