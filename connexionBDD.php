<?php
$databaseHost = 'localhost';
$databaseName = 'ljourd04';
$databaseUsername = 'ljourd04';
$databasePassword = '22101353';

// Connexion à la base de données
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$mysqli) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>
