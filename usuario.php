class Usuario {
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
		if(!$row=mysql_query("SELECT * FROM $this->tabla WHERE id='$id'")){
			throw new Exception('Error en el fetch');
		}
	return $row;
	}
	
	// insertar un renglon nuevo
	public function insert(){
		if(!mysql_query("INSERT INTO $this->tabla (nombre,apellidos,email) VALUES ($this->matricula,$this->nombre,$this->apellidos,$this->email)")){
			throw new Exception('Error insertando renglón');
		}
	}
	
	// Hacer update
	public function update($id){
		if(!mysql_query("UPDATE $this->tabla SET matricula='$this->matricula',nombre='$this->nombre,apellidos=$this->apellidos,email=$this->email WHERE id='$id'")){
			throw new Exception('Error en el update');
		}
	}
	
	// Eliminar renglon
	public function delete($id){
		if(!mysql_query("DELETE FROM $this->tabla WHERE id='$id'")){
			throw new Exception('Error eliminando');
		}
	}


}
