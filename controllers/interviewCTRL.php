<?php

require_once '../models/Connexion.php';
require_once '../daos/listInterviewDAO.php';

// Initialiser la classe Connexion
$connexion = new Connexion();
$pdo = $connexion->seConnecter("../config/workshop.ini");
// Appel de la fonction du DAO
$listStudent = lastInsert($pdo);
// Encodage de la liste en JSON
$jsonData = json_encode($listStudent);

