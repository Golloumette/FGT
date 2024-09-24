<?php

require_once '../models/Connexion.php';
require_once '../daos/ecoleDAO.php';

$connexion = new Connexion();

$pdo = $connexion->seConnecter("../config/workshop.ini");





echo"<hr>Test Fonction SelectAllEcole <hr>";
 $content = "";
 $lines = selectAllEcole($pdo);
 $jsonData = json_encode($lines);

// Optionnel : Afficher le JSON pour le débogage
// echo $jsonData;

// Créer le contenu pour la liste déroulante
foreach ($lines as $line) {
    $value = $line['ID']; // Supposons que 'id' est le champ clé de votre table
    $label = $line['nom']; // Supposons que 'nom' est le champ que vous voulez afficher
    $content .= "<option value='$value'>$label</option>\n";
}
?>

<html>
    <form action="" method="get">
        <label>Liste déroulante Ecole</label>
        <select>
            <?php 
                echo $content; // Afficher les options
            ?>
        </select>
    </form>
</html>