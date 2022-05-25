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
            $Nom = $_SESSION["NomMedecin"];
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
                <div id="planning">
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
                            <td><button id="btn0" style="width:100%" value="8h00">8h00</button></td>
                            <td><button id="btn9" style="width:100%" value="14h00">14h00</button></td>
                            <td><button id="btn18" style="width:100%" value="8h00">8h00</button></td>
                            <td><button id="btn27" style="width:100%" value="14h00">14h00</button></td>
                            <td><button id="btn36" style="width:100%" value="8h00">8h00</button></td>
                            <td><button id="btn45" style="width:100%" value="14h00">14h00</button></td>
                            <td><button id="btn54" style="width:100%" value="8h00">8h00</button></td>
                            <td><button id="btn63" style="width:100%" value="14h00">14h00</button></td>
                            <td><button id="btn72" style="width:100%" value="8h00">8h00</button></td>
                            <td><button id="btn81" style="width:100%" value="14h00">14h00</button></td>
                            <td><button id="btn90" style="width:100%" value="8h00">8h00</button></td>
                            <td><button id="btn99" style="width:100%" value="14h00">14h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn1" style="width:100%" value="8h30">8h30</button></td>
                        <td><button id="btn10" style="width:100%" value="14h30">14h30</button></td>
                        <td><button id="btn19" style="width:100%" value="8h30">8h30</button></td>
                        <td><button id="btn28" style="width:100%" value="14h30">14h30</button></td>
                        <td><button id="btn37" style="width:100%" value="8h30">8h30</button></td>
                        <td><button id="btn46" style="width:100%" value="14h30">14h30</button></td>
                        <td><button id="btn55" style="width:100%" value="8h30">8h30</button></td>
                        <td><button id="btn64" style="width:100%" value="14h30">14h30</button></td>
                        <td><button id="btn73" style="width:100%" value="8h30">8h30</button></td>
                        <td><button id="btn82" style="width:100%" value="14h30">14h30</button></td>
                        <td><button id="btn91" style="width:100%" value="8h30">8h30</button></td>
                        <td><button id="btn100" style="width:100%" value="14h30">14h30</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn2" style="width:100%" value="9h00">9h00</button></td>
                        <td><button id="btn11" style="width:100%" value="15h00">15h00</button></td>
                        <td><button id="btn20" style="width:100%" value="9h00">9h00</button></td>
                        <td><button id="btn29" style="width:100%" value="15h00">15h00</button></td>
                        <td><button id="btn38" style="width:100%" value="9h00">9h00</button></td>
                        <td><button id="btn47" style="width:100%" value="15h00">15h00</button></td>
                        <td><button id="btn56" style="width:100%" value="9h00">9h00</button></td>
                        <td><button id="btn65" style="width:100%" value="15h00">15h00</button></td>
                        <td><button id="btn74" style="width:100%" value="9h00">9h00</button></td>
                        <td><button id="btn83" style="width:100%" value="15h00">15h00</button></td>
                        <td><button id="btn92" style="width:100%" value="9h00">9h00</button></td>
                        <td><button id="btn101" style="width:100%" value="15h00">15h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn3" style="width:100%" value="9h30">9h30</button></td>
                        <td><button id="btn12" style="width:100%" value="15h30">15h30</button></td>
                        <td><button id="btn21" style="width:100%" value="9h30">9h30</button></td>
                        <td><button id="btn30" style="width:100%" value="15h30">15h30</button></td> 
                        <td><button id="btn39" style="width:100%" value="9h30">9h30</button></td>
                        <td><button id="btn48" style="width:100%" value="15h30">15h30</button></td> 
                        <td><button id="btn57" style="width:100%" value="9h30">9h30</button></td>
                        <td><button id="btn66" style="width:100%" value="15h30">15h30</button></td> 
                        <td><button id="btn75" style="width:100%" value="9h30">9h30</button></td>
                        <td><button id="btn84" style="width:100%" value="15h30">15h30</button></td> 
                        <td><button id="btn93" style="width:100%" value="9h30">9h30</button></td>
                        <td><button id="btn102" style="width:100%" value="15h30">15h30</button></td>  
                        </tr>
                        <tr>
                        <td><button id="btn4" style="width:100%" value="10h00">10h00</button></td>
                        <td><button id="btn13" style="width:100%" value="16h00">16h00</button></td>
                        <td><button id="btn22" style="width:100%" value="10h00">10h00</button></td>
                        <td><button id="btn31" style="width:100%" value="16h00">16h00</button></td>
                        <td><button id="btn40" style="width:100%" value="10h00">10h00</button></td>
                        <td><button id="btn49" style="width:100%" value="16h00">16h00</button></td>
                        <td><button id="btn58" style="width:100%" value="10h00">10h00</button></td>
                        <td><button id="btn67" style="width:100%" value="16h00">16h00</button></td>
                        <td><button id="btn76" style="width:100%" value="10h00">10h00</button></td>
                        <td><button id="btn85" style="width:100%" value="16h00">16h00</button></td>
                        <td><button id="btn94" style="width:100%" value="10h00">10h00</button></td>
                        <td><button id="btn103" style="width:100%" value="16h00">16h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn5" style="width:100%" value="10h30">10h30</button></td>
                        <td><button id="btn14" style="width:100%" value="16h30">16h30</button></td>
                        <td><button id="btn23" style="width:100%" value="10h30">10h30</button></td>
                        <td><button id="btn32" style="width:100%" value="16h30">16h30</button></td>
                        <td><button id="btn41" style="width:100%" value="10h30">10h30</button></td>
                        <td><button id="btn50" style="width:100%" value="16h30">16h30</button></td>
                        <td><button id="btn59" style="width:100%" value="10h30">10h30</button></td>
                        <td><button id="btn68" style="width:100%" value="16h30">16h30</button></td>
                        <td><button id="btn77" style="width:100%" value="10h30">10h30</button></td>
                        <td><button id="btn86" style="width:100%" value="16h30">16h30</button></td>
                        <td><button id="bt95" style="width:100%" value="10h30">10h30</button></td>
                        <td><button id="btn104" style="width:100%" value="16h30">16h30</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn6" style="width:100%" value="11h00">11h00</button></td>
                        <td><button id="btn15" style="width:100%" value="17h00">17h00</button></td>
                        <td><button id="btn24" style="width:100%" value="11h00">11h00</button></td>
                        <td><button id="btn33" style="width:100%" value="17h00">17h00</button></td>
                        <td><button id="btn42" style="width:100%" value="11h00">11h00</button></td>
                        <td><button id="btn51" style="width:100%" value="17h00">17h00</button></td>
                        <td><button id="btn60" style="width:100%" value="11h00">11h00</button></td>
                        <td><button id="btn69" style="width:100%" value="17h00">17h00</button></td>
                        <td><button id="btn78" style="width:100%" value="11h00">11h00</button></td>
                        <td><button id="btn87" style="width:100%" value="17h00">17h00</button></td>
                        <td><button id="btn96" style="width:100%" value="11h00">11h00</button></td>
                        <td><button id="btn105" style="width:100%" value="17h00">17h00</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn7" style="width:100%" value="11h30">11h30</button></td>
                        <td><button id="btn16" style="width:100%" value="17h30">17h30</button></td>
                        <td><button id="btn25" style="width:100%" value="11h30">11h30</button></td>
                        <td><button id="btn34" style="width:100%" value="17h30">17h30</button></td>
                        <td><button id="btn43" style="width:100%" value="11h30">11h30</button></td>
                        <td><button id="btn52" style="width:100%" value="17h30">17h30</button></td>
                        <td><button id="btn61" style="width:100%" value="11h30">11h30</button></td>
                        <td><button id="btn70" style="width:100%" value="17h30">17h30</button></td>
                        <td><button id="btn79" style="width:100%" value="11h30">11h30</button></td>
                        <td><button id="btn88" style="width:100%" value="17h30">17h30</button></td>
                        <td><button id="btn97" style="width:100%" value="11h30">11h30</button></td>
                        <td><button id="btn106" style="width:100%" value="17h30">17h30</button></td>
                        </tr>
                        <tr>
                        <td><button id="btn8" style="width:100%" value="12h00">12h00</button></td>
                        <td><button id="btn17" style="width:100%" value="18h00">18h00</button></td>
                        <td><button id="btn26" style="width:100%" value="12h00">12h00</button></td>
                        <td><button id="btn35" style="width:100%" value="18h00">18h00</button></td>
                        <td><button id="btn44" style="width:100%" value="12h00">12h00</button></td>
                        <td><button id="btn53" style="width:100%" value="18h00">18h00</button></td>
                        <td><button id="btn62" style="width:100%" value="12h00">12h00</button></td>
                        <td><button id="btn71" style="width:100%" value="18h00">18h00</button></td>
                        <td><button id="btn80" style="width:100%" value="12h00">12h00</button></td>
                        <td><button id="btn89" style="width:100%" value="18h00">18h00</button></td>
                        <td><button id="btn98" style="width:100%" value="12h00">12h00</button></td>
                        <td><button id="btn107" style="width:100%" value="18h00">18h00</button></td>
                        </tr>
                    </table>
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