<?php

session_start();

$usuario = $-SESSION['dev'];

$estado = false;

if (isset($usuario)) {
	$estado = true;
}


?>