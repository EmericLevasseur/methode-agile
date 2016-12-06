<?php

$host = "localhost";
$dbName = "bthem";
$user = "iim";
$password = "iim";

try
{
	$db = new PDO("mysql:host=".$host.";dbname=".$dbName.";charset=utf8", $user, $password);
}
catch(Expection $e)
{
	die("Erreur : ".$e->getMessage());
}
?>