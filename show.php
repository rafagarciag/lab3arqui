<html>
	<head>
		<title>
			Lab 3 Arqui
		</title>
	</head>
	
	<body>
	
		<h2>Usuario</h2>
		<?php
			$id=$_GET['matricula'];
			require('usuario.php');
			$bd = new MySQL('localhost', 'root', 'admin', 'arqui_lab');
			$nuevo = new Usuario();
					
			
			$resultado = $nuevo->fetch($id);	
		
		?>
		<table>
			<tr>
				<td>
					Matricula:
				</td>
				<td>
					<? echo $resultado['matricula'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Nombre:
				</td>
				<td>
					<? echo $resultado['nombre'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Apellidos:
				</td>
				<td>
					<? echo $resultado['apellidos'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					<? echo $resultado['email'] ?>
				</td>
			</tr>
		</table>
		
		
	</body>

</html>
