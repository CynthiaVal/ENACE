<? session_start();if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envio a la p�gina de autentificacion 
    header("Location: Index.php"); 
    //ademas salgo de este script 
    exit();}?>
