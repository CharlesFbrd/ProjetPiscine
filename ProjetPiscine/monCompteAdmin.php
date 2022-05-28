<?php

    session_start(); 

?>




<!DOCTYPE html>
<html>
<head>
    <title>Mon compte adminitrateur</title>
    <meta charset="UTF-8">
    <link href="monCompteAdmin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

// Connexion à la bdd
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);

$nomAdmin = $_SESSION["NomAdmin"]; 
$prenomAdmin = $_SESSION["PrenomAdmin"];

if ($db_found){

    $sql = "SELECT Email, Photo FROM medecin WHERE Nom = '$nomAdmin' AND Prenom = '$prenomAdmin' "; 
    $result = mysqli_query($db_handle, $sql); // recherche de la requête dans la bdd 
    while($data = mysqli_fetch_assoc($result)){
        $email = $data["Email"];
        $photoPortrait = $data["Photo"];  

    };

    
 } else { // si on ne trouve pas la bdd 
    echo "<p> La connexion à la base de données a échoué. </p>"; 
 }



?>

<div id = wrapper>

    
    <div id="box">
                <form action="profilAdmin.php" method="post">
                    <h2>Votre profil</h2> 
                    <br>
                    <?php

                        //echo '<img width="50%" src="'.$nom_photo.' >';
                        echo "<br>";

                        echo "" .$_SESSION["NomAdmin"];
                        echo " " .$_SESSION["PrenomAdmin"];
                        echo "<br>"; 
                        echo "<br>"; 
                        echo "" .$email; // ne s'affiche pas idk why 
                        echo "<br>"; 
                        echo "<br>"; 
                        echo "<br>"; 
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


