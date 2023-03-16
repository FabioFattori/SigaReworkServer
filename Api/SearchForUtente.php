<?php


//localhost/RoamRightServer/Api/SearchForUtente.php?P=prova&E=mamma

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$Email=$_GET['E'];
$Pass= $_GET['P'];


    echo json_encode(PDOCommands::get_row("Select * from utenti where utenti.Email=? && utenti.Password=?",$Email,$Pass));



?>