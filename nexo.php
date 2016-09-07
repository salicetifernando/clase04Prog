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

}else
{

	//$miListado = array();
	//$miListado[] = estacionamiento::Leer(); 
	//echo $miListado[0];
	//var_dump($miListado);
	estacionamiento::Sacar($patente);
}


?>