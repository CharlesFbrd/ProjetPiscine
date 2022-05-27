<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Paiement</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <?php 
            $NomMedecin = $_SESSION["NomMedecin"];
            $NomPatient = $_SESSION["NomPatient"];
            $PrenomPatient = $_SESSION["PrenomPatient"];
            $Connexion = $_SESSION["connexion"];
            $Jour = $_POST["DonneeJourRdv"];
            $Heure = $_POST["DonneeHeureRdv"];
            $_SESSION["JourRdv"] = $Jour;
            $_SESSION["HeureRdv"] = $Heure;
            $db = "projetpiscine";
            $site = "localhost:3308";
            $db_id="root";
            $db_mdp="root";
        
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            if($db_found){
                $sql = "SELECT Prenom,Specialite,Bureau,Telephone,Email,Planning,Photo FROM medecin WHERE Nom='$Nom'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $PrenomMedecin=$data["Prenom"];
                    $SpecialiteMedecin=$data["Specialite"];
                    $BureauMedecin=$data["Bureau"];
                    $TelephoneMedecin=$data["Telephone"];
                    $EmailMedecin=$data["Email"];
                    $PlanningMedecin=$data["Planning"];
                    $PhotoMedecin=$data["Photo"];
                };

                $sql = "SELECT Adresse1,ComplementAdresse,Ville,CodePostal,Pays,NumeroTelephone,Email,CarteVitale FROM patient WHERE Nom='$NomPatient' AND Prénom='$PrenomPatient'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $AdressePatient=$data["Adresse1"];
                    $ComplementAdressePatient=$data["ComplementAdresse"];
                    $VillePatient=$data["Ville"];
                    $CodePostalPatient=$data["CodePostal"];
                    $PaysPatient=$data["Pays"];
                    $NumeroTelephonePatient=$data["NumeroTelephone"];
                    $EmailPatient=$data["Email"];
                    $CarteVitalePatient=$data["CarteVitale"];
                };
            }else{
                echo "Unable to connect <br>";
            }
        ?>

        
        <div id="wrapper">
            <div id="header">
                <div id="logo_compte">
                <a href="seConnecter.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a>
                </div>
            </div>
            <div id="navigation">
            <div class ="btn_navigation">
                    <form action="index.php" method="post">
                        <input type="submit" value="Accueil">
                    </form>
                </div>
                <div class ="btn_navigation">
                    <form action="Parcourir.php" method="post">
                        <input type="submit" value="Tout Parcourir">
                    </form>
                </div>
                <div class ="btn_navigation">
                    <form action="Recherche.php" method="post">
                        <input type="submit" value="Rechercher">
                    </form>
                </div>
                <div class ="btn_navigation">
                    <form action="Rdv.php" method="post">
                        <input type="submit" value="Rendez-vous">
                    </form>
                </div>
            </div>

            <div id="section">
                <div id="Paiement">
                    <script type="text/javascript">
                        var connexion = <?php echo json_encode($Connexion)?>;
                        if(connexion==1){
                            var nom = <?php echo json_encode($NomPatient)?>;
                            var prenom = <?php echo json_encode($PrenomPatient)?>;
                            var adresse = <?php echo json_encode($AdressePatient)?>;
                            var Cadresse = <?php echo json_encode($ComplementAdressePatient)?>;
                            var ville = <?php echo json_encode($VillePatient)?>;
                            var codePostal = <?php echo json_encode($CodePostalPatient)?>;
                            var pays = <?php echo json_encode($PaysPatient)?>;
                            var telephone = <?php echo json_encode($NumeroTelephonePatient)?>;
                            var email = <?php echo json_encode($EmailPatient)?>;
                            var carteVitale = <?php echo json_encode($CarteVitalePatient)?>;
                            var paiement='<form action="Email.php" methode="post">';
                            paiement+='<table align="center"><tr><td COLSPAN="2" align="middle"><h2>Informations personnelles</h2></td></tr>';
                            paiement+='<tr><td>Nom: </td><td align="middle">'+nom+'</td></tr>';
                            paiement+='<tr><td>Prenom: </td><td align="middle">'+prenom+'</td></tr>';
                            paiement+='<tr><td>Adresse: </td><td align="middle">'+adresse+'</td></tr>';
                            paiement+='<tr><td>Complement: </td><td align="middle">'+Cadresse+'</td></tr>';
                            paiement+='<tr><td>Ville: </td><td align="middle">'+ville+'</td></tr>';
                            paiement+='<tr><td>Code Postal: </td><td align="middle">'+codePostal+'</td></tr>';
                            paiement+='<tr><td>Pays: </td><td align="middle">'+pays+'</td></tr>';
                            paiement+='<tr><td>Telephone: </td><td align="middle">'+telephone+'</td></tr>';
                            paiement+='<tr><td>Email: </td><td align="middle">'+email+'</td></tr>';
                            paiement+='<tr><td>carteVitale: </td><td align="middle">'+carteVitale+'</td></tr></table>';

                            paiement+='<table align="center"><tr><td COLSPAN="2" align="middle"><h2>Informations de Paiement</h2></td></tr>';
                            paiement+='<tr><td>Type de Carte:</td><td><input align="middle" type="radio" name="carte" value="Visa">Visa </input><input type="radio" name="carte" value="MasterCard">MasterCard</input></td></tr>';
                            paiement+='<tr><td></td><td><input align="middle" type="radio" name="carte" value="American Express">American Express </input><input type="radio" name="carte" value="PayPal">PayPal</input></td></tr>';
                            paiement+='<tr><td>Numéro de carte: </td><td><input align="middle" type="text" name="NumCarte" value="0000 0000 0000 0000" required></input></td></tr>';
                            paiement+='<tr><td>Nom figurant sur la carte: </td><td><input align="middle" type="text" name="NomCarte" required></input></td></tr>';
                            paiement+='<tr><td>Date d expiration de la carte: </td><td><input align="middle" type="text" name="DateCarte" value="MM/AA" required></input></td></tr>';
                            paiement+='<tr><td>Code de sécurité: </td><td><input align="middle" type="text" name="CodeCarte" value="XXX" required></input></td></tr>';
                            paiement+='<tr><td>Montant: </td><td><label>50€</label></td></tr>';
                            paiement+='<tr><td COLSPAN="2" ><input style="width:100%" type="submit" value="Payer"></input></td></tr></table>';
                            paiement+='</form>';
                            $("#Paiement").append(paiement);
                        }else{
                            var paiement='<form action="seConnecter.php" methode="post">';
                            paiement+='<table align="center"><tr><td align="middle"><h2>Merci de vous connecter avant de prendre un RDV!</h2></td></tr>';
                            paiement+='<tr><td align="middle"><input type="submit" value="Se Connecter"></input></td></tr></table>';
                            paiement+='</form>';
                            $("#Paiement").append(paiement);
                        }
                    </script>
                </div>
                
            </div>

            <div id="footer">
                <div id="img_map">
                    <br>    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3728015691363!2d2.2863485157921275!3d48.85110107928679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653302169100!5m2!1sfr!2sfr" width="300" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <footer>Information de contact: <br>
                Tel:<a href="+33 1 44 39 06 00">+33 1 44 39 06 00</a>Email: <a href="contact@omnesante.fr">contact@omnesante.fr</a><br>
                Droit d'auteur 2022 Omnes Education, France<br>
                Dernière mise à jour le 07/05/2022</footer>
            </div>
        </div>
    </body>
</html>