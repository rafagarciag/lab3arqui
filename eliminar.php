<?
require('usuario.php');

$matricula=$_GET['$matricula'];
$nuev = new Usuario();
$nuev->delete($matricula);

echo 'Eliminado';

?>
