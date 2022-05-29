<?php

    session_start(); 

?> 


<!DOCTYPE html>
<html>
    <head>
        <title> Votre profil</title>
        <meta charset="utf-8">
        <link href="profilAdmin.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id = "boxProfilAdmin">
                    <form id = "formMonProfil" action="monCompteAdmin.php">
                        <input id = "btnProfilAdmin" type="submit" value = "Mon profil">
                    </form>
                </div>
            </div>

            <div id="navigation">
                <form action="profilAdmin.php">
                    <input type="submit" value = "Accueil">
                </form>
                <form action="AjouterSupprimerM.php">
                    <input type="submit" value = "Maj Médecin">
                </form>
                <form action="creerCVXml.php">
                    <input type="submit" value = "Ajouter un CV">
                </form>
                <form action="edt.php">
                    <input type="submit" value = "Modifier l'edt">
                </form>
            </div>

            <div id="section">

                <div id="texte_event1">
                    <h2>Réintégrer les soignants non vaccinés : combien et comment ?</h2>
                    <p>« Quand on ne sera plus en phase aiguë [de l’épidémie], on le fera. » 
                        Comprendre : on les réintégrera. Le 29 avril, le président de la République, 
                        Emmanuel Macron, réouvrait la porte aux soignants non vaccinés, mis au ban 
                        des hôpitaux en septembre 2021. Deux semaines plus tard, c’était au tour 
                        d’Olivier Véran d’évoquer une saisie de la Haute Autorité de santé (HAS) 
                        à leur sujet. Deux arguments circulent pour leur réintégration : la phase 
                        descendante de l’épidémie (environ 22 000 nouveaux cas au 21 mai), et la 
                        nécessité de bras dans un hôpital en manque de soignants.</p>
                </div>
                <div id="img_event1">
                    <img src="img_event1.png" alt="ImageEvent1" width="300" height="230">
                </div>

                <div id="img_event2">
                    <img src="img_event2.png" alt="ImageEvent2" width="300" height="230">
                </div>
                <div id="texte_event2">
                    <h2>Hôpital : la crise ne cesse d’enfler aux urgences</h2>
                    <p>Une grande tente dressée à l’extérieur, des membres de 
                        la protection civile… l’accueil est pour le moins surprenant 
                        à l’entrée des urgences du centre hospitalier universitaire 
                        (CHU) Pellegrin, à Bordeaux. Après 17 heures et jusqu’à 8 
                        heures du matin, les patients qui arrivent découvrent en effet 
                        porte close. Du jamais-vu. A la place, cet avant-poste avec des 
                        bénévoles à l’uniforme bleu marine et orange, chargés de trier 
                        les urgences les plus graves. « Hier, quelqu’un est arrivé, il 
                        faisait un œdème. On l’a immédiatement fait entrer », raconte 
                        l’un d’entre eux posté avec quatre autres diplômés de secourisme, 
                        jeudi 19 mai, pour bien signifier que les urgences vitales ou aiguës 
                        continuent à être prises en charge. « Quand on a un doute, l’infirmier 
                        de garde vient voir de quoi il retourne », rassure-t-il aussi.</p>
                </div>

                <div id="texte_event3">
                    <h2>Variole du singe : un premier cas d’infection confirmé en France</h2>
                    <p>Un premier cas confirmé de variole du singe a été détecté, jeudi, 
                        en Ile-de-France, ont annoncé vendredi 20 mai les autorités sanitaires. 
                        Il s’agit d’un homme de 29 ans sans antécédent de voyage dans un pays où 
                        circule le virus, ont précisé la direction générale de la santé et Santé 
                        publique France (SPF). Dès la suspicion de son infection, cette personne 
                        a été prise en charge et, en l’absence de gravité, est isolée à son domicile.
                        Une enquête épidémiologique approfondie est mise en œuvre par les équipes de 
                        SPF et de l’agence régionale de santé d’Ile-de-France, en lien avec le médecin 
                        ayant pris en charge cette personne. Les personnes ayant été en contact étroit 
                        avec le patient sont en cours de recensement. Elles recevront de la part des 
                        autorités sanitaires les informations sur la conduite à tenir, afin de limiter 
                        la propagation du virus.</p>
                </div>
                <div id="img_event3">
                    <img src="img_event3.png" alt="ImageEvent3" width="300" height="230">
                </div>
            </div>
            <div id="footer">
                <div id="img_map">
                    <br>    
                    <iframe width ="300px" height= "200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3728015691363!2d2.2863485157921275!3d48.85110107928679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653302169100!5m2!1sfr!2sfr" width="300" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            <footer id="infos">
                <h3> Cabinet Omnes Santé  </h3>
                <br>
                Adresse : 10, rue Sextius Michel, 75015 Paris <br>
                Tel :<a href="+33 1 44 39 06 00">+33 1 44 39 06 00</a> <br>
                Email : <a href="contact@omnesante.fr">contact@omnesante.fr</a><br>
                Droit d'auteur 2022 Omnes Education, France<br>
                Dernière mise à jour le 07/05/2022
            </footer>
            </div>
        </div>
    </body>
</html>