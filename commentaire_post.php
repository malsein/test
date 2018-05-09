<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blogchat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req=$bdd->prepare('INSERT INTO commentaires (pseudo, commentaire) VALUES(:pseudo, :commentaire)');
$req->execute(array('pseudo'=> $_POST['pseudo'],'commentaire'=> $_POST['commentaire']));

header('location:commentaires.php');

 ?>
