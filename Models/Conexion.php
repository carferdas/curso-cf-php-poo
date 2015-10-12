<?php namespace Models;

	class Conexion{

		private $datos = array(
			"host" => "host",
			"user" => "user",
			"pass" => "pass",
			"db" => "db"
		);
		private $con;

		public function __construct(){
			$this->con = new \mysqli($this->datos['host'], 
				$this->datos['user'], $this->datos['pass'],
				$this->datos['db']);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
	}

?>
