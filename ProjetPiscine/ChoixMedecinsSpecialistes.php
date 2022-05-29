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
            $NomAddictologue = array();
            $PrenomAddictologue = array();
            $NomAndrologue = array();
            $PrenomAndrologue = array();
            $NomCardiologue = array();
            $PrenomCardiologue = array();
            $NomDermatologue = array();
            $PrenomDermatologue = array();
            $NomGastroHepatoEnterologue = array();
            $PrenomGastroHepatoEnterologue = array();
            $NomGynecologue = array();
            $PrenomGynecologue = array();
            $NomIST = array();
            $PrenomIST = array();
            $NomOsteopathe = array();
            $PrenomOsteopathe = array();
            $db = "projetpiscine";
            $site = "localhost";
            $db_id="root";
            $db_mdp="root";
        
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            if($db_found){
                ///Addictologie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Addictologie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomAddictologue[]=$data["Nom"];
                    $PrenomAddictologue[]=$data["Prenom"];
                };
                ///Andrologie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Andrologie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomAndrologue[]=$data["Nom"];
                    $PrenomAndrologue[]=$data["Prenom"];
                };
                ///Cardiologie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Cardiologie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomCardiologue[]=$data["Nom"];
                    $PrenomCardiologue[]=$data["Prenom"];
                };
                ///Dermatologie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Dermatologie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomDermatologue[]=$data["Nom"];
                    $PrenomDermatologue[]=$data["Prenom"];
                };
                ///GastroHepatoEnterologie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='GastroHepatoEnterologie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomGastroHepatoEnterologue[]=$data["Nom"];
                    $PrenomGastroHepatoEnterologue[]=$data["Prenom"];
                };
                ///Gynecologie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Gynecologie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomGynecologue[]=$data["Nom"];
                    $PrenomGynecologue[]=$data["Prenom"];
                };
                ///IST
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='I.S.T'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomIST[]=$data["Nom"];
                    $PrenomIST[]=$data["Prenom"];
                };
                ///Osteopathie
                $sql = "SELECT Nom,Prenom FROM medecin WHERE Specialite='Osteopathie'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $NomOsteopathe[]=$data["Nom"];
                    $PrenomOsteopathe[]=$data["Prenom"];
                };

            }else{
                echo "Unable to connect <br>";
            }
        ?>

        <?php
            $connexion = $_SESSION["connexion"];
        ?>
        <div id="wrapper">
            <div id="header">
            <div id="boxProfilPatient">
                <script type="text/javascript">
                    var connexion = <?php echo json_encode($connexion)?>;
                        if(connexion==1){
                            var affichage = '<form action="monComptePatient.php">';
                            affichage += '<input id = "btnProfilMedecin" type="submit" value = "Mon profil">';
                            affichage += '</form>';
                            $("#boxProfilPatient").append(affichage);
                            

                        }else{
                            var affichage = '<div id="logo_compte"><a href="seConnecter.php"><img src="boutonMonCompte.png" alt="logoCompte" width="150" height="50"></img></a></div>';
                            $("#boxProfilPatient").append(affichage);
                        }
                </script>
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
                <!-- Addictologie -->
                <div id="tableau_addictologue">
                    <script type="text/javascript">
                    var NomAddictologue=<?php echo json_encode($NomAddictologue)?>;
                    var PrenomAddictologue=<?php echo json_encode($PrenomAddictologue)?>;
                    var Addictologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Addictologues:</h2></td></tr>';
                    for(var i=0; i<NomAddictologue.length; i++){
                        Addictologues += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomAddictologue[i]+'">'+NomAddictologue[i]+' '+PrenomAddictologue[i]+'</button></td></tr>';
                    }
                    Addictologues +='</table></form>';
                    $("#tableau_addictologue").append(Addictologues);
                    </script>
                </div>
                
                <!-- Andrologie -->
                <div id="tableau_andrologue">
                    <script type="text/javascript">
                    var NomAndrologue=<?php echo json_encode($NomAndrologue)?>;
                    var PrenomAndrologue=<?php echo json_encode($PrenomAndrologue)?>;
                    var Andrologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Andrologues:</h2></td></tr>';
                    for(var i=0; i<NomAndrologue.length; i++){
                        Andrologues += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomAndrologue[i]+'">'+NomAndrologue[i]+' '+PrenomAndrologue[i]+'</button></td></tr>';
                    }
                    Andrologues +='</table></form>';
                    $("#tableau_andrologue").append(Andrologues);
                    </script>
                </div>

                <!-- Cardiologie -->
                <div id="tableau_cardiologue">
                    <script type="text/javascript">
                    var NomCardiologue=<?php echo json_encode($NomCardiologue)?>;
                    var PrenomCardiologue=<?php echo json_encode($PrenomCardiologue)?>;
                    var Cardiologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Cardiologues:</h2></td></tr>';
                    for(var i=0; i<NomCardiologue.length; i++){
                        Cardiologues += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomCardiologue[i]+'">'+NomCardiologue[i]+' '+PrenomCardiologue[i]+'</button></td></tr>';
                    }
                    Cardiologues +='</table></form>';
                    $("#tableau_cardiologue").append(Cardiologues);
                    </script>
                </div>

                <!-- Dermatologie -->
                <div id="tableau_dermatologue">
                    <script type="text/javascript">
                    var NomDermatologue=<?php echo json_encode($NomDermatologue)?>;
                    var PrenomDermatologue=<?php echo json_encode($PrenomDermatologue)?>;
                    var Dermatologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Dermatologues:</h2></td></tr>';
                    for(var i=0; i<NomDermatologue.length; i++){
                        Dermatologues += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomDermatologue[i]+'">'+NomDermatologue[i]+' '+PrenomDermatologue[i]+'</button></td></tr>';
                    }
                    Dermatologues +='</table></form>';
                    $("#tableau_dermatologue").append(Dermatologues);
                    </script>
                </div>

                <!-- GastroHepatoEnterologie -->
                <div id="tableau_gastroHepatoEnterologue">
                    <script type="text/javascript">
                    var NomGastroHepatoEnterologue=<?php echo json_encode($NomGastroHepatoEnterologue)?>;
                    var PrenomGastroHepatoEnterologue=<?php echo json_encode($PrenomGastroHepatoEnterologue)?>;
                    var GastroHepatoEnterologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>GastroHepatoEnterologues:</h2></td></tr>';
                    for(var i=0; i<NomGastroHepatoEnterologue.length; i++){
                        GastroHepatoEnterologues += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomGastroHepatoEnterologue[i]+'">'+NomGastroHepatoEnterologue[i]+' '+PrenomGastroHepatoEnterologue[i]+'</button></td></tr>';
                    }
                    GastroHepatoEnterologues +='</table></form>';
                    $("#tableau_gastroHepatoEnterologue").append(GastroHepatoEnterologues);
                    </script>
                </div>

                <!-- Gynecologie -->
                <div id="tableau_gynecologue">
                    <script type="text/javascript">
                    var NomGynecologue=<?php echo json_encode($NomGynecologue)?>;
                    var PrenomGynecologue=<?php echo json_encode($PrenomGynecologue)?>;
                    var Gynecologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Gynecologues:</h2></td></tr>';
                    for(var i=0; i<NomGynecologue.length; i++){
                        Gynecologues += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomGynecologue[i]+'">'+NomGynecologue[i]+' '+PrenomGynecologue[i]+'</button></td></tr>';
                    }
                    Gynecologues +='</table></form>';
                    $("#tableau_gynecologue").append(Gynecologues);
                    </script>
                </div>

                <!-- IST -->
                <div id="tableau_IST">
                    <script type="text/javascript">
                    var NomIST=<?php echo json_encode($NomIST)?>;
                    var PrenomIST=<?php echo json_encode($PrenomIST)?>;
                    var IST='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>IST:</h2></td></tr>';
                    for(var i=0; i<NomIST.length; i++){
                        IST += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomIST[i]+'">'+NomIST[i]+' '+PrenomIST[i]+'</button></td></tr>';
                    }
                    IST +='</table></form>';
                    $("#tableau_IST").append(IST);
                    </script>
                </div>

                <!-- Osteopathie -->
                <div id="tableau_osteopathe">
                    <script type="text/javascript">
                    var NomOsteopathe=<?php echo json_encode($NomOsteopathe)?>;
                    var PrenomOsteopathe=<?php echo json_encode($PrenomOsteopathe)?>;
                    var Osteopathes='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Osteopathe:</h2></td></tr>';
                    for(var i=0; i<NomOsteopathe.length; i++){
                        Osteopathes += '<tr><td><button id="annulation" name="btn_Nom_Medecin" style="width:100%" value="'+NomOsteopathe[i]+'">'+NomOsteopathe[i]+' '+PrenomOsteopathe[i]+'</button></td></tr>';
                    }
                    Osteopathes +='</table></form>';
                    $("#tableau_osteopathe").append(Osteopathes);
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