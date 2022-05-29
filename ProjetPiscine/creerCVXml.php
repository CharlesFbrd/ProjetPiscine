<?php

session_start(); 

?>


<!DOCTYPE html>
<html>
<head>
<title>Informations CV</title>
<meta charset="UTF-8">
<link href="ajouterMedecin.css" rel="stylesheet" type="text/css" />
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

<div id="box">

        <form action="creationCVXml.php" method="post">
            <h2>Ajouter le CV d'un médecin</h2>
            <p>Veuillez renseigner ses informations.</p>
            <br>

            <input type="text" placeholder="Nom" name="nom" required>

            <input type="text" placeholder="Prénom" name="prenom" required>

            <input type="date" placeholder="Date de naissance" name="dateDeNaissance" required>

            <input type="text" placeholder="Adresse" name="adresse" required>

            <input type="text" placeholder="Email" name="email" required>

            <input type="text" placeholder="Intitulé du diplôme" name="libelle" required>

            <input type="text" placeholder="Année d'obtention" name="annee" required>

            <input type="text" placeholder="Institution" name="institution" required>

            <input type="text" placeholder="Poste" name="poste" required>

            <input type="text" placeholder="Mission" name="mission" required>

            <input type="date" placeholder="Début de prise de poste" name="debut" required>

            <input type="date" placeholder="Fin de prise de poste" name="fin" required>

            <input type="text" placeholder="Entreprise" name="entreprise" required>


            <br>
            <input type="submit" id='submit' value='Ajouter ce CV' >


        </form>
</div>


</div>


</body>

</html>