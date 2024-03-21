<!DOCTYPE html>
<?php
   include('connexionBDD.php');?>
 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pharmacie en ligne</title>
    <div class="top-bar">
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
            <a href="#"><img src="img/panier.png" ></a>
        </div>
    </div>
    </head>
    <body>
        <?php 
        while ($row = $result->fetch_assoc()){
            echo '<div class="..">';
            echo "<a href='detail.php?num_personne=<?php echo $ID_user ?>'><img src='images/photominiature/". $donnees['num_personne']."_".$donnees['photo_personne']."'></a>";
            echo '<div class="image"><img src="Projet-annuel/img' . urlencode($row['Nom']).'">;

        }
    </html>

    


