<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prise De RDV</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <?php 
            $Nom = $_SESSION["NomMedecin"];
            $disponibilite = array();
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
                    $Prenom=$data["Prenom"];
                    $Specialite=$data["Specialite"];
                    $Bureau=$data["Bureau"];
                    $Telephone=$data["Telephone"];
                    $Email=$data["Email"];
                    $Planning=$data["Planning"];
                    $Photo=$data["Photo"];
                };

                $sql = "SELECT Dispo FROM disponibilite WHERE Nom='$Nom'";
                $res = mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($res)){
                    $disponibilite[]=$data["Dispo"];
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
                <div id="planning">
                    <script type="text/javascript">
                        function Dispo(){
                            var Dispo=<?php echo json_encode($disponibilite)?>;
                            for(var i=0; i<Dispo.length; i++){
                            if(Dispo[i]==0){
                                $("#btn"+i).css("background-color", "black");
                                $("#btn"+i).prop("disabled",true);
                            }else if(Dispo[i]==2){
                                $("#btn"+i).css("background-color", "#2d80e1");
                                $("#btn"+i).prop("disabled",true);
                            }
                            // }else if(Dispo[i]==1){
                            //     $("#btn"+i).css("background-color", "white");
                            //     $("#btn"+i).prop("disabled",false);
                        }
                        }
                        function RDVLundi(value){
                            document.getElementById("JourRdv").innerHTML = "Lundi  ";
                            document.getElementById("HeureRdv").innerHTML = value;
                            document.getElementById("DonneeJourRdv").value="Lundi";
                            document.getElementById("DonneeHeureRdv").value=value;
                            $("#Soumettre").attr("disabled",false);
                        }
                        function RDVMardi(value){
                            document.getElementById("JourRdv").innerHTML = "Mardi  ";
                            document.getElementById("HeureRdv").innerHTML = value;
                            document.getElementById("DonneeJourRdv").value="Mardi";
                            document.getElementById("DonneeHeureRdv").value=value;
                            $("#Soumettre").attr("disabled",false);
                        }
                        function RDVMercredi(value){
                            document.getElementById("JourRdv").innerHTML = "Mercredi  ";
                            document.getElementById("HeureRdv").innerHTML = value;
                            document.getElementById("DonneeJourRdv").value="Mercredi";
                            document.getElementById("DonneeHeureRdv").value=value;
                            $("#Soumettre").attr("disabled",false);
                        };
                        function RDVJeudi(value){
                            document.getElementById("JourRdv").innerHTML = "Jeudi  ";
                            document.getElementById("HeureRdv").innerHTML = value;
                            document.getElementById("DonneeJourRdv").value="Jeudi";
                            document.getElementById("DonneeHeureRdv").value=value;
                            $("#Soumettre").attr("disabled",false);
                        }
                        function RDVVendredi(value){
                            document.getElementById("JourRdv").innerHTML = "Vendredi  ";
                            document.getElementById("HeureRdv").innerHTML = value;
                            document.getElementById("DonneeJourRdv").value="Vendredi";
                            document.getElementById("DonneeHeureRdv").value=value;
                            $("#Soumettre").attr("disabled",false);
                        }
                        function RDVSamedi(value){
                            document.getElementById("JourRdv").innerHTML = "Samedi  ";
                            document.getElementById("HeureRdv").innerHTML = value;
                            document.getElementById("DonneeJourRdv").value="Samedi";
                            document.getElementById("DonneeHeureRdv").value=value;
                            $("#Soumettre").attr("disabled",false);
                        }
                    </script>
                    <table border="1px">
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
                            <td COLSPAN="3" ROWSPAN="9" align="middle" class="infoMedecinPlanning"><?php echo $Specialite?></td>
                            <td COLSPAN="3" ROWSPAN="9" align="middle" class="infoMedecinPlanning"><?php echo $Nom." ".$Prenom?></td>
                            <td><button id="btn0" style="width:100%" value="8h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>8h00</button></td>
                            <td><button id="btn9" style="width:100%" value="14h00" onclick="RDVLundi(this.value)"> <script type="text/javascript">Dispo();</script>14h00</button></td>
                            <td><button id="btn18" style="width:100%" value="8h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>8h00</button></td>
                            <td><button id="btn27" style="width:100%" value="14h00"onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>14h00</button></td>
                            <td><button id="btn36" style="width:100%" value="8h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>8h00</button></td>
                            <td><button id="btn45" style="width:100%" value="14h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>14h00</button></td>
                            <td><button id="btn54" style="width:100%" value="8h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>8h00</button></td>
                            <td><button id="btn63" style="width:100%" value="14h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>14h00</button></td>
                            <td><button id="btn72" style="width:100%" value="8h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>8h00</button></td>
                            <td><button id="btn81" style="width:100%" value="14h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>14h00</button></td>
                            <td><button id="btn90" style="width:100%" value="8h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>8h00</button></td>
                            <td><button id="btn99" style="width:100%" value="14h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>14h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn1" style="width:100%" value="8h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>8h30</button></td>
                        <td><button id="btn10" style="width:100%" value="14h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>14h30</button></td>
                        <td><button id="btn19" style="width:100%" value="8h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>8h30</button></td>
                        <td><button id="btn28" style="width:100%" value="14h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>14h30</button></td>
                        <td><button id="btn37" style="width:100%" value="8h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>8h30</button></td>
                        <td><button id="btn46" style="width:100%" value="14h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>14h30</button></td>
                        <td><button id="btn55" style="width:100%" value="8h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>8h30</button></td>
                        <td><button id="btn64" style="width:100%" value="14h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>14h30</button></td>
                        <td><button id="btn73" style="width:100%" value="8h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>8h30</button></td>
                        <td><button id="btn82" style="width:100%" value="14h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>14h30</button></td>
                        <td><button id="btn91" style="width:100%" value="8h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>8h30</button></td>
                        <td><button id="btn100" style="width:100%" value="14h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>14h30</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn2" style="width:100%" value="9h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>9h00</button></td>
                        <td><button id="btn11" style="width:100%" value="15h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>15h00</button></td>
                        <td><button id="btn20" style="width:100%" value="9h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>9h00</button></td>
                        <td><button id="btn29" style="width:100%" value="15h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>15h00</button></td>
                        <td><button id="btn38" style="width:100%" value="9h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>9h00</button></td>
                        <td><button id="btn47" style="width:100%" value="15h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>15h00</button></td>
                        <td><button id="btn56" style="width:100%" value="9h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>9h00</button></td>
                        <td><button id="btn65" style="width:100%" value="15h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>15h00</button></td>
                        <td><button id="btn74" style="width:100%" value="9h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>9h00</button></td>
                        <td><button id="btn83" style="width:100%" value="15h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>15h00</button></td>
                        <td><button id="btn92" style="width:100%" value="9h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>9h00</button></td>
                        <td><button id="btn101" style="width:100%" value="15h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>15h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn3" style="width:100%" value="9h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>9h30</button></td>
                        <td><button id="btn12" style="width:100%" value="15h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>15h30</button></td>
                        <td><button id="btn21" style="width:100%" value="9h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>9h30</button></td>
                        <td><button id="btn30" style="width:100%" value="15h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>15h30</button></td> 
                        <td><button id="btn39" style="width:100%" value="9h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>9h30</button></td>
                        <td><button id="btn48" style="width:100%" value="15h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>15h30</button></td> 
                        <td><button id="btn57" style="width:100%" value="9h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>9h30</button></td>
                        <td><button id="btn66" style="width:100%" value="15h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>15h30</button></td> 
                        <td><button id="btn75" style="width:100%" value="9h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>9h30</button></td>
                        <td><button id="btn84" style="width:100%" value="15h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>15h30</button></td> 
                        <td><button id="btn93" style="width:100%" value="9h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>9h30</button></td>
                        <td><button id="btn102" style="width:100%" value="15h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>15h30</button></td>  
                        </tr>
                        <tr>
                        <td><button id="btn4" style="width:100%" value="10h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>10h00</button></td>
                        <td><button id="btn13" style="width:100%" value="16h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>16h00</button></td>
                        <td><button id="btn22" style="width:100%" value="10h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>10h00</button></td>
                        <td><button id="btn31" style="width:100%" value="16h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>16h00</button></td>
                        <td><button id="btn40" style="width:100%" value="10h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>10h00</button></td>
                        <td><button id="btn49" style="width:100%" value="16h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>16h00</button></td>
                        <td><button id="btn58" style="width:100%" value="10h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>10h00</button></td>
                        <td><button id="btn67" style="width:100%" value="16h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>16h00</button></td>
                        <td><button id="btn76" style="width:100%" value="10h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>10h00</button></td>
                        <td><button id="btn85" style="width:100%" value="16h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>16h00</button></td>
                        <td><button id="btn94" style="width:100%" value="10h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>10h00</button></td>
                        <td><button id="btn103" style="width:100%" value="16h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>16h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn5" style="width:100%" value="10h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>10h30</button></td>
                        <td><button id="btn14" style="width:100%" value="16h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>16h30</button></td>
                        <td><button id="btn23" style="width:100%" value="10h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>10h30</button></td>
                        <td><button id="btn32" style="width:100%" value="16h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>16h30</button></td>
                        <td><button id="btn41" style="width:100%" value="10h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>10h30</button></td>
                        <td><button id="btn50" style="width:100%" value="16h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>16h30</button></td>
                        <td><button id="btn59" style="width:100%" value="10h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>10h30</button></td>
                        <td><button id="btn68" style="width:100%" value="16h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>16h30</button></td>
                        <td><button id="btn77" style="width:100%" value="10h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>10h30</button></td>
                        <td><button id="btn86" style="width:100%" value="16h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>16h30</button></td>
                        <td><button id="btn95" style="width:100%" value="10h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>10h30</button></td>
                        <td><button id="btn104" style="width:100%" value="16h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>16h30</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn6" style="width:100%" value="11h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>11h00</button></td>
                        <td><button id="btn15" style="width:100%" value="17h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>17h00</button></td>
                        <td><button id="btn24" style="width:100%" value="11h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>11h00</button></td>
                        <td><button id="btn33" style="width:100%" value="17h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>17h00</button></td>
                        <td><button id="btn42" style="width:100%" value="11h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>11h00</button></td>
                        <td><button id="btn51" style="width:100%" value="17h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>17h00</button></td>
                        <td><button id="btn60" style="width:100%" value="11h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>11h00</button></td>
                        <td><button id="btn69" style="width:100%" value="17h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>17h00</button></td>
                        <td><button id="btn78" style="width:100%" value="11h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>11h00</button></td>
                        <td><button id="btn87" style="width:100%" value="17h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>17h00</button></td>
                        <td><button id="btn96" style="width:100%" value="11h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>11h00</button></td>
                        <td><button id="btn105" style="width:100%" value="17h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>17h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn7" style="width:100%" value="11h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>11h30</button></td>
                        <td><button id="btn16" style="width:100%" value="17h30" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>17h30</button></td>
                        <td><button id="btn25" style="width:100%" value="11h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>11h30</button></td>
                        <td><button id="btn34" style="width:100%" value="17h30" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>17h30</button></td>
                        <td><button id="btn43" style="width:100%" value="11h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>11h30</button></td>
                        <td><button id="btn52" style="width:100%" value="17h30" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>17h30</button></td>
                        <td><button id="btn61" style="width:100%" value="11h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>11h30</button></td>
                        <td><button id="btn70" style="width:100%" value="17h30" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>17h30</button></td>
                        <td><button id="btn79" style="width:100%" value="11h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>11h30</button></td>
                        <td><button id="btn88" style="width:100%" value="17h30" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>17h30</button></td>
                        <td><button id="btn97" style="width:100%" value="11h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>11h30</button></td>
                        <td><button id="btn106" style="width:100%" value="17h30" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>17h30</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn8" style="width:100%" value="12h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>12h00</button></td>
                        <td><button id="btn17" style="width:100%" value="18h00" onclick="RDVLundi(this.value)"><script type="text/javascript">Dispo();</script>18h00</button></td>
                        <td><button id="btn26" style="width:100%" value="12h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>12h00</button></td>
                        <td><button id="btn35" style="width:100%" value="18h00" onclick="RDVMardi(this.value)"><script type="text/javascript">Dispo();</script>18h00</button></td>
                        <td><button id="btn44" style="width:100%" value="12h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>12h00</button></td>
                        <td><button id="btn53" style="width:100%" value="18h00" onclick="RDVMercredi(this.value)"><script type="text/javascript">Dispo();</script>18h00</button></td>
                        <td><button id="btn62" style="width:100%" value="12h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>12h00</button></td>
                        <td><button id="btn71" style="width:100%" value="18h00" onclick="RDVJeudi(this.value)"><script type="text/javascript">Dispo();</script>18h00</button></td>
                        <td><button id="btn80" style="width:100%" value="12h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>12h00</button></td>
                        <td><button id="btn89" style="width:100%" value="18h00" onclick="RDVVendredi(this.value)"><script type="text/javascript">Dispo();</script>18h00</button></td>
                        <td><button id="btn98" style="width:100%" value="12h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>12h00</button></td>
                        <td><button id="btn107" style="width:100%" value="18h00" onclick="RDVSamedi(this.value)"><script type="text/javascript">Dispo();</script>18h00</button></td>
                        </tr>
                    </table>
                </div>
                <div id="InfoRDV">
                    <form action="ConfirmationRDV.php" method="post">
                        <table>
                            <tr>
                                <td><label class="JHRdv" style="width:100%">Jour: </label></td>
                                <td><label id="JourRdv" name="JourRdv" style="width:100%"></label></td>
                                <td><label class="JHRdv" style="width:100%">Heure: </label></td>
                                <td><label id="HeureRdv" name="HeureRdv" style="width:100%"></label></td>
                            </tr>
                            <tr>
                                <td><input type="hidden"  id="DonneeJourRdv" name="DonneeJourRdv"></td>
                                <td><input type="hidden"  id="DonneeHeureRdv" name="DonneeHeureRdv"></td>
                            </tr>
                            <tr>
                                <td COLSPAN="4"><input type="submit" id="Soumettre" style="width:100%" value="Prendre le RDV" disabled="disabled"></input></td>
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