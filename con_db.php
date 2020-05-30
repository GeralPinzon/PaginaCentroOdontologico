<?php
//parametros de conexion:
//1. servidor(localhost)
//2. Nombre de usuario (administrador root)
//3. Contraseña (esta en blanco)
//4. base de datos que queremos seleccionar(registro)
error_reporting(5);

$conex=mysqli_connect("localhost:3307","root","","construccionsoftware");

if(!$conex){
	echo 'Error al conectar la base de datos';
}
else{
	echo '.';
}
?>