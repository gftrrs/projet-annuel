<?php 
include 'C:\Users\mon PC\OneDrive\Documents\LUCAS\L3 GBI\projet annuel\connexionBDD.php'?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pharmacie en ligne</title>
</head>
<body>
    <div class="top-bar">
        <div class="logo">
            <!-- Icône pour le logo -->
            <a href="projet.php"><img src="img/logo.jpg" ></a>
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
    <header>
        <h1>Bienvenue</h1>
    </header>
    <main>
        <!-- Contenu principal en fonction du type d'utilisateur (client, médecin, pharmacien) -->
    </main>
    <footer>
        <!-- Pied de page avec informations supplémentaires -->
    </footer>


    <table class="table">
        <tr>
          <td>
            <img src="img/humex.jpg" alt="Bouteille de pilules" height ="200" >
            <p>Humex Allergie Cétrizine 10 mg</p>
            <p>7.28€</p>
          </td>
          <td>
            <img src="img/myocalm.jpg" alt="myocalm" height ="200" >
            <p>Myocalm 30 Comprimés</p>
            <p>7.99€</p>
          </td>
          <td>
            <img src="img/rhinadvil.webp" alt="rhinadvil" height ="200" >
            <p>RhinAdvil® Rhume 200 mg/30 mg</p>
            <p>5.69€</p>
          </td>
          <td>
            <img src="img/doliprane.jpg" alt="Bouteille de pilules"height ="200">
            <p>Doliprane® Paracétamol 1000 mg</p>
            <p>2.18€</p>
          </td>
          <td>
            <img src="img/ibuprofene.jpg" alt="Bouteille de pilules"height ="200">
            <p>Ibuprofène Biogaran Conseil 200 mg</p>
            <p>3.80€</p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="img/aspririne.webp" alt="Bouteille de pilules"height ="200">
            <p>Aspirine Upsa® Vitaminée C</p>
            <p>4.42€</p>
          </td>
          <td>
            <img src="img/bion3.png" alt="Bouteille de pilules"height ="200">
            <p>BION 3 senior 30 comprimés</p>
            <p>14.36€</p>
          </td>
          <td>
            <img src="img/arnigel.webp" alt="Bouteille de pilules"height ="200">
            <p>Boiron® Arnigel®</p>
            <p>8.21€</p>
          </td>
          <td>
            <img src="img/humexRhume.webp" alt="humexRhume"height ="200">
            <p>humexRhume</p>
            <p>9.00€</p>
          </td>
          <td>
            <img src="img/nurofen.webp" alt="nurofen"height ="200">
            <p>Nurofen® Rhume 200 mg/30 mg</p>
            <p>5.75€</p>
          </td>
        </tr>  
      </table>
     
   
     
</body>
</html>