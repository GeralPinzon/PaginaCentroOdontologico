<?php
include("con_db.php");
if (isset($_POST['enviar'])) {
	if ((strlen($_POST['Codigocita']) >= 1) &&  strlen($_POST['CodigoFactura']) >= 1 && 
	(strlen($_POST['NombreProcedimiento']) >= 1) && strlen($_POST['config1']) >= 1 && 
	(strlen($_POST['config2']) >= 1) && strlen($_POST['config3']) >= 1) {
		$Cita_IdCita = trim($_POST['Codigocita']);
		$Factura_IdFactura = trim($_POST['CodigoFactura']);
		$Nombreproced = trim($_POST['NombreProcedimiento']);
		$Motivoproced = trim($_POST['config1']);
		$Finaldadproced = trim($_POST['config2']);
		$Diagnosticoproced = trim($_POST['config3']);
		$consulta= "INSERT INTO `procedimiento`( `Nombreproced`, `Motivoproced`, `Finaldadproced`, `Diagnosticoproced`, `Cita_IdCita`, `Factura_IdFactura`) 
													VALUES ('$Nombreproced','$Motivoproced','$Finaldadproced','$Diagnosticoproced','$Cita_IdCita', '$Factura_IdFactura')";
		$resultado = mysqli_query($conex, $consulta);
		if($resultado) {
			?>
				<h3 class="ok"> Datos enviados correctamente! </h3>
			<?php
		} else {
			?>
				<h3 class="bad"> Ha ocurrido un error! </h3>
			<?php
		}
	
	}	else {
		?>
			<h3 class="bad"> Por favor complete los campos! </h3>
		<?php
	}
}
?>