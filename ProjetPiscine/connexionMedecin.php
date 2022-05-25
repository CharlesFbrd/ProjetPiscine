<?php 

    session_start(); 

?> 


<!DOCTYPE html>
<html>
<head>
    <title>Connexion Espace Médecins</title>
    <meta charset="UTF-8">
    <link href="connexion.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>

    <div id="header">
        <div id="logo_compte">
             <a href="seConnecter.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a>
        </div>
    </div>   
    
    <div id="box">
                <form action="verificationMedecin.php" method="post">
                    <h2>Connexion</h2> 
                    <p> Espace Médecins</p>
                    <br>
                    
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrez votre email" name="email" required> <!-- required = booleen pour remplissage formulaire -->
        
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrez votre mot de passe" name="mdp" required>
                    <br>
                    <p id = "error">
                        <?php
                            echo "" .$_SESSION["erreurConnexionMedecin"]; 
                        ?>
                    </p>
                    <input type="submit" id='submit' value='Se connecter' >
                
                </form>
    </div>    

</div>


</body>

