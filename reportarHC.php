<?php
error_reporting(5);
 include("con_db.php");
$consulta  = "SELECT Paciente.Nombrepaciente,
				Paciente.Apellidopaciente,
				procedimiento.Factura_IdFactura,
				procedimiento.Nombreproced,
				procedimiento.Motivoproced,
				procedimiento.FinaldadProced,
				procedimiento.Diagnosticoproced
        
			from procedimiento inner join factura on procedimiento.Factura_IdFactura = factura.IdFactura
			inner join paciente on factura.Paciente_IdPaciente = Paciente.IdPaciente;";
$query = mysqli_query($conex, $consulta);
?>