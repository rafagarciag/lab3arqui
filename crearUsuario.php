<?
require('usuario.php');
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];

try{
	$bd = new MySQL('localhost', 'root', 'admin', 'arqui_lab');
	$nuevo = new Usuario();
	$nuevo->setNombre($nombre);
	$nuevo->setApellidos($apellidos);
	$nuevo->setMatricula($matricula);
	$nuevo->setEmail($email);
	$nuevo->insert();
	echo "Se ha creado el usuario";
	
	//$bd->insert(array('nombre'=>$nombre, 'apellidos'=>$apellidos, 'matricula'=>$matricula, 'email'=>$email), 'usuarios');

}
catch(Exception $e){
	echo $e->getMessage();
	exit();
}
?>
<br/>
<input type="button" value="Regresar" onClick="window.location.href='lista.php'"/>
