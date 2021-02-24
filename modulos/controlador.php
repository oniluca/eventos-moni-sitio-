<?php 

	include_once("clases/imagen.php");

	class controladorImagen{

		private $imagen;

		//metodos

		public function __construct(){
			$this->imagen=new Imagen();
		}

		public function listarPortfolio(){
			$resultado=$this->imagen->listar();
			return $resultado; 
		}

		public function listarCarousel(){
			$resultado=$this->imagen->listarCarousel();
			return $resultado;
		}
	}
 ?>