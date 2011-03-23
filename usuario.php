<?
class MySQL{

	public $resultado;
	
	//para conectarse a la base de datos y seleccionar una base de datos
	public function __construct($host='localhost',$user='root',$password='admin',$database='arqui_lab'){
	
		if(!$conexion=mysql_connect($host,$user,$password)){
			throw new Exception('Error conectándose al servidor');
		}
		
		if(!mysql_select_db($database,$conexion)){
			throw new Exception('Error seleccionando base de datos');
		}
	}
	
	//para hacer una query
	public function query($query){
		if(!$this->resultado=mysql_query($query)){
			throw new Exception('Error al intentar hacer la query: '.$query);
		}
	}
	
	//para traer una tupla
	public function fetchRow(){
		while($row=mysql_fetch_array($this->resultado)){
			return $row;
		}
		return false;
	}
	
	//regresa un arreglo con todas las tuplas
	public function fetchAll($tabla){
		$this->query('SELECT * FROM '.$tabla);
		$rows=array();
		while($row=$this->fetchRow()){
			$rows[]=$row;
		}
		return $rows;
	}
	
	//insertar nuevo registro
	//public function insert($params,$table){
		//$sql='INSERT INTO '.$table.'(matricula, nombre, apellidos, email) VALUES ('."'".$params->matricula."'".','."'".$params->nombre."'".','."'".$params->apellidos."'".','."'".$params->email."'".')';
		//$this->query($sql);
	//}
}

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
?>
