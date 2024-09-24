<?php

require_once '../models/Connexion.php';
require_once '../daos/studentDAO.php';

// Initialiser la classe Connexion
$connexion = new Connexion();



$pdo = $connexion->seConnecter("../config/workshop.ini");


 echo "<hr>insert Test <hr>";

$student = new Student();
$student->setPrenom("romain");
$student->setAge(28);
$student->setEcoleID(1);
$student->setCursusID(1);
$student->setCampusID(1);
$student->setDateInterview(date("Y-m-d"));
$student->setPhoto("romain.jpg");
$student->setTalent("pro tennis de table");

$studentDAO = new StudentDAO($pdo);
$affected = $studentDAO->insertStudent($student);

echo "Insertion : $affected";