
<?php

    session_start(); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un CV</title>
    <meta charset="UTF-8">
    <!-- <link href="seConnecter.css" rel="stylesheet" type="text/css" /> -->
</head>

<body>

<?php
    $CV = simplexml_load_file('test.xml');
    echo "Lecture OK via la fonction simplexml_load_file(). Contenu : \n" ;
    print_r($CV);
?> 

<h3> ETAT CIVIL </h3>
<p> 
    Nom : <?php echo $CV->etatCivil->nom ?> <br>
    Prénom : <?php echo $CV->etatCivil->prenom ?> <br>
    Adresse : <?php echo $CV->etatCivil->adresse ?> <br>
    Date de naissance : <?php echo $CV->etatCivil->dateDeNaissance ?> <br>
    Email : <?php echo $CV->etatCivil->email ?> <br>
</p>

<h3> DIPLÔMES </h3>
<p> 
    Titre : <?php echo $CV->etatCivil->libelle ?> <br>
    Année : <?php echo $CV->etatCivil->annee ?> <br>
    Institution : <?php echo $CV->etatCivil->institution ?> <br>
    <br>
    Titre : <?php echo $CV->etatCivil->libelle ?> <br>
    Année : <?php echo $CV->etatCivil->annee?> <br>
    Institution : <?php echo $CV->etatCivil->institution ?> <br>

</p>


<h3> EXPÉRIENCE </h3>
<p> 
    Poste : <?php echo $CV->etatCivil->poste ?> <br>
    Début de la prise de poste : <?php echo $CV->etatCivil->debut ?> <br>
    Fin de la prise de poste : <?php echo $CV->etatCivil->fin ?> <br>
    Mission : <?php echo $CV->etatCivil->mission ?> <br>
    Entreprise : <?php echo $CV->etatCivil->mission ?> <br>
    <br>
    Poste : <?php echo $CV->etatCivil->poste ?> <br>
    Début de la prise de poste : <?php echo $CV->etatCivil->debut ?> <br>
    Fin de la prise de poste : <?php echo $CV->etatCivil->fin ?> <br>
    Mission : <?php echo $CV->etatCivil->mission ?> <br>
    Entreprise : <?php echo $CV->etatCivil->mission ?> <br>

</p>

    
</body>
</html>