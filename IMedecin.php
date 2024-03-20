<?php 
include 'C:\Users\mon PC\OneDrive\Bureau\Projet_Annuel\projet-annuel\b_inscription.php'?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>S'inscrire</title>
</head>

<body>
    <div class="top-bar"> <b></b>
        <div class="logo">
            <!-- Icône pour le logo -->
            <a href="projet.html"><img src="img/logo.jpg" ></a>
        </div>
        <header>
            <h1>Pharmacicie la famille</h1>
        </header>
        <div class="search-bar">
            <input type="text" placeholder="Rechercher un produit...">
            <button type="button">Rechercher</button>
        </div>
        <div class="user-account">
            <!-- Icône pour l'espace de connexion -->
            <a href="connexion.html"><img src="img/compte.png" ></a>
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="cart">
            <!-- Icône pour l'espace de panier -->
            <a href="panier.html"><img src="img/panier.png" ></a>
        </div>
    </div>
    
    <div class="container1">
        <img src="img/medecin.jpg" alt="connexion" height ="200" >
        
    <div class="container2">
            <div class="icon"></div>
            <form action="/submit" method="post">
              <input type="text" placeholder="Prenom" required>
              <input type="text" placeholder="Nom" required>
              <input type="password" placeholder="Mot de passe" required>
              <input type="password" placeholder="Confirmer mot de passe" required>
              <input type="email" placeholder="Email" required>
              <input type="text" placeholder="RPPS/ n° sécurite sociale" required>
              <button type="submit">Confirmer</button>
            </form>
          </div>