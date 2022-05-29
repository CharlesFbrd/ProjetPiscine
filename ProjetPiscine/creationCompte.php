<?php

session_start(); 

$nom= isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$nCarteVitale = isset($_POST["nCarteVitale"])? $_POST["nCarteVitale"] : "";
$adresse1 = isset($_POST["adresse1"])? $_POST["adresse1"] : "";
$adresse2 = isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$codePostal = isset($_POST["codePostal"])? $_POST["codePostal"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$mdpc = isset($_POST["mdpC"])? $_POST["mdpC"] : "";


// Connexion à la bdd 
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);
if($mdp != $mdpc){
    $_SESSION["erreurCreationCompte"] = "Les mots de passe ne sont pas identiques"; 
    header('Location: formulaireCreationCompte.php'); 
} 
else {
    $_SESSION["erreurCreationCompte"] = ""; 
}


if($db_found){

    $sql = "INSERT INTO patient (Nom, Prénom, Adresse1, ComplementAdresse, Ville, CodePostal, Pays, NumeroTelephone, Email, CarteVitale, Mdp)VALUES ('$nom', '$prenom', '$adresse1', '$adresse2', '$ville', '$codePostal', '$pays', '$telephone', '$email', '$nCarteVitale', '$mdp')"; 
    $result = mysqli_query($db_handle, $sql); // recherche de la requête dans la bdd 

    header('Location: index.php'); 

}


?>