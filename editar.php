<html>
	<head>
		<title>
			Lab 3 Arqui
		</title>
	</head>
	
	<body>
	
		<h2>Crear Usuario</h2>
		<?
			$mat=$_GET['matricula']
		?>
		
		<form action="editarUsuario.php" method="POST">
		
			Matricula: <label><?echo $mat?></label>
			<input type="hidden" name="matricula" id="matricula" value="<?echo $mat?>"/><br/>
			
			Nombre: <input type="text" name="nombre" id="nombre"/><br/>
			
			Apellidos: <input type="text" name="apellidos" id="apellidos"/><br/>
			
			Email: <input type="text" name="email" id="email"/><br/>
		
			<input type="submit" value="Guardar"/>
			<input type="button" value="Regresar" onClick="window.location.href='lista.php'"/>
		</form>
	</body>

</html>
