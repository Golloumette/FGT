<?php

require_once '../models/Connexion.php';
require_once '../daos/listInterviewDAO.php';

// Initialiser la classe Connexion
$connexion = new Connexion();



$pdo = $connexion->seConnecter("../config/workshop.ini");


 echo "<hr>Select last insert <hr>";

 $listStudent = lastInsert($pdo);
 var_dump($listStudent);