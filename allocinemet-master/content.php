<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Content</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_pages_cont_real_act.css">
  <link rel="stylesheet" href="css/footer.css">

<body>
  <!--pour se connecter à la bdd-->
  <?php

  include('connect_bdd.php');

  include('requete2.php');

  $reponse = $bdd->query($req2);

  while ($donnees = $reponse->fetch())

  {
    ?>

  <main>
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

    <!--  pour le titre -->

    <div class="titre">
      <a href="content.php"><h1 class="text-uppercase"><?php echo $donnees['titre'];?></h1></a><!-- intégration du titre via la base de donnée -->
    </div>

    <!-- pour l'image du film -->

    <div class="affiche"><a href="#"><img src="<?php echo $donnees['affiche'];?>" style="height: 90%; width: 80%;"/></a><!-- intégration de l'image via la bdd -->
    </div>
    <!-- pour la description du film -->
    <div class="resume">
    <h2>RESUME</h2>
    <p><?php echo $donnees['resume'];?>
    </p>
  </div>
  <?php
  }

   $reponse->closeCursor();
  ?>
    <!-- pour la partie récap d'infos et la bande annonce -->
<div class="part_acteur_bo">
  <div class="part_act">

    <!-- boucle acteurs bdd -->

              <h5>Acteurs:
                <?php

                include('connect_bdd.php');

                $id = $_GET['id'];
                $req = "SELECT * FROM FILM,ACTEUR,joue WHERE FILM.id_film=$id AND ACTEUR.id_acteur = joue.id_acteur AND FILM.id_film = joue.id_film";
                $reponse = $bdd->query($req);

                while ($donnees = $reponse->fetch())

                {
                  ?>
              <?php echo $donnees['nom_acteur']; ?> <?php echo $donnees['prenom_acteur']; ?>
                  <?php
                  }

                   $reponse->closeCursor();
                  ?>
                </h5>

                <!--boucle réalisateurs bdd -->

              <h5>Réalisateurs:<?php

              include('connect_bdd.php');

              $id = $_GET['id'];
              $req = "SELECT * FROM FILM,REALISATEUR,realiser WHERE FILM.id_film=$id AND REALISATEUR.id_realisteur = realiser.id_realisteur AND FILM.id_film = realiser.id_film";
              $reponse = $bdd->query($req);

              while ($donnees = $reponse->fetch())

              {
                ?>
            <?php echo $donnees['nom_realisateur']; ?> <?php echo $donnees['prenom_realisateur']; ?>
                <?php
                }

                 $reponse->closeCursor();
                ?>
              </h5>

              <?php

              include('connect_bdd.php');

              include('requete2.php');

              $reponse = $bdd->query($req2);

              while ($donnees = $reponse->fetch())

              {
                ?>

          <h5>Date de sortie: <?php echo $donnees['date_de_sortie']; ?></h5>
          <!-- fin de la boucle et fin de la requête -->
          <?php
          }

           $reponse->closeCursor();
          ?>

          <!--boucle pour les genres-->

          <h5>Genre:
          <?php

          include('connect_bdd.php');

          $id = $_GET['id'];
          $req = "SELECT * FROM FILM,GENRE,appartient WHERE FILM.id_film=$id AND GENRE.id_genre = appartient.id_genre AND FILM.id_film = appartient.id_film";
          $reponse = $bdd->query($req);

          while ($donnees = $reponse->fetch())

          {
            ?>

          <?php echo $donnees['intitule_du_genre']; ?>

          <?php
          }

           $reponse->closeCursor();
          ?></h5>

        </div>

        <!-- boucle pour la video -->

        <?php

        include('connect_bdd.php');

        include('requete2.php');

        $reponse = $bdd->query($req2);

        while ($donnees = $reponse->fetch())

        {
          ?>
  <?php echo $donnees['bande_annonce'];?>
</div>
<!-- fin de la boucle et fin de la requête -->
<?php
}

 $reponse->closeCursor();
?>
  </main>

  <footer>
    <div class="footer1">
          <h3><a href="index.php"> ALLOCINE<strong>MET</strong></a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur ad Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
            <div class="footer_part2">
            <p><a href="content.php?id=1">Film 1</a></p>
            <p><a href="content.php?id=2">Film 2</a></p>
          </div>
          <div class="footer_part2_1">
          <p><a href="">Lorem Ipsum</a></p>
            <p><a href="">Lorem Ipsum</a></p>
          </div>
          <div class="footer_part3">
          <p><a href="contact.php">Restez connectés</a></p>
              <a href="">
                <i class="fab fa-facebook-f fa-1x" style="color:white;"></i>
              </a>
            </li>
            <li>
              <a href="">
              <i class="fab fa-twitter fa-1x" style="color:white;"></i>
              </a>
            </li>
            <li>
              <a>
                <li>
                  <a href="">
                  <i class="fab fa-instagram  fa-1x" style="color:white;"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                  <i class="fab fa-youtube  fa-1x" style="color:white;"></i>
                  </a>
                </li>
          </ul>
        </div>
      </footer>
        <div class="footer2">
              <p>© 2019 Copyright: AllocineMET</p>
          </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
