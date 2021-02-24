<?php 

	class Enrutador{
		//funcion se encarga de cargar la vista dependiendo lo que se elija
		public function cargarVista($vista){

			switch ($vista) {
				case 'inicio':
					include_once('vistas/'.$vista.'.php');
				break;

				case 'servicios':
					include_once('vistas/'.$vista.'.php');
				break;

				case 'galeria':
					include_once('vistas/'.$vista.'.php');
				break;

				case 'contacto':
					include_once('vistas/'.$vista.'.php');
				break;
				
				default:
					include_once('vistas/error.php');
					break;
			}
		}

		//funcion carga por defecto la vista si no recibe nada
		public function validarGet($variable){
			if (empty($variable)) {
				include_once('vistas/inicio.php');
			}else{
					return true;

			}
		}
	}
 ?>