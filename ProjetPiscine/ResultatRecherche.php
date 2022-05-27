<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Résultat Recherche</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <?php
            $Specialite = $_POST["recherche"];
            $NomMedecin = array();
            $PrenomMedecin = array();
            $Bureau = array();
            $Telephone = array();
            $Email = array();

            $db = "projetpiscine";
            $site = "localhost:3308";
            $db_id="root";
            $db_mdp="root";
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            
            if($db_found){
                $sql = "SELECT Nom,Prenom,Bureau,Telephone,Email FROM medecin WHERE Specialite LIKE '$Specialite'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomMedecin[]=$data["Nom"];
                    $PrenomMedecin[]=$data["Prenom"];
                    $Bureau[]=$data["Bureau"];
                    $Telephone[]=$data["Telephone"];
                    $Email[]=$data["Email"];
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
                <div id="AffichageRecherche">
                <script type="text/javascript">
                            var NomMedecin = <?php echo json_encode($NomMedecin)?>;
                            var PrenomMedecin = <?php echo json_encode($PrenomMedecin)?>;
                            var Specialite = <?php echo json_encode($Specialite)?>;
                            var Bureau = <?php echo json_encode($Bureau)?>;
                            var Telephone = <?php echo json_encode($Telephone)?>;
                            var Email = <?php echo json_encode($Email)?>;
                            var affichage = '<form action="InfoMedecin.php" method="post">';
                            var j=0;
                            for(var i=0; i<NomMedecin.length; i++){
                                j = i +1;
                                affichage += '<table><tr><td COLSPAN="2"><h2>RDV Médecin: </h2></td></tr>';
                                affichage += '<tr><td id="libelle">Nom: </td><td>'+NomMedecin[i]+'</td><td id="libelle">Prenom: </td><td>'+PrenomMedecin[i]+'</td></tr>';
                                affichage += '<tr><td id="libelle">Specialite: </td><td>'+Specialite+'</td><td id="libelle">Bureau: </td><td>'+Bureau[i]+'</td></tr>';
                                affichage += '<tr><td id="libelle">Telephone: </td><td>+33 '+Telephone[i]+'</td><td id="libelle">Email: </td><td>'+Email[i]+'</td></tr>';
                                affichage += '<tr><td></td><td></td><td COLSPAN="2"><button value="'+NomMedecin[i]+'" name="btn_Nom_Medecin" id="annulation">Info Médecin</button></td></tr></table>';
                            }
                            affichage += '</form>';
                            $("#AffichageRecherche").append(affichage);
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