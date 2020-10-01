<?php
$bdd = new PDO('mysql:host=localhost;dbname=serveur'
, 'root', '');
$reponse = $bdd->query('SELECT * FROM visiteurs');
while ($donnees = $reponse->fetch())
{
	echo '<p>' . $donnnees["pseudo"] . '</p>';


}

?>