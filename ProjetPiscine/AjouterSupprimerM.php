<?php

    session_start(); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Maj médecins</title>
    <meta charset="UTF-8">
    <link href="ajouterSupprimerM.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>

    <div id = header>
        <img src="logoOmnesSante.png" alt="logoOmnesSante" width="200" height="80"></img>
        <div id="boxRetour" >
            <form id = "formRetour" action="profilAdmin.php">
                    <input id="btnRetour" type="submit" value="Retour">
            </form>
        </div>
        
    </div>

    <div id="boxProfils">

        <form action="ajouterMedecin.php">
            <h2> Que souhaitez-vous faire ? </h2>
            <br>
            <input type="submit" value="Ajouter un médecin">
        </form>
        <form action="supprimerMedecin.php">
            <input type="submit" value="Supprimer un médecin">
        </form>
        
     </div>    


</div>
    
</body>
</html>