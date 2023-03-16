<?php
include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$idUser=$_GET['I'];
$date=date("d/m/Y");
$answer=json_encode(PDOCommands::get_row("Select * from sigarette where giorno=? AND ID_Utente=?",$date,$idUser));

if($answer==="null"){
    PDOCommands::update_row("insert into sigarette (giorno,ID_Utente) values (?,?)",$date,$idUser);    
    $toReturn=json_encode(["giorno"=>$date,"nSiga"=>0]);
    echo $toReturn;
}else{
    echo $answer;
}


?>