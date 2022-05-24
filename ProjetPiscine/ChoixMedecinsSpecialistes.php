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
            $site = "localhost:3308";
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
                <!-- Addictologie -->
                <div id="tableau_Addictologue">
                    <script type="text/javascript">
                    var NomAddictologue=<?php echo json_encode($NomAddictologue)?>;
                    var PrenomAddictologue=<?php echo json_encode($PrenomAddictologue)?>;
                    var Addictologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Addictologues:</h2></td></tr>';
                    for(var i=0; i<NomAddictologue.length; i++){
                        Addictologues += '<tr><td><button id="btn_Nom_Medecin" name="btn_Nom_Medecin" style="width:100%" value="'+NomAddictologue[i]+'">'+NomAddictologue[i]+' '+PrenomAddictologue[i]+'</button></td></tr>';
                    }
                    Addictologues +='</table></form>';
                    $("#tableau_Addictologue").append(Addictologues);
                    </script>
                </div>

                <!-- Andrologie -->
                <div id="tableau_Andrologue">
                    <script type="text/javascript">
                    var NomAndrologue=<?php echo json_encode($NomAndrologue)?>;
                    var PrenomAndrologue=<?php echo json_encode($PrenomAndrologue)?>;
                    var Andrologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Andrologues:</h2></td></tr>';
                    for(var i=0; i<NomAndrologue.length; i++){
                        Andrologues += '<tr><td><button id="btn_Nom_Medecin" name="btn_Nom_Medecin" style="width:100%" value="'+NomAndrologue[i]+'">'+NomAndrologue[i]+' '+PrenomAndrologue[i]+'</button></td></tr>';
                    }
                    Andrologues +='</table></form>';
                    $("#tableau_Andrologue").append(Andrologues);
                    </script>
                </div>

                <!-- Cardiologie -->
                <div id="tableau_Cardiologue">
                    <script type="text/javascript">
                    var NomCardiologue=<?php echo json_encode($NomCardiologue)?>;
                    var PrenomCardiologue=<?php echo json_encode($PrenomCardiologue)?>;
                    var Cardiologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Cardiologues:</h2></td></tr>';
                    for(var i=0; i<NomCardiologue.length; i++){
                        Cardiologues += '<tr><td><button id="btn_Nom_Medecin" name="btn_Nom_Medecin" style="width:100%" value="'+NomCardiologue[i]+'">'+NomCardiologue[i]+' '+PrenomCardiologue[i]+'</button></td></tr>';
                    }
                    Cardiologues +='</table></form>';
                    $("#tableau_Cardiologue").append(Cardiologues);
                    </script>
                </div>

                <!-- Dermatologie -->
                <div id="tableau_Dermatologue">
                    <script type="text/javascript">
                    var NomDermatologue=<?php echo json_encode($NomDermatologue)?>;
                    var PrenomDermatologue=<?php echo json_encode($PrenomDermatologue)?>;
                    var Dermatologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>Dermatologues:</h2></td></tr>';
                    for(var i=0; i<NomDermatologue.length; i++){
                        Dermatologues += '<tr><td><button id="btn_Nom_Medecin" name="btn_Nom_Medecin" style="width:100%" value="'+NomDermatologue[i]+'">'+NomDermatologue[i]+' '+PrenomDermatologue[i]+'</button></td></tr>';
                    }
                    Dermatologues +='</table></form>';
                    $("#tableau_Dermatologue").append(Dermatologues);
                    </script>
                </div>

                <!-- GastroHepatoEnterologie -->
                <div id="tableau_GastroHepatoEnterologue">
                    <script type="text/javascript">
                    var NomGastroHepatoEnterologue=<?php echo json_encode($NomGastroHepatoEnterologue)?>;
                    var PrenomGastroHepatoEnterologue=<?php echo json_encode($PrenomGastroHepatoEnterologue)?>;
                    var GastroHepatoEnterologues='<form action="InfoMedecin.php" method="post"><table><tr><td><h2>GastroHepatoEnterologues:</h2></td></tr>';
                    for(var i=0; i<NomGastroHepatoEnterologue.length; i++){
                        GastroHepatoEnterologues += '<tr><td><button id="btn_Nom_Medecin" name="btn_Nom_Medecin" style="width:100%" value="'+NomGastroHepatoEnterologue[i]+'">'+NomGastroHepatoEnterologue[i]+' '+PrenomGastroHepatoEnterologue[i]+'</button></td></tr>';
                    }
                    GastroHepatoEnterologues +='</table></form>';
                    $("#tableau_GastroHepatoEnterologue").append(GastroHepatoEnterologues);
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