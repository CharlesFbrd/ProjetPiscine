<?php

    session_start(); 

?> 

<!DOCTYPE html>
<html>
    <head>
        <title> Vos Consultations</title>
        <meta charset="utf-8">
        <link href="consultations.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
    <?php 
            $NomMedecin = $_SESSION["NomMedecin"];
            $connexion = $_SESSION["connexion"];
            $IDRDV = array();
            $NomPatient = array();
            $Jour = array();
            $Heure = array();

            $PrenomPatient = array();
            $Adresse = array();
            $Ville = array();
            $Codepostal = array();
            $Telephonepatient= array();
            $EmailPatient = array();
            $CarteVitalePatient = array();
            $db = "projetpiscine";
            $site = "localhost";
            $db_id="root";
            $db_mdp="root";
        
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            if($db_found){

            
                $sql = "SELECT ID,NomPatient,Jour,Heure FROM rdv WHERE NomMedecin='$NomMedecin'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $IDRDV[]=$data["ID"];
                    $NomPatient[]=$data["NomPatient"];
                    $Jour[]=$data["Jour"];
                    $Heure[]=$data["Heure"];
                };

                for($i=0; $i<count($NomPatient); $i++){
                    $sql = "SELECT Prénom,Adresse1,Ville,CodePostal,NumeroTelephone,Email,CarteVitale FROM patient WHERE Nom='$NomPatient[$i]'";
                    $res = mysqli_query($db_handle,$sql);
                    while($data = mysqli_fetch_assoc($res)){
                        $PrenomPatient[]=$data["Prénom"];
                        $Adresse[]=$data["Adresse1"];
                        $Ville[]=$data["Ville"];
                        $CodePostal[]=$data["CodePostal"];
                        $TelephonePatient[]=$data["NumeroTelephone"];
                        $EmailPatient[]=$data["Email"];
                        $CarteVitalePatient[]=$data["CarteVitale"];
                    };
                }
            }else{
                echo "Unable to connect <br>";
            }
        ?>

        <div id="wrapper">
            <div id="header">
                <div id = boxProfilMedecin>
                    <form id = "formMonProfil" action="monCompteMedecin.php">
                        <input id = "btnProfilMedecin" type="submit" value = "Mon profil">
                    </form>
                </div>
            </div>

            <div id="navigation">
                <form action="profilMedecin.php">
                    <input type="submit" value = "Accueil">
                </form>
                <form action="consultations.php">
                    <input type="submit" value = "Consultations">
                </form>
                <form action="messagerie.php">
                    <input type="submit" value = "Messagerie">
                </form>
            </div>

            <div id="section">
            <div id="AffichageRDV">
                    <script type="text/javascript">
                        var connexion = <?php echo json_encode($connexion)?>;
                        if(connexion==1){
                            var IdRdv = <?php echo json_encode($IDRDV)?>;
                            var NomPatient = <?php echo json_encode($NomPatient)?>;
                            var Jour = <?php echo json_encode($Jour)?>;
                            var Heure = <?php echo json_encode($Heure)?>;
                            var PrenomPatient = <?php echo json_encode($PrenomPatient)?>;
                            var Adresse = <?php echo json_encode($Adresse)?>;
                            var Ville = <?php echo json_encode($Ville)?>;
                            var CodePostal = <?php echo json_encode($CodePostal)?>;
                            var Telephone = <?php echo json_encode($TelephonePatient)?>;
                            var Email = <?php echo json_encode($EmailPatient)?>;
                            var CarteVitale = <?php echo json_encode($CarteVitalePatient)?>;
                            var affichage = '<form method="post">';
                            var j=0;
                            for(var i=0; i<IdRdv.length; i++){
                                j = i +1;
                                affichage += '<table><tr><td COLSPAN="2"><h2>RDV Numéro: '+j+'</h2></td></tr>';
                                affichage += '<tr><td id="libelle">Nom: </td><td>'+NomPatient[i]+'</td><td id="libelle">Prenom: </td><td>'+PrenomPatient[i]+'</td></tr>';
                                affichage += '<tr><td id="libelle">Adresse: </td><td>'+Adresse[i]+'</td><td id="libelle">Ville: </td><td>'+Ville[i]+'</td></tr>';
                                affichage += '<tr><td id="libelle">Code Postal: </td><td>'+CodePostal[i]+'</td><td id="libelle">Carte Vitale: </td><td>'+CarteVitale[i]+'</td></tr>';
                                affichage += '<tr><td id="libelle">Telephone: </td><td>+33 '+Telephone[i]+'</td><td id="libelle">Email: </td><td>'+Email[i]+'</td></tr>';
                                affichage += '<tr><td id="libelle">Jour: </td><td>'+Jour[i]+'</td><td id="libelle">Heure: </td><td>'+Heure[i]+'</td></tr>';
                            }
                            affichage += '</form>';
                            $("#AffichageRDV").append(affichage);
                        }else{
                            var affichage='<form action="seConnecter.php" methode="post">';
                            affichage+='<table align="center"><tr><td align="middle"><h2>Merci de vous connecter pour accéder à vos RDV!</h2></td></tr>';
                            affichage+='<tr><td align="middle"><input type="submit" value="Se Connecter"></input></td></tr></table>';
                            affichage+='</form>';
                            $("#AffichageRDV").append(affichage);
                        }
                    </script>  
                </div>
            </div>
            <div id="footer">
                <div id="img_map">
                    <br>    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3728015691363!2d2.2863485157921275!3d48.85110107928679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653302169100!5m2!1sfr!2sfr" width="300" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <footer>Informations de contact: <br>
                Tel:<a href="+33 1 44 39 06 00">+33 1 44 39 06 00</a> <br>
                Email: <a href="contact@omnesante.fr">contact@omnesante.fr</a><br>
                Droit d'auteur 2022 Omnes Education, France<br>
                Dernière mise à jour le 07/05/2022</footer>
            </div>
        </div>
    </body>
</html>