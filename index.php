<html>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
<head>

</head>
<body style ="background: <?php echo $_GET['color']; ?>">

<div class = "CajaInicio animated bounceInRight">
	<form method = "POST"  id = "FormIngreso" action = "nexo.php" >
		 <input type = "text" name = "patente"  >
   		<input type = "submit" name ="accion" class = "MiBotonUTNMenuInicio" value = "Estacionar">
		<input type = "submit" name ="accion" class = "MiBotonUTNMenuInicio" value = "Salir">
	</form>
</div>
</body>
</html>