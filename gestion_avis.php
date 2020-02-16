
<!DOCTYPE html>
<html>
<head>
	<title>
	Lokisalle Admin Gestion des Avis
	</title>
</head>
<?php  ?>

<?php
require "config.php";

include 'inc/header.php';?>

<?php
echo "<h1 style=text-align:center>Gestion des avis</h1>";



$requete = $bdd->query("SELECT * FROM avis");

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
	$content .= "<td>" . $ligne['id_avis'] .  "</td>";
	$content .= "<td>" . $ligne['id_membre'] .  "</td>";
	$content .= "<td>" . $ligne['id_salle'] .  "</td>";
	$content .= "<td>" . $ligne['commentaire']  .  "</td>";
	$content .= "<td>" . $ligne['note'] .  "</td>";
	$content .= "<td>" . $ligne['date_enregistrement'] .  "</td>";
  $content .= "<td>" . "<a href='modifier_avis.php?id_avis=" .$ligne['id_avis'] ."'>Modifier</a>" .  "</td>";
	$content .= "<td>" . "<a href='supprimer_avis.php?id_avis=".$ligne['id_avis'] ."'>Supprimer</a>" .  "</td>";
	$content .= "</tr>";
}

$requete->closeCursor();

$content .= "</table>";


echo $content;

?>
<?php
include 'inc/footer.php';
?>
