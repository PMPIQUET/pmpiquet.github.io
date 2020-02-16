
<!DOCTYPE html>
<html>
<head>
	<title>
	Lokisalle Admin Gestion des Membres
	</title>
</head>


<?php

require "config.php";
include 'inc/header.php';?>

<?php
echo "<h1 style=text-align:center>Liste des Membres</h1>";



$requete = $bdd->query("SELECT * FROM membre");

$content .= "<table class=table table-bordered border ='5'> <tr>";

for ($i=0; $i < $requete->columnCount() ; $i++) {
	# code...
	$colonne = $requete->getColumnMeta($i);
	$content .= "<th>" . $colonne['name'] . '</th>';
}

$content .= "<th>Modifier</th>";
$content .= "<th>Supprimer</th>";

while($ligne = $requete->fetch(PDO::FETCH_ASSOC))
{
	$content .= "<tr>";
	$content .= "<td>" . $ligne['id_membre'] .  "</td>";
	$content .= "<td>" . $ligne['pseudo'] .  "</td>";
	$content .= "<td>" . $ligne['mdp'] .  "</td>";
	$content .= "<td>" . $ligne['nom']  .  "</td>";
	$content .= "<td>" . $ligne['prenom'] .  "</td>";
	$content .= "<td>" . $ligne['email'] .  "</td>";
	$content .= "<td>" . $ligne['civilite'] .  "</td>";
	$content .= "<td>" . $ligne['statut'] .  "</td>";
	$content .= "<td>" . $ligne['date_enregistrement'] .  "</td>";
  $content .= "<td>" . "<a href='modifier_membre.php?id_membre=". $ligne['id_membre'] ."'>Modifier</a>" .  "</td>";
	$content .= "<td>" . "<a href='supprimer_membre.php?id_membre=". $ligne['id_membre'] ."'>Supprimer</a>" .  "</td>";
	$content .= "</tr>";
}

$requete->closeCursor();

$content .= "</table>";


echo $content;

?>
<?php
include 'inc/footer.php';
?>
