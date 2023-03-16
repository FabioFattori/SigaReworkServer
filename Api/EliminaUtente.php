<?php

include "../Class/DB.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$idToDelete=$_GET['ID'];


//Cancella utente
PDOCommands::update_row("Delete from utenti where ID=?",$idToDelete);
//cancella tutte le siga dell'utente
        
    $SigaCreateDaUtente=PDOCommands::get_rows("Select * from sigarette where ID_Utente=?",$idToDelete);

    for ($f=0; $f < count($SigaCreateDaUtente); $f++) { 
        PDOCommands::update_row("Delete from sigarette where ID_Utente=?",$idToDelete);
    }
?>