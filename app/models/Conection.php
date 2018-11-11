<?php 
class Db{
	/*
	Se asegura que solo se conecta una sola vez
	*/
	protected static $conection;

	/*
	Conexion a la base de datos
	*/
	public function connect(){
		if(!isset(self::$conection)){
			self::$conection = new myqli(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		}
		if(self::$conection === false){
			/*Error de prueba, de prueba*/
			echo "<h1 style='color: red;'>ERROR EN LA CONEXION</h1><br>";
			return false;
		}
		return self::$conection;
	}
	/*
	Hacer consultas a la base de datos INSERTAR,BORRAR,UPDATE
	*/
	public function query($query){
		$coneccion = $this->connect();
		$result = $coneccion->query($query);

		return $result;
	}
	/*
	Consultas a la base de datos SELECIONAR
	*/
	public function select($query){
		$rows = array();
		$result = $this->query($query);

		if($result === false){
			return false;
		}
		while($row = $result->fetch_assoc()){
			$rows[] = $row;
		}
		return $rows;
	}
	/*
	Mensaje de error
	*/
	public function error(){
		$connection = $this->connect();
		return $connection->error;
	}
	/*
	Limpia strings, evitando sql injection
	*/
	public function quote($value){
		$connection = $this->connect();
		return "'" . $connection -> real_escape_string($value) . "'";
	}
} 

/**
Ejemplo de consulta 

$db = new Db;

$resultado = $db->query("INSER INTO 'users'  ('username','password') VALUES (" . $name . "," . $pass . ")");
*/
?>