
<!DOCTYPE html>
<html>
<head>
	<title>
		Lokisalle Admin Gestion des Commandes
	</title>
</head>
<?php  ?>

<?php

require "config.php";

include 'inc/header.php';?>

<?php
echo "<h1 style=text-align:center>Liste des Commandes</h1>";


$requete = $bdd->query("SELECT * FROM commande ");

$content .= "<table class=table table-bordered border ='5'> <tr>";

for ($i=0; $i < $requete->columnCount() ; $i++) {
	# code...
	$colonne = $requete->getColumnMeta($i);
	$content .= "<th>" . $colonne['name'] . '</th>';
}


$content .= "<th>Supprimer</th>";

while($ligne = $requete->fetch(PDO::FETCH_ASSOC))
{
	$content .= "<tr>";
	$content .= "<td>" . $ligne['id_commande'] .  "</td>";
	$content .= "<td>" . $ligne['id_membre']  .  "</td>";
	$content .= "<td>" . $ligne['id_produit'] .  "</td>";
	$content .= "<td>" . $ligne['date_enregistrement'] .  "</td>";
	$content .= "<td>" . "<a href='supprimer_commande.php?id_commande=". $ligne['id_commande'] ."'>Supprimer</a>" .  "</td>";
	$content .= "</tr>";
}

$requete->closeCursor();

$content .= "</table>";


echo $content;

?>
<?php
include 'inc/footer.php';
?>
