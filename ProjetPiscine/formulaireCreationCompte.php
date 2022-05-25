<?php

    session_start(); 
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Création de compte</title>
    <meta charset="UTF-8">
    <link href="creationCompte.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id = wrapper>

    <div id="header">
        <div id="logo_compte">
         <a href="seConnecter.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a>
        </div>
    </div>   

    <div id="box">
            
            <form action="creationCompte.php" method="post">
                <h2>Création de compte</h2>
                <p>Ce compte vous permettra de gérer vos rendez-vous.</p>
                <br>
                
                <input type="text" placeholder="Nom" name="nom" required>

                <input type="text" placeholder="Prénom" name="prenom" required>

                <input type="text" placeholder="Email" name="email" required>

                <input type="text" placeholder="Numéro de téléphone" name="telephone" required>

                <input type="text" placeholder="Numéro de carte vitale" name="nCarteVitale" required>

                <input type="text" placeholder="Adresse" name="adresse1" required>

                <input type="text" placeholder="Complément d'adresse" name="adresse2">

                <input type="text" placeholder="Code postal" name="codePostal" required>

                <input type="text" placeholder="Ville" name="ville" required>

                <input type="text" placeholder="Pays" name="pays" required>
    
                <input type="password" placeholder="Mot de passe" name="mdp" required>

                <input type="password" placeholder="Confirmez votre mot de passe" name="mdpC" required>

                <p id = "error">
                        <?php
                            echo "" .$_SESSION["erreurCreationCompte"]; 
                        ?>
                </p>

                <br>
                <input type="submit" id='submit' value='Créer mon compte' >
            
        
            </form>
    </div>    


</div>


</body>

