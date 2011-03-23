<?
	require('usuario.php');
	$matricula = $_POST['matricula'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	
	$bd = new MySQL('localhost', 'root', 'admin', 'arqui_lab');
	$nuevo = new Usuario();

	$nuevo->setNombre($nombre);
	$nuevo->setApellidos($apellidos);
	$nuevo->setMatricula($matricula);
	$nuevo->setEmail($email);
	
	$nuevo->update($matricula);
	
	echo "ACTUALIZANDO USUARIO $matricula";
	
?>
