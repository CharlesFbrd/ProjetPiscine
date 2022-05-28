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


// Connexion à la bdd 
$database = "projetpiscine";
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);


if($db_found){

    $sql = "DELETE FROM medecin where Email = '".$email."' ";
    $result = mysqli_query($db_handle, $sql); 
    
    echo "hello" .$email; 
}

    ?>
    
    <div id="box">
                <form action="AjouterSupprimerMedecin.php" method="post">
                    <p> Le médecin a bien été supprimé du registre. </p>
                    <br>
                    <input type="submit" id='submit' value='Ok'>
                
                </form>
    </div>    

</div>


</body>
</html>