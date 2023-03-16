<?php

include "../Class/DB.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$id=$_GET['ID'];
$nome=$_GET['N'];
$Email=$_GET['E'];
$Pass=$_GET['P'];
PDOCommands::update_row("update utenti set Nome=?,Email=?,Password=? where ID=?",$nome,$Email,$Pass,$id);


?>