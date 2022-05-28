<?php

    session_start(); 

?>




<!DOCTYPE html>
<html>
<head>
    <title>Mon compte médecin</title>
    <meta charset="UTF-8">
    <link href="monCompteMedecin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

// Connexion à la bdd
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);

$nomMedecin = $_SESSION["NomMedecin"]; 
$prenomMedecin = $_SESSION["PrenomMedecin"];

if ($db_found){

    $sql = "SELECT Specialite, Email, Photo FROM medecin WHERE Nom = '$nomMedecin' AND Prenom = '$prenomMedecin' "; 
    $result = mysqli_query($db_handle, $sql); // recherche de la requête dans la bdd 
    while($data = mysqli_fetch_assoc($result)){
        $specialite = $data["Specialite"]; // les variables ne sont pas récupérées
        $email = $data["Email"];
        $photoPortrait = $data["Photo"];  

    };


    
 } else { // si on ne trouve pas la bdd 
    echo "<p> La connexion à la base de données a échoué. </p>"; 
 }



?>

<div id = wrapper>

    
    <div id="box">
                <form action="profilMedecin.php" method="post">
                    <h2>Votre profil</h2> 
                    <?php

                        echo '<img id="imgronde" width="150px" height="200px" src="'.$photoPortrait.'" >';
                        echo "<br>";
                        echo "" .$_SESSION["NomMedecin"];
                        echo " " .$_SESSION["PrenomMedecin"];
                        echo "<br>"; 
                        echo "" .$specialite; 
                        echo "<br>"; 
                        echo "<br>"; 
                        echo "" .$email;
                        echo "<br>"; 
                        echo "<br>"; 

                    ?>
                    
                
                    <br>
                    <input type="submit" id='submit' value='Retour'>
                
                </form>
    </div>   

    <div id = "boxDeconnexion">
                <form id = "formDeconnexion" action="index.php" method="post">
                    <input id = "btnDeconnexion" type="submit" id='submit' value='Déconnexion'>
                    <?php

                        $_SESSION["connexion"] = 0; 
                        $_SESSION["NomMedecin"] = ""; 
                        $_SESSION["PrenomMedecin"] = "";

                    ?> 
                </form>

    </div>

</div>


</body>
</html>


