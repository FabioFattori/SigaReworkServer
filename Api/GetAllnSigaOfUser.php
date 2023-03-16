<?php

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$idUser=$_GET['I'];
echo json_encode(PDOCommands::get_rows("Select * from sigarette where ID_Utente=?",$idUser));
?>