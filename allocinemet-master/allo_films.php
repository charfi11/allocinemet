<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Film</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/allo_films.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>

  <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
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

  <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <div class="header_film">
    <a href="allo_films.php"><h1>NOS FILMS</h1></a>
  </div>

  <!--//////////////////////////////  LISTE GAUCHE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
  <div class="placement_middle">
      <div class="menu_films">
        <div class="search">
          <input type="search" id="site-search" name="q" aria-label="Search through site content">
           <a href="#"><i class="fas fa-search"></i></a>
         </div>
           <a href="#" class="collapsible">Action</a>
           <a href="#" class="collapsible">Science-fiction</a>
           <a href="#" class="collapsible">Comédie</a>
           <a href="#" class="collapsible">Drame</a>
           <a href="#" class="collapsible">Animation</a>
           <a href="#" class="collapsible">Horreur</a>
      </div>

      <!--//////////////////////////////  LISTE GAUCHE POUR SMARTPHONE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <div class="menu_films_portable">
        <ul id="menu-accordeon">
          <input type="search" id="site-search" name="q" aria-label="Search through site content">
          <button>Rechercher</button>
          <li><a href="#" class="collapsible">Films</a>
            <ul>
              <li><a href="#" class="collapsible">Action</a>

              </li>
              <li><a href="#" class="collapsible">Science-fiction</a>

              </li>
              <li><a href="#" class="collapsible">Comédie</a>

              </li>
              <li><a href="#" class="collapsible">Drame</a>

              </li>
              <li><a href="#" class="collapsible">Animation</a>

              </li>
              <li><a href="#" class="collapsible">Horreur</a>

              </li>
            </ul>
          </li>
        </ul>
      </div>


    <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <div class="liens_films">
        <?php

        include('connect_bdd.php');

        include('requete2.php');

        $reponse = $bdd->query($req);

        while ($donnees = $reponse->fetch())

        {
          ?>
        <a href="content.php?id=<?php echo $donnees['id_film'];?>"><img class="effect " src="<?php echo $donnees['affiche'];?>" style="height: 100%; width: 100%;">
        </a>
        <?php
        }

         $reponse->closeCursor();
        ?>
    </div>
  </div>
  </main>
    <!--//////////////////////////////  CAROUSEL SIEMA  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->



  <!--            APPARITION IMAGE SELON SCROLL
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script>
var derniere_position_de_scroll_connue = 0;
function faireQuelqueChose(position_scroll) {
  // faire quelque chose avec la position du scroll
}
window.addEventListener(function(e) {
           //     TweenMax.to('.liens_films', 4, {y: -800, ease: Elastic.easeOut.config(0.5, 0.2) });
                TweenLite.to('.liens_films', 0.8, {delay: 1, ease: Power1.easeOut, y: -800, opacity: 1 });
            })

        </script>
        -->


  <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <footer>
    <div class="footer1">
          <h3><a href="index.php"> ALLOCINE<strong>MET</strong></a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur ad Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
            <div class="footer_part2">
            <p><a href="#">Film 1</a></p>
            <p><a href="#">Film 2</a></p>
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

  <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->



  <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>

</body>

</html>
