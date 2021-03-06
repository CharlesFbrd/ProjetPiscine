<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Services Labo</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
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
                <div id="service_depistage">
                    <h2>Service de D??pistage: </h2>
                    <p>Dans notre Laboratoire vous pouvez r??aliser des tests PCR et antig??nique sur rendez-vous uniquement.<br>
                    Si vous cntractez des sympt??mes du COVID-19, isolez vous et prenez un rendez-vous pour vous faire d??pister.<br>
                    Contactez les gens avec qui vous avez ??t?? en contact ces derniers jours pour qu'eux aussi se fassent d??pister.
                    </p>
                </div>
                <div id="service_biologie_preventive">
                    <h2>Service de Biologie pr??ventive: </h2>
                    <p>Des bilans pour pr??venir les effets du vieillissement, optimiser votre capital sant?? ou explorer les causes de certains sympt??mes.<br>
                    Obtenez des recommandations ?? partir de l'interpr??tation de vos r??sultats gr??ce ?? nos experts et/ou votre prescripteur.<br>
                    En fonction de vos r??sultats, des recommandations m??dicales ou nutritionnelles seront mises en place avec votre prescripteur.<br>
                    </p>
                </div>
                <div id="service_biologie_femme">
                    <h2>Service de Biologie de la femme enceinte: </h2>
                    <p>En France, environ 750 000 enfants naissent chaque ann??e. Pendant la p??riode p??rinatale, les professionnels de sant?? sont en premi??re ligne pour accompagner les parents. L???Assurance Maladie propose ??galement un accompagnement personnalis?? pour les femmes d??s leur d??claration de grossesse. Le point sur cet accompagnement et la pr??vention de certains facteurs de risque associ??s ?? la grossesse.<br>
                    Nos m??decins vous accompgnent tout au long de votre grossesse ?? l'aide de test permettant un d??veloppement du b??b?? sans compliquation et permettant d'??viter les risques survenant lors d'une grossesse.
                    </p>
                </div>
                <div id="service_biologie_routine">
                    <h2>Service de Biologie de Routine: </h2>
                    <p>Il s???agit d???examens couramment prescrits pour la surveillance simple de la sant?? ou lors du suivi d???un traitement : biochimie clinique, bact??riologie par culture des germes, tests d???h??mostase, h??matologie, s??rologies fr??quentes, hormonologie, marqueurs de cancers tumoraux, des an??mies, de souffrance cardiaque.</p>
                </div>
                <div id="service_cancerologie">
                    <h2>Service de Cancerologie: </h2>
                    <p>Notre Laboratoire poss??de aussi un service de canc??rologie dans lequel nous r??alisons diff??rents tests tel que des pr??l??vements de sang ou d'urine.<br>
                    Ces tests nous permettent de pr??venir et de r??agir au plus t??t face ?? un cancer se d??veloppant
                    </p>
                </div>
                <div id="service_gynecologie">
                    <h2>Service de Gyn??cologie: </h2>
                    <p>L???unit?? s???appuie sur un plateau technique de haut niveau. Elle travaille en ??troite relation avec le service d???imagerie m??dicale.<br>
                    L???unit??  assure des ??chographies gyn??cologiques (le service d???imagerie est ??quip?? de 3 salles d?????chographie) mais aussi des investigations de s??nologie (maladies du sein) au moyen de : mammographies, ??chographies mammaires, micro-biopsies et macro-biopsies mammaires sous ??chographie et sous st??r??otaxie, IRM mammaires.</p>
                </div>
                <div id="priseDeRdvLabo2">
                    <a href="PriseDeRDVLabo.php"><img src="btn_Rdv2.png" alt="boutonRDV" width="200" height="70"></a>
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
                Derni??re mise ?? jour le 07/05/2022</footer>
            </div>
        </div>
    </body>
</html>