<?php

$req = "SELECT * from FILM";
$id = $_GET['id'];
$req2 = "SELECT * FROM FILM WHERE id_film= $id";
$req3 = "SELECT * FROM GENRE";
$req4 = "SELECT * FROM GENRE WHERE id_genre=$id";
$req5 = 'SELECT affiche, titre, FILM.id_film FROM FILM, appartient, GENRE WHERE FILM.id_film= appartient.id_film AND appartient.id_genre= GENRE.id_genre AND GENRE.id_genre=' .$_GET['id'];
?>
