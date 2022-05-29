<?php

    session_start(); 
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Ajout d'un médecin</title>
    <meta charset="UTF-8">
    <link href="ajouterMedecin.css" rel="stylesheet" type="text/css" />
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
            
            <form action="confirmationAjoutMedecin.php" method="post">
                <h2>Ajouter un médecin</h2>
                <p>Veuillez renseigner ses informations.</p>
                <br>
                
                <input type="text" placeholder="Nom" name="nom" required>

                <input type="text" placeholder="Prénom" name="prenom" required>

                <input type="text" placeholder="Spécialité" name="specialite" required>

                <input type="text" placeholder="Bureau" name="bureau" required>

                <input type="number" placeholder="Téléphone" name="telephone" required>

                <input type="text" placeholder="Email" name="email" required>

                <input type="password" placeholder="Mot de passe" name="mdp" required>

                <input type="text" placeholder="url Planning" name="planning" required>

                <input type="text" placeholder="url photo" name="photo" required>
                
                <p>Jours de travail: </p>
                <br>
                <table align="center">
                    <tr>
                        <td><input type="checkbox" name="LundiAM"><label>Lundi AM</label></td>
                        <td><input type="checkbox" name="LundiPM"><label>Lundi PM</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="MardiAM"><label>Mardi AM</label></td>
                        <td><input type="checkbox" name="MardiPM"><label>Mardi PM</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="MercrediAM"><label>Mercredi AM</label></td>
                        <td><input type="checkbox" name="MercrediPM"><label>Mercredi PM</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="JeudiAM"><label>Jeudi AM</label></td>
                        <td><input type="checkbox" name="JeudiPM"><label>Jeudi PM</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="VendrediAM"><label>Vendredi AM</label></td>
                        <td><input type="checkbox" name="VendrediPM"><label>Vendredi PM</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="SamediAM"><label>Samedi AM</label></td>
                        <td><input type="checkbox" name="SamediPM"><label>Samedi PM</label></td>
                    </tr>
                </table>

                <br>
                <input type="submit" id='submit' value='Ajouter le médecin au registre' >
            
        
            </form>
    </div>    


</div>


</body>

