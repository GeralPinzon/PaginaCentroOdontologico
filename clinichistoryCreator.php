<!DOCTYPE html>
<html>
<head>
	<title>clinichistoryCreatorCreation</title>
	<link rel="stylesheet" type="text/css" href="css/style-clinichistoryCreator.css">
</head>
<body>
<form method="POST">
	<section class="userCreation">
		<h4>Registro de Historia Clinica</h4>

		<div class="div">
			<input class="config" type="text" name="Codigocita" id="Codigocita" maxlength="10" placeholder="Codigo de la cita">
			<input class="config" type="text" name="CodigoFactura" id="CodigoFactura" maxlength="10" placeholder="Codigo de factura">
			<input class="config" type="text" name="NombreProcedimiento" id="NombreProcedimiento" placeholder="Nombre de Procedimiento">
		</div>

			<div class="label1">
				
					Motivo de procedimiento:
				 
			</div>	
			<div class="area1">
				<textarea class="config" id="config1" name="config1" placeholder="Escriba la causa que produjo la inmediatez del procedimiento" rows="10" cols="10" maxlength="1000"></textarea>
			</div>
			
			<div class="label2">
				
					Fin de procedimiento:
				
			</div>
			<div class="area2">
				<textarea class="config" name= "config2" id="config2" placeholder="Escriba la conclucion resumida y detallada del procedimiento medico" rows="10" maxlength="1000"></textarea>
			</div>

			<div class="label3">
				
					Diagnostico del procedimiento:
				
			</div>
			<div class="area3"> 
				<textarea class="config" id="config3" name="config3" placeholder="Escribir el Diagnostico del paciente" rows="10" ></textarea>
			</div>
		<div class="btn1">
			<input class="btn" type="submit" value="Registrar Historia Clinica" name="enviar">
		</div>		
	</section>
	</form>
	<?php include("registrarHistoriaClinica.php");?>
</body>
</html>