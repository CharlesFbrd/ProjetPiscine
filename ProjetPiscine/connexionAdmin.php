<?php

    session_start(); 
  
?>


<!DOCTYPE html>
<html>
<head>
    <title>Connexion Espace Admin</title>
    <meta charset="UTF-8">
    <link href="connexion.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>

    <div id="header">
        <img src="logoOmnesSante.png" alt="logoOmnesSante" width="200" height="80"></img>
        <div id="boxRetour" >
            <form id = "formRetour" action="seConnecter.php">
                    <input id="btnRetour" type="submit" value="Retour">
            </form>
        </div>
    </div>   
    
    <div id="box">
                <form action="verificationAdmin.php" method="post">
                    <h2>Connexion</h2> 
                    <p>Espace Administrateurs</p>
                    <br>
                    
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrez votre email" name="email" required> <!-- required = booleen pour remplissage formulaire -->
        
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrez votre mot de passe" name="mdp" required>
                    <br>
                    <p id = "error">
                        <?php
                            echo "" .$_SESSION["erreurConnexionAdmin"]; 
                        ?>
                    </p>
                    <input type="submit" id='submit' value='Se connecter' >
                
                </form>
    </div>    

</div>


</body>
</html>


