<?php

    session_start(); 

?> 

<!DOCTYPE html>
<html>
<head>
    <title>Se connecter</title>
    <meta charset="UTF-8">
    <link href="connexion.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id = wrapper>

    <div id = header>
        <img src="logoOmnesSante.png" alt="logoOmnesSante" width="200" height="80"></img>
        <div id="boxRetour" >
            <form id = "formRetour" action="seConnecter.php">
                    <input id="btnRetour" type="submit" value="Retour">
            </form>
        </div>
        
    </div>

    <div id="box">

            <form action="verificationPatient.php" method="post">
                <h2>Connexion</h2>
                <br>

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrez le nom d'utilisateur" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez le mot de passe" name="mdp" required>
                <br>
                <p id = "error">
                        <?php
                            echo "" .$_SESSION["erreurConnexionPatient"]; 
                        ?>
                </p>
                <input type="submit" id='submit' value='Se connecter' >


            </form>
    </div>

    <div id="boxNvPatient">

            <form action="formulaireCreationCompte.php" method="post">
                <h3>Nouveau patient ?</h3>

                <input type="submit" id='submit' value="Je m'inscris" >

            </form>
    </div>


</div>


</body>