<?php

    session_start(); 

?>




<!DOCTYPE html>
<html>
<head>
    <title>Mon compte Patient</title>
    <meta charset="UTF-8">
    <link href="monComptePatient.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

// Connexion à la bdd
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);

$nomPatient = $_SESSION["NomPatient"]; 
$prenomPatient = $_SESSION["PrenomPatient"];

if ($db_found){

    $sql = "SELECT Adresse1,Ville,CodePostal,Email,CarteVitale FROM patient WHERE Nom = '$nomPatient' AND Prénom = '$prenomPatient' "; 
    $result = mysqli_query($db_handle, $sql); // recherche de la requête dans la bdd 
    while($data = mysqli_fetch_assoc($result)){
        $adresse = $data["Adresse1"]; // les variables ne sont pas récupérées
        $ville = $data["Ville"];
        $CodePostal = $data["CodePostal"];
        $email = $data["Email"]; 
        $CarteVitale= $data["CarteVitale"]; 

    };


    
 } else { // si on ne trouve pas la bdd 
    echo "<p> La connexion à la base de données a échoué. </p>"; 
 }



?>

<div id = wrapper>

    
    <div id="box">
                <form action="index.php" method="post">
                    <h2>Votre profil</h2> 
                    <?php
                        echo "" .$_SESSION["NomPatient"];
                        echo " " .$_SESSION["PrenomPatient"];
                        echo "<br>"; 
                        echo "" .$adresse;
                        echo "<br>"; 
                        echo "" .$ville." ".$CodePostal; 
                        echo "<br>"; 
                        echo "<br>"; 
                        echo "" .$email;
                        echo "<br>"; 
                        echo "<br>";
                        echo "" .$CarteVitale;
                        echo "<br>";

                    ?>
                    
                
                    <br>
                    <input type="submit" id='submit' value='Retour'>
                
                </form>
    </div>   

    <div id = "boxDeconnexion">
                <form id = "formDeconnexion" action="index.php" method="post">
                    <input id = "btnDeconnexion" type="submit" name="Deconnexion" value="Déconnexion">
                </form>

    </div>

</div>


</body>
</html>


