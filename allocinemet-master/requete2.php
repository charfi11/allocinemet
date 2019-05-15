<?php

$req = "SELECT * from FILM";
$id = $_GET['id'];
$req2 = "SELECT * FROM FILM WHERE id_film= $id";
$req3 = "SELECT * FROM GENRE";
$req4 = "SELECT * FROM GENRE WHERE id_genre=$id";
?>
