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
        <a href="seConnecter.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a>
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