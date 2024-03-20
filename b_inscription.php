<?php
   include('connexionBDD.php');
    

    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['Prenom']) && isset($_POST['RPPS/ n° sécurite sociale']) && isset($_POST['Nom'])) {
        // saisir les données de l'utilisateur 
        $MailP = $_POST['email'];
        $password = $_POST['password'];
        $PrenomP = $_POST['Prenom'];
        $RPPS = $_POST['RPPS/ n° sécurite sociale'];
        $NomP = $_POST['Nom'];

        //Encrypter le mot de passe
        $password = md5($password);

        // voir si l'utilisateur existe déjà
        $sql = "SELECT * FROM medecin WHERE email='$MailP'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Erreur : Un medecin avec cet email existe déjà";
        } else {
            // insérer un nouvel utilisateur 
            $sql = "INSERT INTO medecin (MailP, password, PrenomP, NomP, RPPS) VALUES ('$MailP', '$password', '$PrenomP', '$NomP', '$RPPS')";
            if ($conn->query($sql) === TRUE) {
                echo "Inscription réussie";
                header('Location: AccueilPersoPharmacien.html');
            } else {
                echo "Erreur : " . $sql . "<br>" . $conn->error;
            }
        }
    }
    $conn->close();
?>