<?
require('mysql.php');
class Usuario extends MySQL {
	private $matricula;
	private $nombre;
	private $apellidos;
	private $email;
	private $tabla = 'usuarios';
	
	public function __construct(){}
	
	//sets	
	public function setMatricula($mat){
		$this->matricula=$mat;
	}
	
	public function setNombre($nom){
		$this->nombre=$nom;
	}

	public function setApellidos($apellid){
		$this->apellidos=$apellid;
	}

	public function setEmail($correo){
		$this->email=$correo;
	}
	
	// Traer todo un renglon 
	public function fetch($id){
		$row = $this->query("SELECT * FROM $this->tabla WHERE matricula='$id'");
		
		$row = $this->fetchRow();
			
		//if(!$row=mysql_query("SELECT * FROM $this->tabla WHERE id='$id'")){
			//throw new Exception('Error en el fetch');
		
		return $row;
	}
	
	// insertar un renglon nuevo
	public function insert(){
		if(!mysql_query("INSERT INTO $this->tabla (matricula,nombre,apellidos,email) VALUES ('$this->matricula','$this->nombre','$this->apellidos','$this->email')")){
			throw new Exception('Error insertando renglón');
		}
	}
	
	// Hacer update
	public function update(){
		$quer = "UPDATE $this->tabla SET matricula='$this->matricula',nombre='$this->nombre' ,apellidos='$this->apellidos',email='$this->email' WHERE matricula='$this->matricula'";
		mysql_query($quer);
		echo $quer;
	}
	
	// Eliminar renglon
	public function delete($id){
		$quer = "DELETE FROM $this->tabla WHERE matricula='$id'";
		mysql_query($quer);
		
		
	}


}
?>
