<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Info Médecin</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <?php 
            $Nom = $_POST["btn_Nom_Medecin"];
            $_SESSION["NomMedecin"] = $Nom;
            $planning = array();
            $db = "projetpiscine";
            $site = "localhost";
            $db_id="root";
            $db_mdp="root";
        
            $db_handle = mysqli_connect($site, $db_id, $db_mdp);
            $db_found = mysqli_select_db($db_handle, $db);
            if($db_found){
                $sql = "SELECT Prenom,Specialite,Bureau,Telephone,Email,Planning,Photo FROM medecin WHERE Nom='$Nom'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $Prenom=$data["Prenom"];
                    $Specialite=$data["Specialite"];
                    $Bureau=$data["Bureau"];
                    $Telephone=$data["Telephone"];
                    $Email=$data["Email"];
                    $Planning=$data["Planning"];
                    $Photo=$data["Photo"];
                };

                $sql = "SELECT Dispo FROM planning WHERE Nom='$Nom'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $planning[] = $data["Dispo"];
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
                <div id="photo_medecin">
                    <script type="text/javascript">
                    var Photo=<?php echo json_encode($Photo)?>;
                    var PhotoMedecin ='<img src="'+Photo+'" width="300px" height="300"></img>';
                    $("#photo_medecin").append(PhotoMedecin);
                    </script>
                </div>
                <div id="infos_medecin">
                    <script type="text/javascript">
                    var Nom=<?php echo json_encode($Nom)?>;
                    var Prenom=<?php echo json_encode($Prenom)?>;
                    var Specialite=<?php echo json_encode($Specialite)?>;
                    var Bureau=<?php echo json_encode($Bureau)?>;
                    var Telephone=<?php echo json_encode($Telephone)?>;
                    var Email=<?php echo json_encode($Email)?>;
                    var InfosMedecin='<h2>Dr.'+Prenom+' '+Nom+'</h2>';
                    InfosMedecin+='<h3>Médecin: '+Specialite+'</h3>';
                    InfosMedecin+='<h3>Bureau: '+Bureau+'</h3>';
                    InfosMedecin+='<h3>Téléphone: +33 '+Telephone+'</h3>';
                    InfosMedecin+='<h3>Email: '+Email+'</h3>';
                    $("#infos_medecin").append(InfosMedecin);
                    </script>
                </div>
                <div id="planning_medecin">
                    <script type="text/javascript">
                        function Dispo(){
                            var Dispo=<?php echo json_encode($planning)?>;
                            for(var i=0; i<Dispo.length; i++){
                            if(Dispo[i]==0){
                                $("#btn"+i).css("background-color", "black");
                                $("#btn"+i).prop("disabled",true);
                            }
                            }
                        }
                    </script>
                    <table border="1px" align="center">
                        <tr>
                            <td COLSPAN="3" ROWSPAN="2" align="middle" class="LibelleInfoPlanning">Spécialité</td>
                            <td COLSPAN="3" ROWSPAN="2"align="middle" class="LibelleInfoPlanning">Médecin</td>
                            <td COLSPAN="2" align="middle" class="JourPlanning">Lundi</td>
                            <td COLSPAN="2" align="middle" class="JourPlanning">Mardi</td>
                            <td COLSPAN="2" align="middle" class="JourPlanning">Mercredi</td>
                            <td COLSPAN="2" align="middle" class="JourPlanning">Jeudi</td>
                            <td COLSPAN="2" align="middle" class="JourPlanning">Vendredi</td>
                            <td COLSPAN="2" align="middle" class="JourPlanning">Samedi</td>
                        </tr>
                        <tr>
                            <td align="middle">AM</td>
                            <td align="middle">PM</td>
                            <td align="middle">AM</td>
                            <td align="middle">PM</td>
                            <td align="middle">AM</td>
                            <td align="middle">PM</td>
                            <td align="middle">AM</td>
                            <td align="middle">PM</td>
                            <td align="middle">AM</td>
                            <td align="middle">PM</td>
                            <td align="middle">AM</td>
                            <td align="middle">PM</td>
                        </tr>
                        <tr>
                            <td COLSPAN="3" ROWSPAN="1" align="middle" class="infoMedecinPlanning"><?php echo $Specialite?></td>
                            <td COLSPAN="3" ROWSPAN="1" align="middle" class="infoMedecinPlanning"><?php echo $Nom?></td>
                            <td id="btn0"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn1"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn2"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn3"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn4"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn5"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn6"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn7"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn8"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn9"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn10"><script type="text/javascript">Dispo();</script></td>
                            <td id="btn11"><script type="text/javascript">Dispo();</script></td>
                        </tr>
                    </table>
                </div>
                <div id="priseDeRdv">
                    <a href="PriseDeRDV.php"><img src="btn_Rdv.png" alt="boutonRDV" width="200" height="70"></a>
                </div>
                <div id="CommuniquerAvecMedecin">
                    <a href="Chatroom.php"><img src="btn_CommuniquerMedecin.png" alt="boutonComm" width="200" height="70"></a>
                </div>
                <div id="VoirCV">
                    <a href="CV.php"><img src="btn_VoirCV.png" alt="boutonCV" width="200" height="70"></a>
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