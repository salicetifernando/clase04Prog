<?php
class estacionamiento
{
	

	//$patente = $_POST['patente'];
	
	public static function Guardar($patente)
	{
		$fecha = date("Y-m-d H:i:s");
		$renglon = $patente ."=>". $fecha."\n";
		$miArchivo = fopen("estacionado.txt", "a");
		fwrite($miArchivo, $renglon);
		fclose($miArchivo);

	}

	static function Leer()
	{
		$listadoAutos = array();


		$miArchivo = fopen("estacionado.txt", "r");
		//me devuelve si finalice el archivo. Recibe el archivo y retorna "true" o "false" si se acabo el archivo o no.
		//True = termino el archivo. False = no termino el archivo.
		while(!(feof($miArchivo)))
		{
			$renglon = fgets($miArchivo);
			$auto = explode("=>", $renglon);//primer parametro el separador, y segundo el string a separar. Devuelve un array.
			if ($auto[0] != " ") 
			{
			$listadoAutos[] = $auto;
			}
			
			//echo "<br> $auto[0]";
		}

		fclose($miArchivo);

		return $listadoAutos;

	}
	//me devuelve un array.
	//explode(delimiter, string)

	//saca el importe de una patente en especifico, dependiendo de la fecha en la cual fue registrada...
	public static function Sacar($patente)
	{
		$listadoEstacionado = estacionamiento::Leer();
		foreach ($listadoEstacionado as $auto) 
		{
			if ($auto[0] == $patente) 
			{
				$inicio = $auto[1];
				$ahora = date("Y-m-d H:i:s");
				$diferencia = strtotime($ahora)-strtotime($inicio);//strtotime me devuelve un nro, el cual es una referencia a la fecha y hora...
				$importe = $diferencia * 10;//se guarda en ticket.txt
				echo $importe."<br>";
			}
		}
	}

}

?>