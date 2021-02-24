<?php 

	if(isset($_POST['enviar'])){
		$nombre = $_POST['txt_nombre'];
		$email = $_POST['txt_email'];
		$mensaje = $_POST['txt_mensaje'];
		$msj="mensaje de ".$nombre."  ".$email."<br>".$mensaje;
		mail("consultas@jdfotografia.com", "mensaje pagina web", $msj);
	}
 ?>
<div class="container-fluidd">
	<div class="container">
		<p class="Raleway">
					Dejanos tu mensaje
		</p>
		<hr>
		 <form action="" method="POST" >
		 	<center>
		 		<label class="label">NOMBRE</label>
		 		<br>
		 		<input class="form-control" type="text" name="txt_nombre" placeholder="Nombre" pattern="[a-zA-Z| ]*" title="solo caracteres alfanumericos" required></input>
		 		<br>
		 		<label class="label">EMAIL</label>
		 		<br>
		 		<input class="form-control" type="email" name="txt_email" placeholder="Email" required></input>
		 		<br>
		 		<label class="label">MENSAJE</label>
				<br>
				<textarea class="form-control" name="txt_mensaje"rows="10" cols="50" placeholder="Mensaje" pattern="[a-zA-Z|1-9]*"></textarea>
				<br></br>
				<button class="btn btn-success" type="submit" name="enviar" value="enviar">Enviar</button>		
			</center> 
		 </form>
	</div>
</div>

