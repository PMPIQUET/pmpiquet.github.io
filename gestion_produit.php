
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
echo "<h1 style=text-align:center>Liste des Produits</h1>";



$requete = $bdd->query("SELECT * FROM produit");

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
  $content .= "<td>" . $ligne['id_produit'] .  "</td>";
  $content .= "<td>" . $ligne['id_salle']  .  "</td>";
  $content .= "<td>" . $ligne['date_arrivee'] .  "</td>";
  $content .= "<td>" . $ligne['date_depart'] .  "</td>";
  $content .= "<td>" . $ligne['prix'] ." €"  ."</td>";
  $content .= "<td>" . $ligne['etat'] .  "</td>";
  $content .= "<td>" . "<a href='modifier_produit.php?id_produit=". $ligne['id_produit'] ."'>Modifier</a>" .  "</td>";
  $content .= "<td>" . "<a href='supprimer_produit.php?id_produit=". $ligne['id_produit'] ."'>Supprimer</a>" .  "</td>";
  $content .= "</tr>";
}

$requete->closeCursor();

$content .= "</table>";


echo $content;

?>
<?php
include 'inc/footer.php';
?>
