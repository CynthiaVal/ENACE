<?php 
include_once 'buscanot.php';
echo json_encode(prog($_GET['term']));
?>