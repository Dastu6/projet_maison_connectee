<?php
require_once("include_path_inc.php");

require_once("jpgraph.php");
require_once("jpgraph_line.php");

$donnees = array(12,23,9,58,23,26,57,48,12);

$largeur = 250;
$hauteur = 200;

// Initialisation du graphique
$graphe = new Graph($largeur, $hauteur);
// Echelle lineaire ('lin') en ordonnee et pas de valeur en abscisse ('text')
// Valeurs min et max seront determinees automatiquement
$graphe->setScale("textlin");

// Creation de la courbe
$courbe = new LinePlot($donnees);
// Ajout de la courbe au graphique
$graphe->add($courbe);

// Ajout du titre du graphique
$graphe->title->set("Courbe");

// Affichage du graphique
$graphe->stroke();
?>