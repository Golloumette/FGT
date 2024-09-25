<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../models/Connexion.php';
require_once '../daos/studentDAO.php';

// Initialiser la classe Connexion
$connexion = new Connexion();

$pdo = $connexion->seConnecter("../config/workshop.ini");

if (isset($_FILES['user_photo'])) {
    $photo = $_FILES['user_photo']['name']; // Nom du fichier
    $tmp_name = $_FILES['user_photo']['tmp_name']; // Chemin temporaire
    $destination = __DIR__ . '/../Images/portrait/' . $photo;  // Définir la destination finale
    move_uploaded_file($tmp_name, $destination); // Déplacer le fichier vers la destination
}
$student = new Student();
$student->setPrenom(filter_input(INPUT_POST, "user_prenom"));
$student->setAge(filter_input(INPUT_POST, "user_age"));
$student->setEcoleID(filter_input(INPUT_POST, "ecole"));
$student->setCursusID(filter_input(INPUT_POST, "campus"));
$student->setCampusID(filter_input(INPUT_POST, "cursus"));
$currentDate = (new DateTime())->format('Y-m-d');
$student->setDateInterview($currentDate);
$student->setPhoto($photo);
$student->setTalent(filter_input(INPUT_POST, "user_talent"));

$studentDAO = new StudentDAO($pdo);
$affected = $studentDAO->insertStudent($student);

if ($affected === 1) {

    $message = "Ajout interview OK !!!";
} else {

    $message = "Problème d'insertion, veuillez contacter votre administrateur (Madame Caroline) !!!";
}
/**fin du else */

include '../views/ajout.php';
