<?php 

	include_once('conexion.php');


 	class Imagen{

 		//atributos

 		private $id;
 		private $imagen;
 		private $conexion;
 	
	 	// metodos

	 	public function __construct(){
	 		$this->conexion= new Conexion ();
	 	}

	 	public function listar(){
	 		$sql="SELECT * from fotos ORDER BY id DESC";
	 		$resultado=$this->conexion->consultaRetorno($sql);
	 		return $resultado;
	 	}

	 	public function listarCarousel(){
	 		$sql="SELECT * from carousel";
	 		$resultado=$this->conexion->consultaRetorno($sql);
	 		return $resultado;
	 	}



 	}

 ?>

