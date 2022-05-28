<?php

    session_start(); 
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Création de compte</title>
    <meta charset="UTF-8">
    <link href="ajouterMedecin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id = wrapper>

    <div id="header">
        <div id="logo_compte">
         <a href="seConnecter.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a>
        </div>
    </div>   

    <div id="box">
            
            <form action="confirmationAjoutMedecin.php" method="post">
                <h2>Ajouter un médecin</h2>
                <p>Veuillez renseigner ses informations.</p>
                <br>
                
                <input type="text" placeholder="Nom" name="nom" required>

                <input type="text" placeholder="Prénom" name="prenom" required>

                <input type="text" placeholder="Spécialité" name="specialite" required>

                <input type="text" placeholder="Bureau" name="bureau" required>

                <input type="text" placeholder="Téléphone" name="telephone" required>

                <input type="text" placeholder="Email" name="email" required>

                <input type="password" placeholder="Mot de passe" name="mdp" required>

                <input type="text" placeholder="url Planning" name="planning" required>

                <input type="text" placeholder="url photo" name="photo" required>

                <br>
                <input type="submit" id='submit' value='Ajouter le médecin à la base de données' >
            
        
            </form>
    </div>    


</div>


</body>

