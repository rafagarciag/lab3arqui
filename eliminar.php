<?
require('usuario.php');

$matricula = $_GET['matricula'];
$con = new MySQL('localhost', 'root', 'admin', 'arqui_lab');
$nuev = new Usuario();
$nuev->delete($matricula);

echo 'Eliminado';
?>
<br/>
<input type="button" value="Regresar" onClick="window.location.href='lista.php'"/>


