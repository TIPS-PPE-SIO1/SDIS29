<?php 
//Connexion SQL
include 'AcceeBaseDonne.php';
$Serveur = 'localhost';
$User = 'sdis';	
$MDP = 'Tips29';	
$Base = 'SDIS_DB_PF';		
$encryption_key = "sdfjksdfuSDhuifhspFfhp145fs25d";

$connexion = new mysqli($Serveur, $User,$MDP, $Base);

if ($connexion->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $connexion->connect_errno . ") " . $connexion->connect_error;
} 

$sql = "DELETE FROM CASERNE;";
$result = executeSQL_GE($sql);
?>