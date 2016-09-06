<?php

include_once "estacionamiento.php";
	$patente = $_POST['patente'];
	$accion = $_POST['accion'];

	echo $patente."<br>";
	echo $accion."<br>";
	

//Permite volver a alguna ubicacion
//header("location:index.php");

if($accion == "Estacionar")
{
	estacionamiento::Guardar($patente);

}


?>