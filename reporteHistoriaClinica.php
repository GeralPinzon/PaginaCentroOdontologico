<!DOCTYPE html>
<html>
<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<?php include("reportarHC.php");?>
	<title>ReporteHistoriaClinica</title>
	<link rel="stylesheet" type="text/css" href="css/style-clinichistoryCreator.css">
</head>
<body>
	
	<section class="userCreation">
		<h4>Reportes de Historias Clinicas</h4>
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
	
	</section>
	
	
</body>
</html>