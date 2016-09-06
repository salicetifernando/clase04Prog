<?php
class estacionamiento
{
	

	//$patente = $_POST['patente'];
	
	static function Guardar($patente)
	{
		$fecha = date("Y-m-d H:i:s");
		$renglon = $patente ." ". $fecha."\n";
		$miArchivo = fopen("estacionado.txt", "a");
		fwrite($miArchivo, $renglon);
		fclose($miArchivo);
	}

}

?>