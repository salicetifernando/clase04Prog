<html>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
<head>

</head>
<body style ="background: <?php echo $_GET['color']; ?>">

<div class = "CajaInicio animated bounceInRight">
	<form  id = "FormIngreso" >
		 <input type = "text" name = "color" style = "background : <?php echo $_GET['color']; ?>" >
   		<input type = "submit" class = "MiBotonUTNMenuInicio">

	</form>
</div>
</body>
</html>