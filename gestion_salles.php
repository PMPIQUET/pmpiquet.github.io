
<!DOCTYPE html>
<html>
<head>
	<title>
	Lokisalle Admin Gestion des salles
	</title>
</head>
<?php  ?>

<?php
require "config.php";

include 'inc/header.php';?>

<?php
echo "<h1 style=text-align:center>Liste des salles</h1>";



$requete = $bdd->query("SELECT * FROM salle");
$content.= "<div class='container'>";
$content .= "<table class=table-table border ='5'> <tr>";





for ($i=0; $i < $requete->columnCount() ; $i++) {
	# code...
	$colonne = $requete->getColumnMeta($i);

	$content .= "<th>" . $colonne['name'] . '</th>';
}

$content .= "<th>Modifier</th>";
$content .= "<th>Supprimer</th>";

while($ligne = $requete->fetch(PDO::FETCH_ASSOC))
{$photo = $ligne['photo'];
	$content .= "<tr>";
	$content .= "<td>" . $ligne['id_salle'] .  "</td>";
	$content .= "<td>" . $ligne['titre'] .  "</td>";
	$content .= "<td>" . $ligne['description'] .  "</td>";
	$content .= "<td>" . "<img class='img-fluid' src='pics/$photo'>"  .  "</td>";
	$content .= "<td>" . $ligne['pays'] .  "</td>";
	$content .= "<td>" . $ligne['ville'] .  "</td>";
	$content .= "<td>" . $ligne['adresse'] .  "</td>";
	$content .= "<td>" . $ligne['cp'] .  "</td>";
	$content .= "<td>" . $ligne['capacite'] .' Personnes'  ."</td>";
	$content .= "<td>" . $ligne['categorie'] .  "</td>";
  $content .= "<td>" . "<a href='modifier_salle.php?id_salle=". $ligne['id_salle'] ."'>Modifier</a>" .  "</td>";
	$content .= "<td>" . "<a href='supprimer_salle.php?id_salle=". $ligne['id_salle'] ."'>Supprimer</a>" .  "</td>";
	$content .= "</tr>";
}

$requete->closeCursor();

$content .= "</table>";
$content.= "</div>";

echo $content;

?>
<?php
include 'inc/footer.php';
?>
