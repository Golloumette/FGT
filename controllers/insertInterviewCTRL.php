<?php

require_once '../models/Connexion.php';
require_once '../daos/studentDAO.php';

// Initialiser la classe Connexion
$connexion = new Connexion();



$pdo = $connexion->seConnecter("../config/workshop.ini");
$btValider = filter_input(INPUT_POST,"btValider");
echo "bouton valider",$btValider;
if($btValider!=null){

    
    // je récupère mes valeurs depuis mon formulaire
   
    $prenom = filter_input(INPUT_POST,"user_prenom");
    $age = filter_input(INPUT_POST,"user_age");
    $talent = filter_input(INPUT_POST, "user_talent");
    $photo = filter_input(INPUT_POST, "user_photo");
    $ecole = filter_input(INPUT_POST, "ecole");
    $campus = filter_input(INPUT_POST, "campus");
    $cursus = filter_input(INPUT_POST, "cursus");

    echo "prenom :",$prenom;
}   

$student = new Student();
$student->setPrenom($prenom);
$student->setAge($age);
$student->setEcoleID($ecole);
$student->setCursusID($campus);
$student->setCampusID($cursus);
$student->setDateInterview(date("Y-m-d"));
$student->setPhoto($photo);
$student->setTalent($talent);

$studentDAO = new StudentDAO($pdo);
$affected = $studentDAO->insertStudent($student);

if ($affected === 1) {
   
    $message = "Ajout interview OK !!!";
} else {
   
    $message = "Problème d'insertion, veuillez contacter votre administrateur (Madame Caroline) !!!";
} /**fin du else */

include '../views/ajout.php';