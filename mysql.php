<?
class MySQL{

	private $resultado;
	
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
		if(!$this->reultado=mysql_query($query)){
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
	public function fetchAll($tabla='usuarios'){
		$this->query('SELECT * FROM '.$tabla);
		$rows=array();
		while($row=$this->fetchRow()){
			$rows[]=$row;
		}
		return $rows;
	}
	
	public function insert($params,$table){
		$sql='INSERT INTO '.$table.' ('.implode(',',array_keys($params)).') VALUES (''.implode("','",array_values($params)).'')';
		$this->query($sql);
	}
}
?>
