<?php

    session_start(); 
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Création de compte</title>
    <meta charset="UTF-8">
    <link href="supprimerMedecin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id = wrapper>

    <div id = header>
        <img src="logoOmnesSante.png" alt="logoOmnesSante" width="200" height="80"></img>
        <div id="boxRetour" >
            <form id = "formRetour" action="AjouterSupprimerM.php">
                    <input id="btnRetour" type="submit" value="Retour">
            </form>
        </div>
        
    </div> 

    <div id="box">
            
            <form action="confirmationSuppMedecin.php" method="post">
                <h2>Supprimer un médecin</h2>
                <p>Veuillez renseigner ses informations.</p>
                <br>
                
                <input type="text" placeholder="Nom" name="nom" required>

                <input type="text" placeholder="Prénom" name="prenom" required>

                <input type="text" placeholder="Email" name="email" required>

                <br>
                <input type="submit" id='submit' value='Supprimer le médecin du registre' >
            
        
            </form>
    </div>    


</div>


</body>

