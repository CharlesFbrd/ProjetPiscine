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
            $fichier = 'CV'.$_SESSION["NomMedecin"].'.xml';
            $CV = simplexml_load_file($fichier);
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
                <div id="CVmedecin">

                    <h2> ETAT CIVIL </h2>
                    <p> 
                        <label id="libelle">Nom :</label> <?php echo $CV->etatCivil->nom ?> <br>
                        <label id="libelle">Prénom :</label> <?php echo $CV->etatCivil->prenom ?> <br>
                        <label id="libelle">Adresse :</label> <?php echo $CV->etatCivil->adresse ?> <br>
                        <label id="libelle">Date de naissance :</label> <?php echo $CV->etatCivil->dateDeNaissance ?> <br>
                        <label id="libelle">Email :</label> <?php echo $CV->etatCivil->email ?> <br>
                    </p>

                    <h2> DIPLÔMES </h2>
                    <p> 
                        <label id="libelle">Titre :</label> <?php echo $CV->diplomes->libelle ?> <br>
                        <label id="libelle">Année :</label> <?php echo $CV->diplomes->annee ?> <br>
                        <label id="libelle">Institution :</label> <?php echo $CV->diplomes->institution ?> <br>
                        <br>
                        <label id="libelle">Titre :</label> <?php echo $CV->diplomes->libelle ?> <br>
                        <label id="libelle">Année :</label> <?php echo $CV->diplomes->annee?> <br>
                        <label id="libelle">Institution :</label> <?php echo $CV->diplomes->institution ?> <br>

                    </p>


                    <h2> EXPÉRIENCE </h2>
                    <p> 
                        <label id="libelle">Poste :</label> <?php echo $CV->experiences->poste ?> <br>
                        <label id="libelle">Début de la prise de poste :</label> <?php echo $CV->experiences->debut ?> <br>
                        <label id="libelle">Fin de la prise de poste :</label> <?php echo $CV->experiences->fin ?> <br>
                        <label id="libelle">Mission :</label> <?php echo $CV->experiences->mission ?> <br>
                        <label id="libelle">Entreprise :</label> <?php echo $CV->experiences->mission ?> <br>
                        <br>
                        <label id="libelle">Poste :</label> <?php echo $CV->experiences->poste ?> <br>
                        <label id="libelle">Début de la prise de poste :</label> <?php echo $CV->experiences->debut ?> <br>
                        <label id="libelle">Fin de la prise de poste :</label> <?php echo $CV->experiences->fin ?> <br>
                        <label id="libelle">Mission :</label> <?php echo $CV->experiences->mission ?> <br>
                        <label id="libelle">Entreprise :</label> <?php echo $CV->experiences->mission ?> <br>

                    </p>
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