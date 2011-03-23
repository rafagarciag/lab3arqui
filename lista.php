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
					<input type="button" value="Ver"/>
				</td>
				<td>
					<input type="button" value="Editar"/>
				</td>
				<td>
					<input type="button" value="Eliminar"/>
				</td>
				
			</tr>
			<?
			}
			?>
			<!--Termina el for-->
				
		
		</table>
		
		
	</body>

</html>
