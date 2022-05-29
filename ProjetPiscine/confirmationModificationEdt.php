<?php

session_start(); 

$NomMedecin= isset($_POST["nom"])? $_POST["nom"] : "";
// Connexion à la bdd 
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost:3308', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);

if($db_found){

    if(isset($_POST["LundiAM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);

    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["LundiPM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Lundi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["MardiAM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["MardiPM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mardi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["MercrediAM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["MercrediPM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Mercredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["JeudiAM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }
    

    if(isset($_POST["JeudiPM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Jeudi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["VendrediAM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["VendrediPM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Vendredi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["SamediAM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='AM'";
        $res = mysqli_query($db_handle,$sql);
    }


    if(isset($_POST["SamediPM"])){
        $sql = "UPDATE planning SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=1 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }else{
        $sql = "UPDATE planning SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
        $sql = "UPDATE disponibilite SET Dispo=0 WHERE Nom='$NomMedecin'AND Jour='Samedi'AND DemiJournee='PM'";
        $res = mysqli_query($db_handle,$sql);
    }
}else{
    echo "erreur connexion";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>EDT Modifié</title>
    <meta charset="UTF-8">
    <link href="medecinAjoute.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper>
    
    <div id="box">
                <form action="profilAdmin.php" method="post">
                    <h2>Confirmation</h2> 
                    <br>
                    <p> L'EDT a bient été modifié</p>
                    <br>
                    <input type="submit" id='submit' value='Ok'>
                
                </form>
    </div>    

</div>


</body>
</html>