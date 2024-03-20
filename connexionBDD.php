<?php

$dbname="mysql:host=localhost;dbname=ljourd04;charset=utf8";
$username= "ljourd04";
$userpassword= "22101353";

try {
    $bdd= new PDO($dbname,$username,$userpassword);
    echo("connexion réussi");

}
catch(exception $e){
    die("erreur : ".$e -> getMessage());

}
?> 