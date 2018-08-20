<?php
// Fichero: Conexion.php
function conec_db() {
	 $host = "localhost"; 
	 $usuario = "root"; 
	 $clave = "admin"; 
	 $BaseDeDato = "archivotacna";
$enlace = mysql_connect ($host, $usuario, $clave) or die ("Error conectando al servidor $host con el nombre de usuario $usuario");
mysql_select_db ($BaseDeDato, $enlace) or die ("Error seleccionando la base de datos"); return $enlace; } ?>