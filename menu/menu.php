<!DOCTYPE HTML>
<html>
    <head>
        <title>centro odontologico</title>
        <meta charset="utf-8">
           <link href="css/style-menu.css" rel="stylesheet">
    </head>

    <body>
        <div id="header">
            <ul class="nav">
                <li><a href="">OdontoCenter</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Empleados</a>
                    <ul>
                        <li><a href="">Crear Empleado</a></li>
                        <li><a href="">Reporte Empleado</a> </li>
                        <li><a href="">Buscar Empleado por cedula</a>
                            <ul>
                                <li><a href="">Digitar Numero<br> de Cedula</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="">Historias Clinicas</a>
                    <ul>
                        <li><a href="../clinichistoryCreator.php">Crear Historia Clinica</a></li>
                        <li><a href="../reporteHistoriaClinica.php">Reporte Historia Clnica</a></li>
                        <li><a href="../BusquedaPorCedulaHC.php">Busqueda Historia<br>Clinica por Cedula</a></li>
                    </ul>
                </li>
                
                <li><a href="">Pacientes</a>
                    <ul>
                        <li><a href="">Crear Paciente</a></li>
                        <li><a href="">Reporte de paciente</a></li>
                        <li><a href="">Buscar Paciente<br>por Cedula</a>
                    <ul>
                        <li><a href="">Digitar Numero<br> de Cedula</a></li>
                    </ul>
                </li>
            </ul>
        </div>
	

    </body>
	<footer>
	<?php
		include("footer.php");
	?>
	</footer>
</html>