<?php

require_once '../models/Connexion.php';
require_once '../daos/cursusDAO.php';

$connexion = new Connexion();

$pdo = $connexion->seConnecter("../config/workshop.ini");





echo"<hr>Test Fonction SelectAllCursus <hr>";
 $content = "";
 $lines = selectAllCursus($pdo);
 $jsonData = json_encode($lines);

// Optionnel : Afficher le JSON pour le débogage
// echo $jsonData;

// Créer le contenu pour la liste déroulante
foreach ($lines as $line) {
    $value = $line['ID']; // Supposons que 'id' est le champ clé de votre table
    $label = $line['nom_cursus']; // Supposons que 'nom' est le champ que vous voulez afficher
    $content .= "<option value='$value'>$label</option>\n";
}
?>

<html>
    <form action="" method="get">
        <label>Liste déroulante cursus</label>
        <select>
            <?php 
                echo $content; // Afficher les options
            ?>
        </select>
    </form>
</html>