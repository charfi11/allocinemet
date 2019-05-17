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
      <body>
        <?php

        include('connect_bdd.php');

        if(isset($_POST['erase'])){
          if(isset($_POST['id_film'])){
            $efface = $_POST['id_film'];
            $byefait = $bdd->prepare('DELETE FROM realiser WHERE realiser.id_film='.$efface);
            $byefait->execute();
            $byejoue = $bdd->prepare('DELETE FROM joue WHERE joue.id_film='.$efface);
            $byejoue->execute();
            $byepossede = $bdd->prepare('DELETE FROM appartient WHERE appartient.id_film='.$efface);
            $byepossede->execute();
            $erase = $bdd->prepare('DELETE FROM FILM WHERE FILM.id_film='.$efface);
            $erase->execute();
            echo "<h1>Le film sélectionné a été effacé</h1><br />";
          }else{
            echo "<h1>Aucune donnée à effacer</h1><br />";
          }
        }
   
        ?>
    </body>
</html>
