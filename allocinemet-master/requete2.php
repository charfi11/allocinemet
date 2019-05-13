<?php

$req = "SELECT * from FILM";
$id = $_GET['id'];
$req2 = "SELECT * FROM FILM WHERE id_film= $id";
?>
