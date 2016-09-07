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

	static function Leer()
	{
		$miArchivo = fopen("estacionado.txt", "r");
		//me devuelve si finalice el archivo. Recibe el archivo y retorna "true" o "false" si se acabo el archivo o no.
		//True = termino el archivo. False = no termino el archivo.
		while(!(feof($miArchivo)))
		{
			$renglon = fgets($miArchivo);
			echo "<br> $renglon";
		}
		fclose($miArchivo);


	}
}

?>