<?php
    session_start();
    if(isset($_POST["Deconnexion"])){
        $_SESSION["connexion"] = 0;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
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
                            affichage += '<input id = "btnProfilPatient" type="submit" value = "Mon profil">';
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
                        <input type="submit" value="Tout parcourir">
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

                <div id="texte_event1">
                    <h2>R??int??grer les soignants non vaccin??s : combien et comment ?</h2>
                    <p>?? Quand on ne sera plus en phase aigu?? [de l?????pid??mie], on le fera. ?? 
                        Comprendre : on les r??int??grera. Le 29 avril, le pr??sident de la R??publique, 
                        Emmanuel Macron, r??ouvrait la porte aux soignants non vaccin??s, mis au ban 
                        des h??pitaux en septembre 2021. Deux semaines plus tard, c?????tait au tour 
                        d???Olivier V??ran d?????voquer une saisie de la Haute Autorit?? de sant?? (HAS) 
                        ?? leur sujet. Deux arguments circulent pour leur r??int??gration : la phase 
                        descendante de l?????pid??mie (environ 22 000 nouveaux cas au 21 mai), et la 
                        n??cessit?? de bras dans un h??pital en manque de soignants.</p>
                </div>
                <div id="img_event1">
                    <img src="img_event1.png" alt="ImageEvent1" width="300" height="230">
                </div>

                <div id="img_event2">
                    <img src="img_event2.png" alt="ImageEvent2" width="300" height="230">
                </div>
                <div id="texte_event2">
                    <h2>H??pital : la crise ne cesse d???enfler aux urgences</h2>
                    <p>Une grande tente dress??e ?? l???ext??rieur, des membres de 
                        la protection civile??? l???accueil est pour le moins surprenant 
                        ?? l???entr??e des urgences du centre hospitalier universitaire 
                        (CHU) Pellegrin, ?? Bordeaux. Apr??s 17 heures et jusqu????? 8 
                        heures du matin, les patients qui arrivent d??couvrent en effet 
                        porte close. Du jamais-vu. A la place, cet avant-poste avec des 
                        b??n??voles ?? l???uniforme bleu marine et orange, charg??s de trier 
                        les urgences les plus graves. ?? Hier, quelqu???un est arriv??, il 
                        faisait un ??d??me. On l???a imm??diatement fait entrer ??, raconte 
                        l???un d???entre eux post?? avec quatre autres dipl??m??s de secourisme, 
                        jeudi 19 mai, pour bien signifier que les urgences vitales ou aigu??s 
                        continuent ?? ??tre prises en charge. ?? Quand on a un doute, l???infirmier 
                        de garde vient voir de quoi il retourne ??, rassure-t-il aussi.</p>
                </div>

                <div id="texte_event3">
                    <h2>Variole du singe : un premier cas d???infection confirm?? en France</h2>
                    <p>Un premier cas confirm?? de variole du singe a ??t?? d??tect??, jeudi, 
                        en Ile-de-France, ont annonc?? vendredi 20 mai les autorit??s sanitaires. 
                        Il s???agit d???un homme de 29 ans sans ant??c??dent de voyage dans un pays o?? 
                        circule le virus, ont pr??cis?? la direction g??n??rale de la sant?? et Sant?? 
                        publique France (SPF). D??s la suspicion de son infection, cette personne 
                        a ??t?? prise en charge et, en l???absence de gravit??, est isol??e ?? son domicile.
                        Une enqu??te ??pid??miologique approfondie est mise en ??uvre par les ??quipes de 
                        SPF et de l???agence r??gionale de sant?? d???Ile-de-France, en lien avec le m??decin 
                        ayant pris en charge cette personne. Les personnes ayant ??t?? en contact ??troit 
                        avec le patient sont en cours de recensement. Elles recevront de la part des 
                        autorit??s sanitaires les informations sur la conduite ?? tenir, afin de limiter 
                        la propagation du virus.</p>
                </div>
                <div id="img_event3">
                    <img src="img_event3.png" alt="ImageEvent3" width="300" height="230">
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