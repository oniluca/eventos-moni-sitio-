<?php 
	
	class conexion{

		private $host;
		private $user;
		private $pass;
		private $db;
		private $conexion;

		public function __construct(){

			$this->host="localhost";
			$this->user="root";
			$this->pass="1234";
			$this->db="eventosmoni";

			$this->conexion= new mysqli($this->host,$this->user,$this->pass);
			if($this->conexion){
				mysqli_select_db($this->conexion,$this->db);
			}

		}


		//consulta que no devuelve nada
		public function consultaSimple($sql){
			$this->conexion->query($sql);

		}

		//consulta que retorna resultado
		public function ConsultaRetorno($sql){
			$consulta=$this->conexion->query($sql);
			return $consulta;
		}

	}

 ?>