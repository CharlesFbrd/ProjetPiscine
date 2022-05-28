<?php

session_start(); 

$nom= isset($_POST["nom"])? $_POST["nom"] : "";
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
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);


if($db_found){

    $sql = "INSERT INTO medecin (Nom, Prenom, Specialite, Bureau, Telephone, Email, Mdp, Planning, Photo)
                     VALUES('$nom', '$prenom', '$specialite', '$bureau', '$telephone', '$email', '$mdp', '$planning', '$photoPortrait')"; 
    $result = mysqli_query($db_handle, $sql); 

    header('Location: index.php'); // bouton rdv 

}

?>