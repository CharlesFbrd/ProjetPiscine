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
                    <h2>Service de Dépistage: </h2>
                    <p>Dans notre Laboratoire vous pouvez réaliser des tests PCR et antigénique sur rendez-vous uniquement.<br>
                    Si vous cntractez des symptômes du COVID-19, isolez vous et prenez un rendez-vous pour vous faire dépister.<br>
                    Contactez les gens avec qui vous avez été en contact ces derniers jours pour qu'eux aussi se fassent dépister.
                    </p>
                </div>
                <div id="service_biologie_preventive">
                    <h2>Service de Biologie préventive: </h2>
                    <p>Des bilans pour prévenir les effets du vieillissement, optimiser votre capital santé ou explorer les causes de certains symptômes.<br>
                    Obtenez des recommandations à partir de l'interprétation de vos résultats grâce à nos experts et/ou votre prescripteur.<br>
                    En fonction de vos résultats, des recommandations médicales ou nutritionnelles seront mises en place avec votre prescripteur.<br>
                    </p>
                </div>
                <div id="service_biologie_femme">
                    <h2>Service de Biologie de la femme enceinte: </h2>
                    <p>En France, environ 750 000 enfants naissent chaque année. Pendant la période périnatale, les professionnels de santé sont en première ligne pour accompagner les parents. L’Assurance Maladie propose également un accompagnement personnalisé pour les femmes dès leur déclaration de grossesse. Le point sur cet accompagnement et la prévention de certains facteurs de risque associés à la grossesse.<br>
                    Nos médecins vous accompgnent tout au long de votre grossesse à l'aide de test permettant un développement du bébé sans compliquation et permettant d'éviter les risques survenant lors d'une grossesse.
                    </p>
                </div>
                <div id="service_biologie_routine">
                    <h2>Service de Biologie de Routine: </h2>
                    <p>Il s’agit d’examens couramment prescrits pour la surveillance simple de la santé ou lors du suivi d’un traitement : biochimie clinique, bactériologie par culture des germes, tests d’hémostase, hématologie, sérologies fréquentes, hormonologie, marqueurs de cancers tumoraux, des anémies, de souffrance cardiaque.</p>
                </div>
                <div id="service_cancerologie">
                    <h2>Service de Cancerologie: </h2>
                    <p>Notre Laboratoire possède aussi un service de cancérologie dans lequel nous réalisons différents tests tel que des prélèvements de sang ou d'urine.<br>
                    Ces tests nous permettent de prévenir et de réagir au plus tôt face à un cancer se développant
                    </p>
                </div>
                <div id="service_gynecologie">
                    <h2>Service de Gynécologie: </h2>
                    <p>L’unité s’appuie sur un plateau technique de haut niveau. Elle travaille en étroite relation avec le service d’imagerie médicale.<br>
                    L’unité  assure des échographies gynécologiques (le service d’imagerie est équipé de 3 salles d’échographie) mais aussi des investigations de sénologie (maladies du sein) au moyen de : mammographies, échographies mammaires, micro-biopsies et macro-biopsies mammaires sous échographie et sous stéréotaxie, IRM mammaires.</p>
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
                Dernière mise à jour le 07/05/2022</footer>
            </div>
        </div>
    </body>
</html>