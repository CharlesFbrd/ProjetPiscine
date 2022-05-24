<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Choix Médecin</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <?php 
            $Nom = array();
            $Prenom = array();
            $db = "projetpiscine";
            $site = "localhost:3308";
            $db_id="root";
            $db_mdp="root";
        
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            if($db_found){
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Generaliste'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $Nom[]=$data["Nom"];
                    $Prenom[]=$data["Prenom"];
                };
            }else{
                echo "Unable to connect <br>";
            }
        ?>

        
        <div id="wrapper">
            <div id="header">
                <div id="logo_compte">
                <a href="Connexion.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a>
                </div>
            </div>
            <div id="navigation">
                <a href="index.php"><img src="boutonAccueil.png"></img></a>
                <img src="boutonParcourir.png"></img>
                <a href="Recherche.php"><img src="boutonRecherche.png"></img></a>
                <a href="Rdv.php"><img src="boutonRdv.png"></img></a>
            </div>

            <div id="section">
                <div id="tableau">
                    <script type="text/javascript">
                    var Nom=<?php echo json_encode($Nom)?>;
                    var Prenom=<?php echo json_encode($Prenom)?>;
                    var Medecins='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Médecins Généralistes:</h2></td></tr>';
                    for(var i=0; i<Nom.length; i++){
                        Medecins += '<tr><td><button id="btn_Nom_Medecin" name="btn_Nom_Medecin" style="width:100%" value="'+Nom[i]+'">'+Nom[i]+" "+Prenom[i]+'</button></td></tr>';
                    }
                    Medecins +='</table></form>';
                    $("#tableau").append(Medecins);
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