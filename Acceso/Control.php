<?php
//ini_set("session.use_only_cookies","1"); 
//ini_set("session.use_trans_sid","0"); 

//conecto con la base de datos 
$conn = mysql_connect('localhost','root','admin'); 
//selecciono la BBDD 
mysql_select_db("archivotacna",$conn); 

//Sentencia SQL para buscar un usuario con esos datos 
$ssql = "SELECT * FROM usuario WHERE Usuario='$usuario' and Clave='$contrasena'"; 
//$sql= "SELECT * FROM usuarios WHERE Usuario='$usuario'";
//Ejecuto la sentencia 
$rs = mysql_query($ssql,$conn); 
//$campo=mysql_fetch_array($rs);
//$Tipo = $campo["Tipo"];
//vemos si el usuario y contrase�a es v�ildo 
//si la ejecuci�n de la sentencia SQL nos da alg�n resultado 
//es que si que existe esa conbinaci�n usuario/contrase�a 
if (mysql_num_rows($rs)!=0){ 
    //usuario y contrase�a v�lidos 
    //defino una sesion y guardo datos 
    session_start(); 
    session_register("autentificado"); 
	$_SESSION["k_username"] = $usuario;
	$_SESSION["k_password"] = $contrasena;
	$autentificado = "SI"; 
 	header("Location: ../Ayuda.php");}
else { 
    //si no existe le mando otra vez a la portada 
    header("Location: ../Index.php?errorusuario=si"); 
} 
mysql_free_result($rs); 
mysql_close($conn); 
?> 
