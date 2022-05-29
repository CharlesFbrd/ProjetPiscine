<?php

session_start(); 


?>


<!DOCTYPE html>
<html>
<head>
    <title>Médecin ajouté</title>
    <meta charset="UTF-8">
    <link href="medecinAjoute.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>

    <?php

$NomMedecin= isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$bureau = isset($_POST["bureau"])? $_POST["bureau"] : "";
$specialite = isset($_POST["specialite"])? $_POST["specialite"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$planning = isset($_POST["planning"])? $_POST["planning"] : "";
$photoPortrait = isset($_POST["photo"])? $_POST["photo"] : "";


// Connexion à la bdd 
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost:3308', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);

if($db_found){


    $sql = "INSERT INTO medecin(Nom, Prenom, Specialite, Bureau, Telephone, Email, Planning, Photo, Mdp)VALUES('$NomMedecin', '$prenom', '$specialite', '$bureau', '$telephone', '$email', '$planning', '$photoPortrait', '$mdp')"; 
    $result = mysqli_query($db_handle, $sql); 
}else{
    echo "erreur connexion";
}


if(isset($_POST["LundiAM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES('$NomMedecin','Lundi','AM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','8h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','8h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','9h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','9h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','10h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','10h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','11h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','11h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','12h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Lundi','AM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','8h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','8h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','9h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','9h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','10h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','10h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','11h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','11h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','AM','12h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["LundiPM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Lundi','PM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','14h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','14h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','15h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','15h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','16h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','16h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','17h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','17h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','18h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Lundi','PM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','14h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','14h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','15h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','15h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','16h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','16h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','17h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','17h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Lundi','PM','18h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["MardiAM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mardi','AM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','8h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','8h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','9h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','9h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','10h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','10h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','11h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','11h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','12h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mardi','AM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','8h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','8h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','9h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','9h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','10h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','10h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','11h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','11h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','AM','12h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["MardiPM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mardi','PM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','14h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','14h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','15h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','15h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','16h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','16h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','17h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','17h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','18h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mardi','PM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','14h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','14h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','15h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','15h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','16h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','16h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','17h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','17h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mardi','PM','18h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["MercrediAM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mercredi','AM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','8h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','8h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','9h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','9h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','10h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','10h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','11h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','11h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','12h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mercredi','AM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','8h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','8h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','9h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','9h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','10h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','10h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','11h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','11h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','AM','12h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["MercrediPM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mercredi','PM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','14h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','14h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','15h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','15h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','16h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','16h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','17h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','17h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','18h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Mercredi','PM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','14h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','14h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','15h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','15h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','16h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','16h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','17h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','17h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Mercredi','PM','18h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["JeudiAM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Jeudi','AM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','8h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','8h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','9h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','9h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','10h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','10h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','11h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','11h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','12h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Jeudi','AM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','8h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','8h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','9h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','9h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','10h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','10h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','11h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','11h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','AM','12h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["JeudiPM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Jeudi','PM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','14h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','14h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','15h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','15h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','16h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','16h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','17h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','17h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','18h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Jeudi','PM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','14h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','14h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','15h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','15h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','16h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','16h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','17h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','17h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Jeudi','PM','18h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["VendrediAM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Vendredi','AM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','8h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','8h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','9h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','9h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','10h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','10h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','11h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','11h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','12h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Vendredi','AM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','8h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','8h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','9h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','9h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','10h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','10h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','11h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','11h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','AM','12h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["VendrediPM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Vendredi','PM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','14h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','14h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','15h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','15h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','16h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','16h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','17h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','17h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','18h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Vendredi','PM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','14h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','14h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','15h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','15h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','16h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','16h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','17h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','17h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Vendredi','PM','18h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["SamediAM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Samedi','AM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','8h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','8h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','9h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','9h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','10h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','10h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','11h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','11h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','12h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Samedi','AM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','8h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','8h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','9h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','9h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','10h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','10h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','11h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','11h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','AM','12h00',0)";
    $res = mysqli_query($db_handle,$sql);
}
if(isset($_POST["SamediPM"])){
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Samedi','PM',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','14h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','14h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','15h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','15h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','16h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','16h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','17h00',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','17h30',1)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','18h00',1)";
    $res = mysqli_query($db_handle,$sql);
}else{
    $sql = "INSERT INTO planning(Nom, Jour, DemiJournee, Dispo) VALUES ('$NomMedecin','Samedi','PM',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','14h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','14h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','15h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','15h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','16h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','16h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','17h00',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','17h30',0)";
    $res = mysqli_query($db_handle,$sql);
    $sql = "INSERT INTO disponibilite(Nom, Jour, DemiJournee, Heure, Dispo) VALUES ('$NomMedecin','Samedi','PM','18h00',0)";
    $res = mysqli_query($db_handle,$sql);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Médecin ajouté</title>
    <meta charset="UTF-8">
    <link href="medecinAjoute.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>
    
    <div id="box">
                <form action="profilAdmin.php" method="post">
                    <h2>Confirmation</h2> 
                    <br>
                    <p> Le médecin a bien été ajouté au registre</p>
                    <br>
                    <input type="submit" id='submit' value='Ok'>
                
                </form>
    </div>    

</div>


</body>
</html>