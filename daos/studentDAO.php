<?php
// declare (strict_type = 1);
// On charge le script de l'objet
require_once'../models/student.php';
require_once'../models/Connexion.php';

class StudentDAO{
    // On déclare l'attribut
    private PDO $pdo;
    // Déclare le constructeur, il aura une execution auto à l'initialisation de l'objet
    function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    // Fonction Insert avec l'objet student
    public function insertStudent (Student $student):int {
        $affected = 0;
        try {
            $cmd = $this->pdo->prepare ("INSERT INTO studenttalent(prenom,age,ecole_ID,cursus_ID,campus_ID,date_Interview,photo,talent) VALUES(?,?,?,?,?,?,?,?)");
        $cmd->bindValue(1, $student->getPrenom());
        $cmd->bindValue(2, $student->getAge());
        $cmd->bindValue(3, $student->getEcoleID());
        $cmd->bindValue(4, $student->getCursusID());
        $cmd->bindValue(5, $student->getCampusID());
        $cmd->bindValue(6, $student->getDateInterview());
        $cmd->bindValue(7, $student->getPhoto());
        $cmd->bindValue(8, $student->getTalent());
        $cmd->execute();
        $affected = $cmd->rowCount();
        } catch (PDOException $e) {
            $affected = -1;
        }
        return $affected;
    }

}