<?php
error_reporting(5);
include("con_db.php");
if (isset($_POST['enviar'])) {
	if ((strlen($_POST['Cedula']) >= 1)){
		$Cedulapaciente = trim($_POST['Cedula']);
		$consulta  = "SELECT Paciente.Nombrepaciente,
					Paciente.Apellidopaciente,
					procedimiento.Factura_IdFactura,
					procedimiento.Nombreproced,
					procedimiento.Motivoproced,
					procedimiento.FinaldadProced,
					procedimiento.Diagnosticoproced
        
				from procedimiento inner join factura on procedimiento.Factura_IdFactura = factura.IdFactura
				inner join paciente on factura.Paciente_IdPaciente = Paciente.IdPaciente where paciente.Cedulapaciente='$Cedulapaciente';";
		$query = mysqli_query($conex, $consulta);
		
		if($query ->num_rows > 0) {
			?>
			<div >
				<table class="table table-hover">
					<thead>
						<tr class="table-light">
						<th scope="col">Paciente</th> <th scope="col">Procedimiento</th> <th scope="col">Motivo</th>
						<th scope="col">Finalidad </th> <th scope="col">Diagnostico</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($query as $row){?>
						<tr class="table-light">
						<td><?php echo $row['Nombrepaciente'] ," ",$row['Apellidopaciente']?></td> <td><?php echo $row['Nombreproced']?></td> <td><?php echo $row['Motivoproced']?></td>
						<td><?php echo $row['FinaldadProced']?></td> <td><?php echo $row['Diagnosticoproced']?></td>
						</tr>
					</tbody>
					<?php
					}
					?>
				</table>
			</div>
			<?php
		} else {
			?>
				<h3 class="bad2"> Registro no encontrado. </h3>
			<?php
		}
	}else {
		?>
			<h3 class="bad2"> Por favor complete los campos! </h3>
		<?php
	}
}
?>