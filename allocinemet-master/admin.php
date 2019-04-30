<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin</title>
    </head>

    <body>
        <div class="container1">

        </div>
            <h1>ADMIN</h1>


        <p class="description">Admin vous permet d'ajouter un nouveau Film.</p>


        <form action="admin.php" method="post" id="formulaire">
            <p>
            <label for="TITRE">TITRE</label> : <input type="text" name="TITRE" id="TITRE"  /><br />

            <label for="DATE_DE_SORTIE">DATE_DE_SORTIE</label> : <input type="date" name="DATE_DE_SORTIE" id="DATE_DE_SORTIE"  /><br />
            <label for="AFFICHE">AFFICHE</label> :  <input type="text" name="AFFICHE" id="AFFICHE" /><br />
            <label for="GENRE">GENRE</label> :  <input type="text" name="GENRE" id="GENRE" /><br />

            <input type="submit" value="Envoyer" />
        </p>
        </form>

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=FILM;charset=utf8', 'charfi11', 'pioupiou');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO FILM (TITRE, DATE_DE_SORTIE, GENRE, AFFICHE) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['TITRE'], $_POST['DATE_DE_SORTIE'], $_POST['GENRE'], $_POST['AFFICHE']));

?>
    </body>
</html>
