<?php

$db_name = 'expertise';
$charset = 'utf8';
$host = 'localhost';
$id = 'dc_dev';
$password = 'dc_dev';
$link = mysqli_connect($host, $id, $password);

if(!$link){
	$error = "Impossible de se connecter au serveur Mysql : " . $link;
	require "error.php";
	exit();
} 

if(!mysqli_set_charset($link, $charset)){
	$error = "Impossible de configurer l'encodage de la connexion à la base de données.";
	require "error.php";
	exit();
} 

if(!mysqli_select_db($link, $db_name)){
	$error = "La base de données est introuvable";
	require "error.php";
	exit();
}

?>