<?php

require_once '../models/Connexion.php';
require_once '../daos/campusDAO.php';
require_once '../daos/cursusDAO.php';
require_once '../daos/ecoleDAO.php';

$connexion = new Connexion();

$pdo = $connexion->seConnecter("../config/workshop.ini");


//echo"<hr>Test Fonction SelectAllCampus <hr>";
 $contentCampus = "";
 $lines = selectAllCampus($pdo);
 $jsonData = json_encode($lines);

// Optionnel : Afficher le JSON pour le débogage
// echo $jsonData;

// Créer le contenu pour la liste déroulante
foreach ($lines as $line) {
    $value = $line['ID']; // Supposons que 'id' est le champ clé de votre table
    $label = $line['ville_campus']; // Supposons que 'nom' est le champ que vous voulez afficher
    $contentCampus .= "<option value='$value'>$label</option>\n";
}

//echo"<hr>Test Fonction SelectAllCursus <hr>";
 $contentCursus = "";
 $lines = selectAllCursus($pdo);
 $jsonData = json_encode($lines);

// Optionnel : Afficher le JSON pour le débogage
// echo $jsonData;

// Créer le contenu pour la liste déroulante
foreach ($lines as $line) {
    $value = $line['ID']; // Supposons que 'id' est le champ clé de votre table
    $label = $line['nom_cursus']; // Supposons que 'nom' est le champ que vous voulez afficher
    $contentCursus .= "<option value='$value'>$label</option>\n";
}

//echo"<hr>Test Fonction SelectAllEcole <hr>";
 $contentEcole = "";
 $lines = selectAllEcole($pdo);
 $jsonData = json_encode($lines);

// Optionnel : Afficher le JSON pour le débogage
// echo $jsonData;

// Créer le contenu pour la liste déroulante
foreach ($lines as $line) {
    $value = $line['ID']; // Supposons que 'id' est le champ clé de votre table
    $label = $line['nom']; // Supposons que 'nom' est le champ que vous voulez afficher
    $contentEcole .= "<option value='$value'>$label</option>\n";
}

