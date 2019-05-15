<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion admin</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>

      <header>
        <a href="index.php">
          ALLOCINE<strong>MET</strong>
        </a>
        <div class="entete">
          <a href="allo_films.php">FILMS </a>
          <a href="contact.html">CONTACT </a>
          <a href="#">connexion/inscription</a>
          <a href="#"><i class="fas fa-users"></i></a>
        </div>
      </header>

      <form action="admin.php" method="post">
        <h3>Veuillez entrez le mot de passe:</h3>
          <input type="password" name="mot_de_passe" />
          <button>Se connecter</button>
      </form>

        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "pioupiou") // Si le mot de passe est bon
    {
    // On affiche la page admin
    ?>
    <div class="container1">

    </div>
        <h2>ADMIN</h2>

    <h3 class="description">Permet d'ajouter les informations dans la bdd.</h3>


    <form action="admin.php" method="post" id="formulaire">
        <label for="TITRE">TITRE</label> : <input type="text" name="titre" id="titre"  /><br />
        <label for="RESUME">RESUME</label> :  <input type="text" name="resume" id="resume" /><br />
        <label for="AFFICHE">AFFICHE</label> :  <input type="text" name="affiche" id="affiche" /><br />
        <label for="bande_annonce">bande_annonce</label> :  <input type="text" name="bande_annonce" id="bande_annonce" /><br />
        <label for="DATE_DE_SORTIE">DATE_DE_SORTIE</label> : <input type="date" name="date_de_sortie" id="date_de_sortie"  /><br />

        <label for="nom_acteur">NOM_ACTEUR</label> : <input type="text" name="nom_acteur" id="nom_acteur"  /><br />
        <label for="prenom_acteur">PRENOM_ACTEUR</label> :  <input type="text" name="prenom_acteur" id="prenom_acteur" /><br />

        <label for="nom_realisateur">NOM_REALISATEUR</label> : <input type="text" name="nom_realisateur" id="nom_realisateur"  /><br />
        <label for="prenom_realisateur">PRENOM_REALISATEUR</label> :  <input type="text" name="prenom_realisateur" id="prenom_realisateur" /><br />

        <label for="GENRE">GENRE</label> : <input type="text" name="intitule_du_genre" id="intitule_du_genre"  /><br />
        <input type="submit" value="Envoyer" />
    </form>

        <?php
    }
    ?>
    <?php

    include('connect_bdd.php');

    $req = $bdd->prepare('INSERT INTO FILM(titre, resume, affiche, bande_annonce, date_de_sortie) VALUES(?, ?, ?, ?, ?)');
    $req->execute(array(
    $_POST['titre'],
    $_POST['resume'],
    $_POST['affiche'],
    $_POST['bande_annonce'],
    $_POST['date_de_sortie'],
    ));

    $req = $bdd->prepare('INSERT INTO ACTEUR(nom_acteur, prenom_acteur) VALUES(?, ?)');
    $req->execute(array(
    $_POST['nom_acteur'],
    $_POST['prenom_acteur'],
    ));

    $req = $bdd->prepare('INSERT INTO GENRE(intitule_du_genre) VALUES(?)');
    $req->execute(array(
    $_POST['intitule_du_genre'],
    ));

    $req = $bdd->prepare('INSERT INTO REALISATEUR(nom_realisateur, prenom_realisateur) VALUES(?, ?)');
    $req->execute(array(
      $_POST['nom_realisateur'],
      $_POST['prenom_realisateur'],
      ));
    ?>

    </body>
</html>
