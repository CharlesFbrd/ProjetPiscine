<?php

session_start(); 

//echo "<meta charset=\"utf-8\">";
//echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dupontStyle.css\">"; 

// Connexion à la bdd 
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost:3308', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);

// Déclaration du username et mdp pour la connexion récupéré dans le formulaire
$username= isset($_POST["email"])? $_POST["email"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

//si on trouve la bdd 
if ($db_found){

   $sql = "SELECT Nom, Prénom, Mdp FROM patient WHERE Email = '$username'"; 
   $result = mysqli_query($db_handle, $sql); // recherche de la requête dans la bdd 
   while($data = mysqli_fetch_assoc($result)){
      $nom = $data["Nom"]; 
      $prenom = $data["Prénom"]; 
      if ($data["Mdp"]== $mdp){
         $_SESSION["connexion"] = 1; 
      } else {
         $_SESSION["connexion"] = 0; 
      }
   }; 
   

   if($_SESSION["connexion"]== 0){
      $_SESSION["erreurConnexionPatient"] = "Identifiant ou mot de passe incorrect"; 
      header('Location: connexionPatient.php');

   }
   else if($_SESSION["connexion"]== 1){
    $_SESSION["erreurConnexionPatient"] = ""; 
    $_SESSION["NomPatient"] = $nom; 
    $_SESSION["PrenomPatient"] = $prenom; 
    header('Location: index.php'); 
 }
   

} else { // si on ne trouve pas la bdd 
   echo "<p> La connexion à la base de données a échoué. </p>"; 
}
     

?> 