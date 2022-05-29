<?php

    session_start(); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Se connecter</title>
    <meta charset="UTF-8">
    <link href="seConnecter.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id = wrapper> 
    <div id = header>
        <img src="logoOmnesSante.png" alt="logoOmnesSante" width="200" height="80"></img>
        <div id="boxRetour" >
            <form id = "formRetour" action="index.php">
                    <input id="btnRetour" type="submit" value="Retour">
            </form>
        </div>
        
    </div>

    <div id="boxProfils">

        <form action="connexionPatient.php">
            <h2> Votre espace personnel :</h2>
            <br>
            <input type="submit" value="Patients">
        </form>
        <form action="connexionMedecin.php">
            <input type="submit" value="Médecins">
        </form>
        <form action="connexionAdmin.php">
            <input type="submit" value="Administrateurs">
        </form>  
        
     </div>    


</div>
    
</body>
</html>