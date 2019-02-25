<?php
    class Alumno
    {
        private $id;
        private $Nombre;
        private $Precio;
        private $Foto;


        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }