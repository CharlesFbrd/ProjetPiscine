<?php

    session_start();
    
    $nom= isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $email = isset($_POST["email"])? $_POST["email"] : "";
    $adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
    $dateDeNaissance = isset($_POST["dateDeNaissance"])? $_POST["dateDeNaissance"] : "";
    $libelle = isset($_POST["libelle"])? $_POST["libelle"] : "";
    $annee = isset($_POST["annee"])? $_POST["annee"] : "";
    $institution = isset($_POST["institution"])? $_POST["institution"] : "";
    $poste = isset($_POST["poste"])? $_POST["poste"] : "";
    $dateDebut = isset($_POST["debut"])? $_POST["debut"] : "";
    $dateFin = isset($_POST["fin"])? $_POST["fin"] : "";
    $mission = isset($_POST["mission"])? $_POST["mission"] : "";
    $entreprise = isset($_POST["entreprise"])? $_POST["entreprise"] : "";

    $nomFichier = "CV".$nom.".xml"; 

    echo "" .$nomFichier; 

    $xml = new XMLWriter();
    $xml->openUri($nomFichier);
    $xml->startDocument('1.0', 'utf-8');
    $xml->startElement('CV');

    $xml->startElement('etatCivil');
    $xml->writeElement('nom', $nom);
    $xml->writeElement('prenom', $prenom);
    $xml->writeElement('adresse', $adresse);
    $xml->writeElement('dateDeNaissance', $dateDeNaissance);
    $xml->writeElement('email', $email);
    $xml->endElement();

    $xml->startElement('diplomes');
    $xml->writeElement('libelle', $libelle);
    $xml->writeElement('annee', $annee);
    $xml->writeElement('institution', $institution);
    $xml->endElement();

    $xml->startElement('experiences');
    $xml->writeElement('debut', $dateDebut);
    $xml->writeElement('fin', $dateFin);
    $xml->writeElement('entreprise', $entreprise);
    $xml->writeElement('poste', $poste);
    $xml->writeElement('mission', $mission);
    $xml->endElement();
    
    $xml->endElement();

?> 
<!DOCTYPE html>
<html>
<head>
    <title>CV ajouté</title>
    <meta charset="UTF-8">
    <link href="medecinAjoute.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>

<?php 


?>

    <div id="box">
                <form action="profilAdmin.php" method="post">
                    <h2>Confirmation</h2> 
                    <br>
                    <p> Le CV a bien été crée</p>
                    <br>
                    <input type="submit" id='submit' value='Ok'>

                </form>
    </div>

</div>


</body>
</html>