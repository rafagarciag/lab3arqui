<html>
	<head>
		<title>
			Lab 3 Arqui
		</title>
	</head>
	
	<body>
	
		<h2>Lista de Usuarios</h2>
		
		<table>
			<tr>
				<th>
					Matricula
				</th>
				<th>
					Nombre
				</th>
				<th>
					Apellidos
				</th>
				<th>
					Email
				</th>
			<tr/>

			<!--Aqui va el for-->
			<?php
			require('usuario.php');
			$bd = new MySQL('localhost', 'root', 'admin', 'arqui_lab');
			
			$arreglo = $bd->fetchAll('usuarios');
		
			foreach($arreglo as $resultado){
			
			?>
			<tr>
				<td>
					<? echo $resultado['matricula'] ?>
				</td>
				<td>
					<? echo $resultado['nombre'] ?>
				</td>
				<td>
					<? echo $resultado['apellidos'] ?>
				</td>
				<td>
					<? echo $resultado['email'] ?>
				</td>
				<td>
					<input type="button" value="Ver" onClick="window.location.href='show.php?matricula=<?echo $resultado['matricula']?>'"/>
				</td>
				<td>
					<input type="button" value="Editar" onClick="window.location.href='editar.php?matricula=<?echo $resultado['matricula']?>'"/>
				</td>
				<td>
					<input type="button" value="Eliminar" onClick="window.location.href='eliminar.php?matricula=<?echo $resultado['matricula']?>'"/>
				</td>
				
			</tr>
			<?
			}
			?>
				
		
		</table>
		<input type="button" value="Nuevo Usuario" onClick="window.location.href='crear.html'"/>
		
	</body>

</html>
