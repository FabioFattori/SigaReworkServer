<?php

//localhost/SigaReworkServer/Api/GetSiga.php?I=2

include '../Class/DB.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$nome=$_GET['N'];
$Email=$_GET['E'];
$Pass= $_GET['P'];
//check if utente already exist
if(PDOCommands::get_row("Select * from utenti where utenti.Email=? && utenti.Password=?",$Email,$Pass)==null){
    
    echo json_encode(PDOCommands::update_row("INSERT INTO utenti (Nome,Email,Password) VALUES (?,?,?)",$nome,$Email,$Pass));
}
?>