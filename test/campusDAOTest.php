<?php

require_once '../models/Connexion.php';
require_once '../daos/campusDAO.php';

$connexion = new Connexion();

$pdo = $connexion->seConnecter("../config/workshop.ini");





echo"<hr>Test Fonction SelectAllCampus <hr>";
 $content = "";
 $lines = selectAllCampus($pdo);
 $jsonData = json_encode($lines);

// Optionnel : Afficher le JSON pour le débogage
// echo $jsonData;

// Créer le contenu pour la liste déroulante
foreach ($lines as $line) {
    $value = $line['ID']; // Supposons que 'id' est le champ clé de votre table
    $label = $line['ville_campus']; // Supposons que 'nom' est le champ que vous voulez afficher
    $content .= "<option value='$value'>$label</option>\n";
}
?>

<html>
    <form action="" method="get">
        <label>Liste déroulante</label>
        <select>
            <?php 
                echo $content; // Afficher les options
            ?>
        </select>
    </form>
</html>