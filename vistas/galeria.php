<?php 
	
	$controlador = new ControladorImagen();

	$resultado=$controlador->listarPortfolio();

 ?>

 <div class="container">
	<div class="row">
		<center>
			<hr>
			<?php while($row= mysqli_fetch_array($resultado)){ ?>
				<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
					<div class="contenedorFoto">
						<div class="foto">
							<?php echo "<a class='example-image-link' href=".$row['ruta']." data-lightbox='foto'><img src=".$row['ruta']." width='100%'></a>";?>
						</div>
					</div>
				</div>
			<?php } ?>
		</center>		
	</div>
 </div>