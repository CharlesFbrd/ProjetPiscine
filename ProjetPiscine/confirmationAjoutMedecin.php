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

    $sql = "INSERT INTO medecin (Nom, Prenom, Specialite, Bureau, Telephone, Email, Planning, Photo, Mdp)
                     VALUES('$nom', '$prenom', '$specialite', '$bureau', '$telephone', '$email', '$planning', '$photoPortrait', '$mdp')"; 
    $result = mysqli_query($db_handle, $sql); 


}


    ?>
    
    <div id="box">
                <form action="ajouterSupprimerMedecin.php" method="post">
                    <p> Le médecin a bien été ajouté au registre. </p>
                    <br>
                    <input type="submit" id='submit' value='Ok'>
                
                </form>
    </div>    

</div>


</body>
</html>