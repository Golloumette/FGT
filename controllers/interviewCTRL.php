<?php

require_once '../models/Connexion.php';
require_once '../daos/listInterviewDAO.php';

// Initialiser la classe Connexion
$connexion = new Connexion();



$pdo = $connexion->seConnecter("../config/workshop.ini");

$listStudent = lastInsert($pdo);

