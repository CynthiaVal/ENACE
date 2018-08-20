<? function conexion() 
{ $host = "localhost"; 
$usuario = "root"; 
$clave = "admin"; 
$BaseDeDato = "archivotacna";
$idCone = mysql_connect ($host, $usuario, $clave) or die ("Error conectando al servidor $host con el nombre de usuario $usuario");
mysql_select_db ($BaseDeDato, $idCone) or die ("Error seleccionando la base de datos"); return $idCone;}?>