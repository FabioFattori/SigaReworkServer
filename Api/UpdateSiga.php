<?php


include "../Class/DB.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$n=$_GET['N'];
$id=$_GET['I'];
$data=date("d/m/Y");

PDOCommands::update_row("update sigarette (nSiga) values (?) where ID_Utente=? AND giorno=?",$n,$id,$data);

?>