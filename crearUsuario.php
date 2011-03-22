<?
require('mysql.php');
$nombre = $POST['nombre'];
$apellidos = $POST['apellidos'];
$matricula = $POST['matricula'];
$email = $POST['email'];

try{
	$bd = new MySQL('localhost', 'root', 'admin', 'arqui_lab');
	
	$bd->insert(array('nombre'=>$nombre, 'apellidos'=>$apellidos, 'matricula'=>$matricula, 'email'=>$email), 'usuarios');

}
catch(Exception $e){
	echo $e->getMessage();
	exit();
}
?>
