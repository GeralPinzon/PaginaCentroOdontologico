<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
			<title>BusquedaHistoriaClinica</title>
			<link rel="stylesheet" type="text/css" href="css/style-clinichistoryCreator.css"/>
		</head>
		<body>
			<form method="POST">
				<section class="userCreation">
					<h4>Busqueda de Historias Clinicas</h4>
					<div class="div">
						<h4 style="font-weight: normal;">Ingrese la cedula del paciente:</h4>
						<input class="config" type="text" name="Cedula" id="Cedula" maxlength="10" placeholder="Numero de cedula" required pattern="[0-9]*" title="Numeros en un rango de [0-9]"/>
						<input class="btnconsulta" type="submit" value="Buscar" name="enviar"/>
						
					</div>
					
					<?php include("reporteBusquedaCedulaHC.php" );?>
				</section>
			</form>
		</body>
	</html>