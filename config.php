<?php

//CONNEXION A LA BDD

try {

	$bdd = new PDO('mysql:host=sql25;dbname=ryz32731;charset=utf8', 'ryz32731', 'CALIFORNIA44', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (Exception $e) {

	die("Erreur : " . $e->getMessage());

}

//SESSION
session_start();




//VARIABLES
 $content = "";

//CHEMIN
//define("RACINE_SITE", "/espace_membre/");

//INCLUSIONS
 //require_once ("inc/function.php");
