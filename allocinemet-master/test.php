<?php include('database.php');?>

<?php

$req = $bdd->query('SELECT * FROM admin');

$admin = $req->fetch();

?>
