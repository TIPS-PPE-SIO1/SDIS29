<?php 
//Connexion SQL
$Serveur = 'localhost';
$User = 'sdis';	
$MDP = 'Tips29';	
$Base = 'SDIS29';		
$encryption_key = "sdfjksdfuSDhuifhspFfhp145fs25d";

$db = new mysqli($Serveur, $User,$MDP, $Base);

if ($db->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $db->connect_errno . ") " . $db->connect_error;
} 

?>