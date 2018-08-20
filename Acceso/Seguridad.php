<? session_start();if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envio a la página de autentificacion 
    header("Location: Index.php"); 
    //ademas salgo de este script 
    exit();}?>
