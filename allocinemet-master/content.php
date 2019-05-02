<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Content</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <!--  pour la police des titres  -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <!-- pour les autres textes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <!--mon CSS -->
  <link rel="stylesheet" href="css/style_pages_cont_real_act.css">
  <link rel="stylesheet" href="css/footer.css">

<body>
  <!--pour se connecter à la bdd-->
  <?php
  try
  {
  	// On se connecte à MySQL
  	$bdd = new PDO('mysql:host=localhost;dbname=FILM;charset=utf8', 'charfi11', 'pioupiou');
  }
  catch(Exception $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

  $req = "SELECT * FROM FILM WHERE ID_film=" .$_GET["id"];

  $reponse = $bdd->query($req);

  while ($donnees = $reponse->fetch())

  {
    ?>

  <main>
  <header>
    <nav id="link_nav">
      <a href="index.html">ALLOCINE<strong>MET</strong></a>
      <div id="Navbar">
        <a class="liens" href="allo_films.php">FILMS </a>
        <a class="liens" href="contact.html">CONTACT </a>
        <a class="liens" href="acteur.html">ACTEURS </a>
        <a class="liens" href="realisateur.html">REALISATEURS </a>
      </div>
    </nav>
  </header>

    <!--  pour le titre -->

    <div class="titre">
      <a href="content.php"><h1 class="text-uppercase"><?php echo $donnees['titre'];?></h1></a><!-- intégration du titre via la base de donnée -->
    </div>

    <!-- pour l'image du film -->

    <div class="affiche"><a href="#"><img src="<?php echo $donnees['affiche']?>" style="height: 90%; width: 80%;"/></a><!-- intégration de l'image via la bdd -->
    </div>
    <!-- pour la description du film -->
    <div class="resume">
    <h2>RESUME</h2>
    <p><?php echo $donnees['resume'];?>
    </p></div>
  </div>
    <!-- pour la partie récap d'infos et la bande annonce -->
<div class="part_acteur_bo">
  <div class="part_act">
          <a href="realisateur.html">
              <h5>Réalisateur</h5></a>
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
          <a href="#">
              <h5>Production</h5></a>
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
          <a href="acteur.html">
              <h5 class="mb-1">Acteurs</h5></a>
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>

        </div>
  <?php echo $donnees['bande_annonce'];?>
</div>
<br>
  </main>

  <footer>
    <div class="footer1">
          <h5><a href="index.html"> AllocineMET</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetur ad Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
            <div class="footer_part2">
          <h5>Films à l'affiche</h5>
            <a href="#">Film 1</a>
            <a href="#">Film 2</a>
            <br>
          <h5>Liens utiles</h5>
          <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
          </div>
          <div class="footer_part3">
          <h5><a href="contact.php">Contact</a></h5>
          <ul>
          <li>
            AllocineMET</li>
          <li>
            www.AllocineMET.net</li>
          <li>
            TEL +33 6 52 50 05 35</li>
          <li>
            TEL +33 6 87 26 69 70</li>
          <li>© 2019 Copyright: AllocineMET
          </ul>
        </div>
      </footer>
        <div class="footer2">
            <ul>
              <li>
                <a href="">
                  <img src="img/facebook.png" title="facebook">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="img/twitter.png" title="twitter">
                </a>
              </li>
              <li>
                <a>
                  <img src="img/github.png" title="github">
                </a>
              </li>
              <li>
                <ahref="">
                  <img src="img/linkedin.png" title="linkedin">
                </a>
              </li>
            </ul>
          </div>

  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='java/main.js'></script>
  <!-- fin de la boucle et fin de la requête -->
  <?php
  }

   $reponse->closeCursor();
  ?>
</body>

</html>
