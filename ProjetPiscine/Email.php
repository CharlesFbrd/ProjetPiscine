<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation RDV</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <?php 
            $NomMedecin = $_SESSION["NomMedecin"];
            $NomPatient = $_SESSION["NomPatient"];
            $PrenomPatient = $_SESSION["PrenomPatient"];
            $Jour = $_SESSION["JourRdv"];
            $Heure = $_SESSION["HeureRdv"];
            $TypeCarte = $_POST["carte"];
            $NumCarte = $_POST["NumCarte"];
            $NomCarte = $_POST["NomCarte"];
            $DateCarte = $_POST["DateCarte"];
            $CodeCarte = $_POST["CodeCarte"];

            $db = "projetpiscine";
            $site = "localhost:3308";
            $db_id="root";
            $db_mdp="root";
        
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            if($db_found){

                $sql = "INSERT INTO rdv(NomMedecin,NomPatient,Jour,Heure)VALUES('$NomMedecin','$NomPatient','$Jour','$Heure')";
                $res = mysqli_query($db_handle,$sql);
                $sql = "UPDATE disponibilite SET Dispo=2 WHERE Nom='$NomMedecin' AND Jour='$Jour' AND Heure='$Heure'";
                $res = mysqli_query($db_handle,$sql);

            
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

                $destinataire = 'charles.fabard1@outlook.fr';//$destinateur = $EmailPatient;
                // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
                $expediteur = 'charles.fabard@outlook.fr';
                $copie = '';
                $copie_cachee = '';
                $objet = 'Confirmation RDV Médical'; // Objet du message
                $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
                $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
                $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
                $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
                $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
                $headers .= 'Cc: '.$copie."\n"; // Copie Cc
                $headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
                $message = '<div style="width: 100%; text-align: center; font-weight: bold">Bonjour '.$NomPatient.' '.$PrenomPatient.',<br>'
                .'Votre rendez-vous le '.$Jour.' à '.$Heure.' est confirmé avec le Dr.'.$NomMedecin.' '.$PrenomMedecin.'</div>';
                if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
                {
                    $confirmation = 'Le mail de confirmation a bien été envoyé ';
                }
                else // Non envoyé
                {
                    $confirmation = "Le mail de confirmation n'a pas pu être envoyé";
                }

                // $objet = 'Facture';
                // $message = '<div style="width: 100%; text-align: center; font-weight: bold">Bonjour '+$NomPatient+' '+$PrenomPatient+',<br>'
                // +'Voici une facture concernant votre paiement de 50€ pour votre rend-vous médical payé avec la carte portant le numéro : '+$NumCarte+'</div>';
                // if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
                // {
                //     $confirmationFacture = 'La Facture a bien été envoyé ';
                // }
                // else // Non envoyé
                // {
                //     $confirmationFacture = "La Facture n'a pas pu être envoyé";
                // }
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
                <div id="ConfirmationPaiement">
                    <form action="index.php" methode="post">
                        <table align="center">
                            <tr>
                                <td align="middle"><h2>Votre RDV est confirmé!</h2></td>
                            </tr>
                            <tr>
                                <td align="middle"><h3><?php echo $confirmation?></h3></td>
                            </tr>
                            <tr>
                                <td align="middle"><h3><?php echo $confirmationFacture?></h3></td>
                            </tr>
                            <tr>
                                <td align="middle"><input type="submit" value="Retour Accueil"></input></td>
                            </tr>
                        </table>
                    </form>
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